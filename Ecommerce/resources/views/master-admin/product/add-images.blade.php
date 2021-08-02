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
<style>
label.form-label.bold {
    font-weight: 600 !important;
}
</style>
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
					<div class="breadcrumb-title pe-3">Product Images</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Product Images</li>
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
                
                @if($errors->any())
                <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                <form name="addImagesForm" id="addImagesForm" method="post" action="{{ url('admin/add-images/'.$productdata['id'])}}" enctype="multipart/form-data"> 
					@csrf
					<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $title }}</h5>
							<hr/>
                            <div class="form-body mt-4">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="inputProductTitle" class="form-label bold">Product Name :</label> &nbsp; {{ !empty($productdata['product_name']) ? $productdata['product_name'] : '' }}
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="inputProductCode" class="form-label bold">Product Code :</label> &nbsp; {{ !empty($productdata['product_code']) ? $productdata['product_code'] : '' }}
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="inputProductColor" class="form-label bold">Product Color :</label> &nbsp;  {{ !empty($productdata['product_color']) ? $productdata['product_color'] : '' }}
                                        </div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">       
                                        <div class="form-group">
                                            <div class="form-group">
                                                <img style="width:120px;" src="{{ asset('master-admin/assets/productImage/small/'.$productdata['main_image']) }}">
                                            </div>
                                        </div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <div class="field_wrapper">
                                                <div>
                                                    <input type="file" name="image[]" id="image" multiple ="" required/>
                                                    <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->
						</div>
						<div class="card-footer mt-4">
							<input type="submit" name="submit" class="btn btn-primary" value="submit">
						</div>
					</div>
				</form>
            </div>

            <form name="editImageForm" id="editImageForm" action="{{ url('admin/edit-images/'.$productdata['id'])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><h5>Product Images</h5>
                        </div>  
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($productdata['images'] as $image)
                                    <tr>
                                        <td>{{ $image['id'] }}</td>
                                        <td><img style="width:120px;" src="{{ asset('master-admin/assets/productImage/small/'.$image['image']) }}"></td>
                                        <td>
                                            @if($image['status'] ==1)
                                                <a class="updateImageStatus" id="image-{{ $image['id'] }}" image_id ="{{ $image['id'] }}" href="javascript:void(0)">Active</a>
                                            @else 
                                                <a class="updateImageStatus" id="image-{{ $image['id'] }}"  image_id ="{{ $image['id'] }}" href="javascript:void(0)">Inactive</a>
                                            @endif
                                            &nbsp;&nbsp;
                                            <a href="javascript:void(0)" class="confirmDelete" record="image" recordid="{{ $image['id'] }}" title="delete Attribute"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer mt-4">
                        <input type="submit" name="update" class="btn btn-primary" value="update">
                    </div>
                </div>
            </form>
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