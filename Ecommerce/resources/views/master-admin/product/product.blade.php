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
					<div class="breadcrumb-title pe-3">Product</div>
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
                <form name="ProductForm" id="ProductForm" 
				@if(empty($productdata['id']))
				action="{{ url('admin/add-edit-product')}}" 
				@else
				action="{{ url('admin/add-edit-product/'.$productdata['id'])}}" 
				@endif
				enctype="multipart/form-data" method="POST"> 
					@csrf
					<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $title }}</h5>	
                            <hr/>
                            <div class="form-body mt-4">
                                <div class="row">
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">category</label>
											<select class="select2" name="category_id" id="category_id">
												<option value="0">Select</option>
                                                @foreach($categories as $category)
													<option value="{{ $category['id'] }}" @if(!empty(@old('category_id')) && $category['id'] == @old('category_id')) selected="" @elseif(!empty($productdata['category_id']) && $category['id'] == $productdata['category_id']) selected="" @endif>{{ $category['category_name'] }}</option>
                                                @endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">subcategory</label>
											<select class="select2" name="subcategory_id" id="subcategory_id">
												<option value="0">Select</option>
                                                @foreach($subcategories as $section)
                                                    <optgroup label="{{ $section['name'] }}"></optgroup>
                                                        @foreach($section['subcategories'] as $subcategory)
                                                        <option value="{{ $subcategory['id'] }}" @if(!empty(@old('subcategory_id')) && $subcategory['id'] == @old('subcategory_id')) selected="" @elseif(!empty($productdata['subcategory_id']) && $subcategory['id'] == $productdata['subcategory_id']) selected="" @endif> &nbsp;&nbsp;--&nbsp;&nbsp;{{ $subcategory['subcategory_name'] }}</option>
                                                            @foreach($subcategory['childsubcategory'] as $childsubcategory)
                                                                <option value="{{ $childsubcategory['id'] }}" @if(!empty(@old('subcategory_id')) && $childsubcategory['id'] == @old('subcategory_id')) selected="" @elseif(!empty($productdata['subcategory_id']) && $childsubcategory['id'] == $productdata['subcategory_id']) selected="" @endif> &nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;&nbsp;{{ $childsubcategory['subcategory_name'] }}</option>
                                                            @endforeach
                                                        @endforeach
                                                @endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Product Name</label>
											<input type="text" class="form-control" id="inputProductTitle" name="product_name" placeholder="Enter Product Name" 
											@if(!empty($productdata['product_name'])) value="{{ $productdata['product_name'] }}" @else  value="{{ old('product_name') }}" @endif>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">Brand</label>
											<select class="select2" name="brand_id" id="brand_id">
												<option value="0">Select</option>
                                                @foreach($brands as $brand)
                                                <option value="{{ $brand['id'] }}" @if(!empty($productdata['brand_id']) && $productdata['brand_id'] == $brand['id']) selected="" @endif> {{ $brand['name'] }}</option>
                                                @endforeach
											</select>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductCode" class="form-label">Product Code</label>
											<input type="text" class="form-control" id="inputProductCode" name="product_code" placeholder="Enter Product Code" 
											@if(!empty($productdata['product_code'])) value="{{ $productdata['product_code'] }}" @else  value="{{ old('product_code') }}" @endif>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductColor" class="form-label">Product Color</label>
											<input type="text" class="form-control" id="inputProductColor" name="product_color" placeholder="Enter Product Color" 
											@if(!empty($productdata['product_color'])) value="{{ $productdata['product_color'] }}" @else  value="{{ old('product_color') }}" @endif>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductWeight" class="form-label">Product Weight</label>
											<input type="text" class="form-control" id="inputProductWeight" name="product_weight" placeholder="Enter Product Weight" 
											@if(!empty($productdata['product_weight'])) value="{{ $productdata['product_weight'] }}" @else  value="{{ old('product_weight') }}" @endif>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductPrice" class="form-label">Product Price</label>
											<input type="text" class="form-control" id="inputProductPrice" name="product_price" placeholder="Enter Product Price" 
											@if(!empty($productdata['product_price'])) value="{{ $productdata['product_price'] }}" @else  value="{{ old('product_price') }}" @endif>
										</div>
									</div>
                                    
									<div class="col-lg-6 col-sm-6 col-md-6">       
										<div class="mb-3">
											<label for="formFile" class="form-label">Product Main Image</label>
											<input class="form-control" type="file" id="formFile" name="main_image">
										</div>
										<div>Recommended Image Size: Width:1040px; Height: 1200px</div>
									</div>

									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductDiscount" class="form-label">Product Discount (%)</label>
											<input type="text" class="form-control" id="inputProductDiscount" name="product_discount" placeholder="Enter Product Discount" 
											@if(!empty($productdata['product_discount'])) value="{{ $productdata['product_discount'] }}" @else  value="{{ old('product_discount') }}" @endif>
										</div>
									</div>
									@if(!empty($productdata['main_image']))
									<div class="col-lg-6 col-sm-6">
										<div class="mb-3">
											<div>
												<img style="width:80px; margin-top:5px;" src="{{ asset('master-admin/assets/productImage/small/'.$productdata['main_image']) }}">
												&nbsp;
												<a href="javascript:void(0)" class="confirmDelete" record="product-image" recordid="{{ $productdata['id'] }}">Delete Image</a>
											</div>
										</div>
									</div>
									@endif
                                    <div class="col-lg-6 col-sm-6 col-md-6">       
										<div class="mb-3">
											<label for="formFile" class="form-label">Product Main Video</label>
											<input class="form-control" type="file" id="formFile" name="product_video">
										</div>
										@if(!empty($productdata['product_video']))
										<div>
											<br>
											<a href="{{ url('master-admin/assets/productVideo/'.$productdata['product_video']) }}" download>Download</a>
											&nbsp; | 
											<a href="javascript:void(0)" class="confirmDelete" record="product-video" recordid="{{ $productdata['id'] }}">Delete Video </a>
										</div>
										@endif
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputWashCare" class="form-label">Wash Care</label>
											<textarea class="form-control" id="inputWashCare" name="wash_care" rows="3">
												@if(!empty($productdata['wash_care'])) {{ $productdata['wash_care'] }} @else {{ old('wash_care') }} @endif
											</textarea>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Product Description</label>
											<textarea class="form-control" id="inputProductDescription" name="description" rows="3">
												@if(!empty($productdata['description'])) {{ $productdata['description'] }} @else {{ old('description') }} @endif
											</textarea>
										</div>
									</div>		
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">Fabric</label>
											<select class="select2" name="fabric" id="fabric">
												<option value="0">Select</option>
                                                @foreach($fabricArray as $fabric)
                                                <option value="{{ $fabric }}" @if(!empty($productdata['fabric']) && $productdata['fabric'] == $fabric) selected="" @endif> {{ $fabric }}</option>
                                                @endforeach
											</select>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">Sleeve</label>
											<select class="select2" name="sleeve" id="sleeve">
												<option value="0">Select</option>
                                                @foreach($sleeveArray as $sleeve)
                                                <option value="{{ $sleeve }}" @if(!empty($productdata['sleeve']) && $productdata['sleeve'] == $sleeve) selected="" @endif> {{ $sleeve }}</option>
                                                @endforeach
											</select>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">Pattern</label>
											<select class="select2" name="pattern" id="pattern">
												<option value="0">Select</option>
                                                @foreach($patternArray as $pattern)
                                                <option value="{{ $pattern }}" @if(!empty($productdata['pattern']) && $productdata['pattern'] == $pattern) selected="" @endif> {{ $pattern }}</option>
                                                @endforeach
											</select>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">Fit</label>
											<select class="select2" name="fit" id="fit">
												<option value="0">Select</option>
                                                @foreach($fitArray as $fit)
                                                <option value="{{ $fit }}" @if(!empty($productdata['fit']) && $productdata['fit'] == $fit) selected="" @endif> {{ $fit }}</option>
                                                @endforeach
											</select>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">Occasion</label>
											<select class="select2" name="occassion" id="occassion">
												<option value="0">Select</option>
                                                @foreach($occasionArray as $occasion)
                                                <option value="{{ $occasion }}" @if(!empty($productdata['occassion']) && $productdata['occassion'] == $occasion) selected="" @endif> {{ $occasion }}</option>
                                                @endforeach
											</select>
										</div>
									</div>

								<div class="col-lg-6 col-sm-6 col-md-6">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Meta Title</label>
										<textarea class="form-control" id="inputProductDescription" name="title" rows="3">
											@if(!empty($productdata['meta_title'])) {{ $productdata['meta_title'] }} @else {{ old('title') }} @endif
										</textarea>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-md-6">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Meta Description</label>
										<textarea class="form-control" id="inputProductDescription" name="meta_desc" rows="3" >
											@if(!empty($productdata['meta_description'])) {{ $productdata['meta_description'] }} @else  {{ old('meta_desc') }} @endif
										</textarea>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6 col-md-6">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Meta Keywords</label>
										<textarea class="form-control" id="inputProductDescription" name="meta_keyword" rows="3" >
											@if(!empty($productdata['meta_keyword'])) {{ $productdata['meta_keyword'] }} @else  {{ old('meta_keyword') }} @endif
										</textarea>
									</div>
								</div>
                                <div class="form-group">
                                    <label for="meta_keywords">Featured Item </label>
                                    <input type="checkbox" name="is_featured" value="1" @if(!empty($productdata['is_featured']) && $productdata['is_featured'] == "Yes") checked @endif>
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