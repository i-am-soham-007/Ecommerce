<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ URL::asset('master-admin/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ URL::asset('master-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('master-admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('master-admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('master-admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ URL::asset('master-admin/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ URL::asset('master-admin/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ URL::asset('master-admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	{{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet"> --}}
	<link href="{{ URL::asset('master-admin/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('master-admin/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ URL::asset('master-admin/assets/css/dark-theme.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('master-admin/assets/css/semi-dark.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('master-admin/assets/css/header-colors.css') }}"/>

	<link href="{{ URL::asset('master-admin/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('master-admin/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
	<!-- Sweet Alert-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Admin </title>
</head>
<body>
	<!--wrapper-->
	<div class="wrapper">
        @include('master-admin.include.sidebar')
        @include('master-admin.include.header')
        <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				
                <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Category</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
                <form name="CategoryForm" id="CategoryForm" 
				@if(empty($categorydata['id']))
				action="{{ url('admin/add-edit-category')}}" 
				@else
				action="{{ url('admin/add-edit-category/'.$categorydata['id'])}}" 
				@endif
				enctype="multipart/form-data" method="POST"> 
					@csrf
					<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $title }}</h5>
							
							@if(Session::has('error'))
							   <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px">
								 {{Session::get('error')}}
								 <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
								</button>
							   </div>
							   @endif
							   @if(Session::has('success'))
							   <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px">
								 {{Session::get('success')}}
								 <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
								</button>
							   </div>
							   @endif

							@if($errors->any())
                               <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <hr/>
                            <div class="form-body mt-4">
                                <div class="row">
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Category Name</label>
											<input type="text" class="form-control" id="inputProductTitle" name="category_name" placeholder="Enter Category Name" 
											@if(!empty($categorydata['category_name'])) value="{{ $categorydata['category_name'] }}" @else  value="{{ old('category_name') }}" @endif>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6">       
										<div class="mb-3">
											<label for="formFile" class="form-label">Default file input example</label>
											<input class="form-control" type="file" id="formFile" name="category_image">
										</div>
										@if(!empty($categorydata['category_image']))
										<div>
											<img style="width:80px; margin-top:5px;" src="{{ asset('master-admin/assets/categoryImage/'.$categorydata['category_image']) }}">
											&nbsp;
											<a href="javascript:void(0)" class="confirmDelete" record="category-image" recordid="{{ $categorydata['id'] }}">Delete Image</a>
										</div>
										@endif
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Category Url</label>
											<input type="text" class="form-control" id="inputProductTitle" name="category_url" placeholder="Enter Category Url" @if(!empty($categorydata['url'])) value="{{ $categorydata['url'] }}" @else  value="{{ old('category_url') }}" @endif>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Category Description</label>
											<textarea class="form-control" id="inputProductDescription" name="description" rows="3">
												@if(!empty($categorydata['description'])) {{ $categorydata['description'] }} @else {{ old('description') }} @endif
											</textarea>
										</div>
									</div>	
								<div class="col-lg-6 col-sm-6 col-md-6">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Meta Title</label>
										<textarea class="form-control" id="inputProductDescription" name="title" rows="3">
											@if(!empty($categorydata['meta_title'])) {{ $categorydata['meta_title'] }} @else {{ old('title') }} @endif
										</textarea>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-md-6">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Meta Description</label>
										<textarea class="form-control" id="inputProductDescription" name="meta_desc" rows="3" >
											@if(!empty($categorydata['meta_description'])) {{ $categorydata['meta_description'] }} @else  {{ old('meta_desc') }} @endif
										</textarea>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-md-6">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Meta Keywords</label>
										<textarea class="form-control" id="inputProductDescription" name="meta_keyword" rows="3" >
											@if(!empty($categorydata['meta_keyword'])) {{ $categorydata['meta_keyword'] }} @else  {{ old('meta_keyword') }} @endif
										</textarea>
									</div>
								</div>
							</div>
						</div><!--end row-->
						</div>
						<div class="card-footer">
							<input type="submit" name="submit" class="btn btn-primary" value="submit">
						</div>
					</div>
				</form>
                </div>
			</div>
		</div>
		<!--end page wrapper -->
        <!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
    @include('master-admin.include.footer')

    </div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ URL::asset('master-admin/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ URL::asset('master-admin/assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('master-admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ URL::asset('master-admin/assets/js/app.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/plugins/select2/js/select2.min.js') }}"></script>
	<script src="{{ URL::asset('master-admin/assets/js/admin.js') }}"></script>
</body>
</html>
<script>
	$(document).ready(function(){
		$(".select2").select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	});
</script>