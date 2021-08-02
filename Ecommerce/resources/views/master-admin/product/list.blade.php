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
	<link href="{{ URL::asset('master-admin/assets/plugins/metismenu/css/metisMenu.min.css')}} " rel="stylesheet" />
	<!-- loader-->
	<link href="{{ URL::asset('master-admin/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ URL::asset('master-admin/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ URL::asset('master-admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ URL::asset('master-admin/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('master-admin/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ URL::asset('master-admin/assets/css/dark-theme.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('master-admin/assets/css/semi-dark.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('master-admin/assets/css/header-colors.css') }}"/>
    <link href="{{ URL::asset('master-admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
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
								<li class="breadcrumb-item active" aria-current="page">list</li>
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
						<button type="button" class="close" data-dismiss="close" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					</div>
					@endif
					@if(Session::has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px">
						{{Session::get('success')}}
						<button type="button" class="close" data-dismiss="close" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					</div>
					@endif
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                        <a href="{{ url('admin/add-edit-product')}}" class="btn btn-block btn-success" style="width:150px;float: right;display:inline-block;"><i class="fa fa-plus"></i> Add Product</a>
                        </div>
					</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Product Name</th>
										<th>Product Code</th>
										<th>Product Image</th>
										<th>Categories</th>
                                        <th>Status</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $plist)
									<tr>
                                        <td>{{ $plist->id }}</td>
                                        <td>{{ $plist->product_name }}</td>
										<td> 
											<li>{{ $plist->product_code }}</li>
											<li>{{ $plist->product_color }}</li>
										</td>
										<td>
											<?php $product_image_path = "master-admin/assets/productImage/small/".$plist->main_image;?>
											@if(!empty($plist->main_image) && file_exists($product_image_path))
											<img style="width:100px;" src="{{ asset('master-admin/assets/productImage/small/'.$plist->main_image) }}">
											@else
											<img style="width:80px;" src="{{ asset('master-admin/assets/productImage/small/no-image.png') }}">
											@endif
										</td>
                                        <td>
											<li>{{ $plist->category->category_name }} {{  !empty($plist->section->name) ? "(".$plist->section->name.")" : "" }}</li>
											<ol type="I"><li>{{ $plist->subcategory->subcategory_name }}</li></ol>
										</td>
										<td>
                                            @if($plist->status ==1)
                                                <a class="updateProductStatus" id="product-{{ $plist->id }}" product_id ="{{ $plist->id }}" href="javascript:void(0)">Active</a>
                                            @else 
                                                <a class="updateProductStatus" id="product-{{ $plist->id }}"  product_id ="{{ $plist->id }}" href="javascript:void(0)">Inactive</a>
                                            @endif
                                        </td>
										<td>
											<a href="{{ url('admin/add-attributes/'.$plist->id)}}" title="add/edit Attributes"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
											<a href="{{ url('admin/add-images/'.$plist->id)}}" title="add Image"><i class="fa fa-plus-square"></i></a>&nbsp;&nbsp;
											<a href="{{ url('admin/add-edit-product/'.$plist->id) }}" title="edit Product"><i class="fa fa-edit"></i></a>
											&nbsp; &nbsp;
											<a href="javascript:void(0)" class="confirmDelete" record="product" recordid="{{ $plist->id }}" title="delete Product"><i class="fa fa-trash"></i></a>
										</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Product Name</th>
										<th>Product Code</th>
										<th>Product Image</th>
										<th>Categories</th>
                                        <th>Status</th>
										<th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
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

<script src="{{ URL::asset('master-admin/assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ URL::asset('master-admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
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

<script src="{{ URL::asset('master-admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('master-admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ URL::asset('master-admin/assets/js/admin.js') }}"></script>
</body>
</html>
<script>
    $(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
</script>