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
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
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
					<div class="breadcrumb-title pe-3"></div>
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
			  
				<div class="card">
				  <div class="card-body">
					  <h5 class="card-title">Add New Category</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Category Name</label>
                                    <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter Category Name">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Category Description</label>
                                    <textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
					   </div><!--end row-->
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
</body>
</html>