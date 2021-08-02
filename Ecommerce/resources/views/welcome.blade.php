<!DOCTYPE html>
<html lang="en">

<head>
   <title> - Multi-purpopse E-commerce Html Template</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <meta name="description" content="big-deal">
   <meta name="keywords" content="big-deal">
   <meta name="author" content="big-deal">
   <link rel="icon" href="{{ URL::asset('front-end/assets/images/favicon/favicon.png') }}" type="image/x-icon">
   <link rel="shortcut icon" href="{{ URL::asset('front-end/assets/images/favicon/favicon.png') }}" type="image/x-icon">

   <!--Google font-->
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Raleway&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Aclonica&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Days+One&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

   <!--icon css-->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('front-end/assets/css/font-awesome.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('front-end/assets/css/themify.css') }}">

   <!--Slick slider css-->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('front-end/assets/css/slick.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('front-end/assets/css/slick-theme.css') }}">

   <!--Animate css-->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('front-end/assets/css/animate.css') }}">
   <!-- Bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('front-end/assets/css/bootstrap.css') }}">

   <!-- Theme css -->
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('front-end/assets/css/color11.css') }}" media="screen" id="color">
</head>
<style>
.product .product-box .product-imgbox img {
    margin: 0 auto;
    width: 65%; 
}
</style>
<body class="bg-light">

<!-- loader start -->
<div class="loader-wrapper">
   <div>
      <img src="{{ URL::asset('front-end/assets/images/loader.gif') }}" alt="loader">
   </div>
</div>
@include('include.header')

<!--home slider start-->
<section class="megastore-slide collection-banner section-py-space b-g-white">
    <div class="container-fluid">
       <div class="row mega-slide-block">
          <div class="col-xl-9 col-lg-12 ">
             <div class="row">
                <div class="col-12">
                   <div class="slide-1 no-arrow">
                      <div>
                         <div class="slide-main">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/1.jpg') }}" class="img-fluid bg-img" alt="mega-store">
                            <div class="slide-contain">
                               <div>
                                  <h4>all product</h4>
                                  <h2>megastore</h2>
                                  <h3>save up to 20% off</h3>
                                  <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-md">
                                     Shop Now
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div>
                         <div class="slide-main">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/2.jpg') }}" class="img-fluid bg-img" alt="mega-store">
                            <div class="slide-contain">
                               <div>
                                  <h4>all product</h4>
                                  <h2>megastore</h2>
                                  <h3>save up to 20% off</h3>
                                  <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-md">
                                     Shop Now
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div>
                         <div class="slide-main">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/3.jpg') }}" class="img-fluid bg-img" alt="mega-store">
                            <div class="slide-contain">
                               <div>
                                  <h4>all product</h4>
                                  <h2>megastore</h2>
                                  <h3>save up to 20% off</h3>
                                  <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-md">
                                     Shop Now
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="collection-banner-main banner-18 banner-style7 collection-color13 p-left text-center">
                      <div class="collection-img">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/banner/1.jpg') }}" class="img-fluid bg-img  " alt="banner">
                      </div>
                      <div class="collection-banner-contain ">
                         <div>
                            <h3>smart watch</h3>
                            <h4>speacial offer</h4>
                            <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="collection-banner-main banner-18 banner-style7 collection-color9 p-left text-center">
                      <div class="collection-img">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/banner/2.jpg') }}" class="img-fluid bg-img  " alt="banner">
                      </div>
                      <div class="collection-banner-contain ">
                         <div>
                            <h3>stylish chair</h3>
                            <h4>weekend sale</h4>
                            <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-12 ">
             <div class="row collection-p6">
                <div class="col-xl-12 col-lg-4 col-md-6">
                   <div class="collection-banner-main banner-17 banner-style7 collection-color14 p-left text-center">
                      <div class="collection-img">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/banner/3.jpg') }}" class="img-fluid bg-img  " alt="banner">
                      </div>
                      <div class="collection-banner-contain ">
                         <div>
                            <h3>smart glasses</h3>
                            <h4>best choise</h4>
                            <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-12 col-lg-4 col-md-6">
                   <div class="collection-banner-main banner-17 banner-style7 collection-color15 p-left text-center">
                      <div class="collection-img">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/banner/4.jpg') }}" class="img-fluid bg-img  " alt="banner">
                      </div>
                      <div class="collection-banner-contain ">
                         <div>
                            <h3>smart led tv</h3>
                            <h4>now 70% off</h4>
                            <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-12 col-lg-4 col-md-12">
                   <div class="collection-banner-main banner-18 banner-style7  p-left text-center">
                      <div class="collection-img">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/slider/banner/5.jpg') }}" class="img-fluid bg-img  " alt="banner">
                      </div>
                      <div class="collection-banner-contain ">
                         <div>
                            <h3>smart phone</h3>
                            <h4>special offer</h4>
                            <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--home slider end-->
 
 <!-- services start -->
 <section class="services2 section-pt-space">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 pr-0">
             <div class="services-slide6 no-arrow">
                <div>
                   <div class="services-box">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill:#5D9CEC;" d="M414.5,242.268h-59.855v74.996h59.851c11.009,0,21.314,9.429,33.245,20.346 c15.191,13.899,32.409,29.654,56.759,29.654h7.5v-7.5v-0.001v-0.001v-19.994C512,286.006,468.262,242.268,414.5,242.268z"/><path style="fill:#4A89DC;" d="M414.5,242.268h-36.999c53.762,0,104.496,43.738,104.496,97.5v19.994v0.001v0.001v2.75 c6.814,2.936,14.248,4.75,22.503,4.75h7.5v-7.5v-0.001v-0.001v-19.994C512,286.006,468.262,242.268,414.5,242.268z"/><path style="fill:#CCD1D9;" d="M406.996,242.268v74.996h7.5c2.528,0,5.018,0.517,7.5,1.415v-76.126 c-2.474-0.188-4.974-0.285-7.496-0.285L406.996,242.268L406.996,242.268z"/><path d="M347.507,187.613H27.502c-4.142,0-7.5-3.357-7.5-7.5s3.358-7.5,7.5-7.5h320.005c4.142,0,7.5,3.357,7.5,7.5 C355.007,184.255,351.649,187.613,347.507,187.613z"/><path style="fill:#ED5565;" d="M367.501,187.238H7.5c-4.142,0-7.5-3.357-7.5-7.5v-80c0-4.143,3.358-7.5,7.5-7.5h360.001 c4.142,0,7.5,3.357,7.5,7.5v80C375.001,183.88,371.643,187.238,367.501,187.238z"/><path style="fill:#DA4453;" d="M20.001,187.238v172.524c0,4.143,3.358,7.5,7.5,7.5h0.001h320.005c4.142,0,7.5-3.357,7.5-7.5V187.238 H20.001z"/><path style="fill:#CE3A50;" d="M325.004,187.238v172.524c0,4.143-3.358,7.5-7.5,7.5h30.003c4.142,0,7.5-3.357,7.5-7.5V187.238 H325.004z"/><path style="fill:#DA4453;" d="M367.501,92.237h-30.003c4.142,0,7.5,3.357,7.5,7.5v80c0,4.143-3.358,7.5-7.5,7.5h30.003 c4.142,0,7.5-3.357,7.5-7.5v-80C375.001,95.595,371.643,92.237,367.501,92.237z"/><rect x="147.5" y="187.609" style="fill:#F6BB42;" width="80" height="179.65"/><path style="fill:#FFCE54;" d="M187.501,52.237c-22.092,0-40.001,17.909-40.001,40v95h80.001v-95 C227.501,70.146,209.592,52.237,187.501,52.237z"/><path style="fill:#F6BB42;" d="M180.113,52.93c-12.213-11.685-41.12-30.695-72.618-30.695c-49.826,0-56.769,32.278-57.436,70.003 h97.44C147.5,72.671,161.553,56.396,180.113,52.93z"/><path style="fill:#E8AA3D;" d="M194.949,52.93c12.213-11.685,41.12-30.695,72.618-30.695c49.826,0,56.768,32.278,57.435,70.003 h-97.44C227.563,72.671,213.51,56.396,194.949,52.93z"/><path style="fill:#CCD1D9;" d="M504.5,367.264c-24.35,0-41.568-15.755-56.759-29.654c-11.931-10.917-22.235-20.346-33.245-20.346 h-59.489v42.498c0,4.143-3.358,7.5-7.5,7.5H27.502h-0.001c-4.139,0-7.494-3.353-7.499-7.49v79.99v0.001c0,0.002,0,0.002,0,0.002 c0,4.144,3.358,7.501,7.5,7.501h139.607h187.785h99.604H479.5h25c4.142,0,7.5-3.357,7.5-7.5v-72.502H504.5z"/><path style="fill:#656D78;" d="M404.498,489.764c-27.57,0-49.999-22.43-49.999-50c0-27.569,22.429-50,49.999-50 c27.571,0,50.001,22.431,50.001,50C454.499,467.334,432.069,489.764,404.498,489.764z"/><path style="fill:#CCD1D9;" d="M404.498,459.764c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20 C424.498,450.792,415.526,459.764,404.498,459.764z"/><path style="fill:#656D78;" d="M117.504,489.764c-27.57,0-49.999-22.43-49.999-50c0-27.569,22.429-50,49.999-50 c27.571,0,50.001,22.431,50.001,50C167.505,467.334,145.075,489.764,117.504,489.764z"/><path style="fill:#CCD1D9;" d="M117.504,459.764c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20 C137.504,450.792,128.532,459.764,117.504,459.764z"/><path style="fill:#AAB2BC;" d="M481.997,362.514v84.752H504.5c4.142,0,7.5-3.357,7.5-7.5v-72.502h-7.5 C496.245,367.264,488.811,365.449,481.997,362.514z"/><g></g></svg>
                      free shipping
                   </div>
                </div>
                <div>
                   <div class="services-box">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 504.123 504.123" style="enable-background:new 0 0 504.123 504.123;" xml:space="preserve"> <path style="fill:#A86A3F;" d="M39.385,83h393.846c21.662,0,39.385,17.723,39.385,39.385v47.262 c0,21.662-17.723,39.385-39.385,39.385H39.385C17.723,209.03,0,191.307,0,169.646v-47.262C0,100.723,17.723,83,39.385,83z"/> <path style="fill:#3DB39E;" d="M125.637,125.141l246.548-65.378c8.271-2.363,16.935,2.757,19.298,11.028l40.96,151.237 c2.363,8.271-2.757,16.935-11.028,19.298L100.431,326.79c-8.271,2.363-16.935-2.757-19.298-11.028L51.2,204.698L125.637,125.141z"/> <path style="fill:#78CABB;" d="M389.514,217.301l-53.169,14.178c-4.332,1.182-8.665-1.182-9.452-5.514 c-1.182-4.332,1.182-8.665,5.514-9.452l45.686-12.209l-24.418-91.372l-45.686,12.209c-4.332,1.182-8.665-1.182-9.452-5.514 c-1.182-4.332,1.182-8.665,5.514-9.452l53.169-14.178c4.332-1.182,8.665,1.182,9.452,5.514l28.357,106.338 C396.209,212.181,393.846,216.513,389.514,217.301z M168.96,276.772l-53.169,14.178c-4.332,1.182-8.665-1.182-9.452-5.514 L77.982,179.098c-1.182-4.332,1.182-8.665,5.514-9.452l53.169-14.178c4.332-1.182,8.665,1.182,9.452,5.514 c1.182,4.332-1.182,8.665-5.514,9.452l-45.686,12.209l24.418,91.372l45.686-12.209c4.332-1.182,8.665,1.182,9.452,5.514 C175.655,271.258,173.292,275.59,168.96,276.772z"/> <path style="fill:#5ABEAC;" d="M3.151,180.28C73.255,140.107,262.302,29.436,262.302,29.436c7.483-4.332,17.329-1.969,21.662,5.514 l78.769,135.483c4.332,7.483,1.575,16.935-5.908,21.268L68.529,357.116c-7.483,4.332-17.329,1.969-21.662-5.514 c0,0-22.055-44.898-44.111-82.708C2.757,180.28,3.151,209.424,3.151,180.28z"/> <path style="fill:#8CD2C5;" d="M322.56,166.101L267.422,70.79c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569 c-3.938,2.363-5.12,7.089-2.757,10.634c2.363,3.938,7.089,5.12,10.634,2.757l40.96-23.631l47.262,81.92l-40.96,23.631 c-3.938,2.363-5.12,7.089-2.757,10.634c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569 C323.348,174.766,324.923,170.04,322.56,166.101z M113.822,277.56l-40.96,23.631L25.6,219.27l40.96-23.631 c3.938-2.363,5.12-7.089,2.757-10.634c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569c-3.938,2.363-5.12,7.089-2.757,10.634 l55.138,95.311c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569c3.938-2.363,5.12-7.089,2.757-10.634 C122.486,276.772,117.76,275.196,113.822,277.56z M133.908,138.532c-30.326,17.329-40.566,55.926-23.237,86.252 c17.723,30.326,55.926,40.566,86.252,23.237s40.566-55.926,23.237-86.252C202.437,131.836,164.234,121.203,133.908,138.532z M322.56,166.101L267.422,70.79c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569c-3.938,2.363-5.12,7.089-2.757,10.634 c2.363,3.938,7.089,5.12,10.634,2.757l40.96-23.631l47.262,81.92l-40.96,23.631c-3.938,2.363-5.12,7.089-2.757,10.634 c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569C323.348,174.766,324.923,170.04,322.56,166.101z M113.822,277.56l-40.96,23.631 L25.6,219.27l40.96-23.631c3.938-2.363,5.12-7.089,2.757-10.634c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569 c-3.938,2.363-5.12,7.089-2.757,10.634l55.138,95.311c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569 c3.938-2.363,5.12-7.089,2.757-10.634C122.486,276.772,117.76,275.196,113.822,277.56z M133.908,138.532 c-30.326,17.329-40.566,55.926-23.237,86.252c17.723,30.326,55.926,40.566,86.252,23.237s40.566-55.926,23.237-86.252 C202.437,131.836,164.234,121.203,133.908,138.532z"/> <path style="fill:#C47E4D;" d="M448.985,476.846h-409.6C17.723,476.846,0,459.123,0,437.461V153.892h448.985 c21.662,0,39.385,17.723,39.385,39.385v244.185C488.369,459.123,470.646,476.846,448.985,476.846z M31.508,153.892H0v-31.508 C0,139.713,14.178,153.892,31.508,153.892z"/> <path style="fill:#A86A3F;" d="M488.369,378.384h-63.015c-30.326,0-55.138-24.812-55.138-55.138s24.812-55.138,55.138-55.138h63.015 c8.665,0,15.754,7.089,15.754,15.754v78.769C504.123,371.295,497.034,378.384,488.369,378.384z"/> <path style="fill:#EFC75E;" d="M425.354,291.738c17.329,0,31.508,14.178,31.508,31.508s-14.178,31.508-31.508,31.508 c-17.329,0-31.508-14.178-31.508-31.508S408.025,291.738,425.354,291.738z"/> <path style="fill:#D7B354;" d="M433.231,346.876c-17.329,0-31.508-14.178-31.508-31.508c0-6.695,1.969-12.997,5.514-18.117 c-8.271,5.514-13.391,14.966-13.391,25.994c0,17.329,14.178,31.508,31.508,31.508c10.634,0,20.086-5.514,25.994-13.391 C446.228,344.907,439.926,346.876,433.231,346.876z"/> <path style="fill:#B27245;" d="M448.985,461.092h-409.6C17.723,461.092,0,443.369,0,421.707v15.754 c0,21.662,17.723,39.385,39.385,39.385h409.6c21.662,0,39.385-17.723,39.385-39.385v-15.754 C488.369,443.369,470.646,461.092,448.985,461.092z"/> <path style="fill:#CA8B5F;" d="M448.985,153.892H31.508C14.178,153.892,0,139.713,0,122.384v15.754 c0,17.329,14.178,31.508,31.508,31.508h417.477c21.662,0,39.385,17.723,39.385,39.385v-15.754 C488.369,171.615,470.646,153.892,448.985,153.892z"/> </svg>
                      money return
                   </div>
                </div>
                <div>
                   <div class="services-box">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <polygon style="fill:#DE4C3C;" points="136.828,282.483 57.379,476.69 119.172,459.034 145.655,512 225.103,326.621 "/> <polygon style="fill:#DE4C3C;" points="331.034,273.655 242.759,326.621 322.207,512 348.69,459.034 410.483,476.69 "/> </g> <g> <polygon style="fill:#C74436;" points="136.828,282.483 107.608,353.898 109.109,354.339 128,412.954 188.204,400.066 192.088,403.597 225.103,326.621 "/> <polygon style="fill:#C74436;" points="242.759,326.621 275.774,403.597 279.658,400.066 339.862,412.954 358.753,354.339 362.196,353.28 331.034,273.655 "/> </g> <g> <polygon style="fill:#FDB62F;" points="233.931,0 279.658,41.313 339.862,28.337 358.753,87.04 417.368,105.931 404.48,166.135 445.793,211.862 404.48,257.589 417.368,317.793 358.753,336.684 339.862,395.299 279.658,382.411 233.931,423.724 188.204,382.411 128,395.299 109.109,336.684 50.406,317.793 63.382,257.589 22.069,211.862 63.382,166.135 50.406,105.931 109.109,87.04 128,28.337 188.204,41.313 "/> <path style="fill:#FDB62F;" d="M454.621,70.621L454.621,70.621c-3.001-18.114-17.196-32.309-35.31-35.31l0,0 c18.114-3.001,32.309-17.196,35.31-35.31l0,0c3.001,18.114,17.196,32.309,35.31,35.31l0,0 C471.817,38.312,457.622,52.506,454.621,70.621z"/> </g> <path style="fill:#FFA83D;" d="M445.793,211.862l-41.313-45.727l12.888-60.204L371.73,91.189 c-49.523,136.739-167.194,214.069-259.443,255.294L128,395.299l60.204-12.888l45.727,41.313l45.727-41.313l60.204,12.888 l18.891-58.615l58.615-18.891l-12.888-60.204L445.793,211.862z"/> <g> <path style="fill:#FFFFFF;" d="M180.966,194.207c-19.5,0-35.31-15.81-35.31-35.31s15.81-35.31,35.31-35.31s35.31,15.81,35.31,35.31 S200.466,194.207,180.966,194.207z M180.966,141.241c-9.754,0-17.655,7.901-17.655,17.655c0,9.754,7.901,17.655,17.655,17.655 c9.754,0,17.655-7.901,17.655-17.655C198.621,149.142,190.72,141.241,180.966,141.241z"/> <path style="fill:#FFFFFF;" d="M295.724,308.966c-19.5,0-35.31-15.81-35.31-35.31c0-19.5,15.81-35.31,35.31-35.31 c19.5,0,35.31,15.81,35.31,35.31C331.034,293.155,315.224,308.966,295.724,308.966z M295.724,256 c-9.754,0-17.655,7.901-17.655,17.655c0,9.754,7.901,17.655,17.655,17.655c9.754,0,17.655-7.901,17.655-17.655 C313.379,263.901,305.479,256,295.724,256z"/> <rect x="146.502" y="203.052" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 549.1039 196.3124)" style="fill:#FFFFFF;" width="174.785" height="17.655"/> </g> </svg>
                      festivel discount
                   </div>
                </div>
                <div>
                   <div class="services-box">
                      <svg  enable-background="new 0 0 512 512"  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m414.33 158.33v11.67h-30v-11.67c0-70.76-57.57-128.33-128.33-128.33s-128.33 57.57-128.33 128.33v11.67h-30v-11.67c0-87.3 71.02-158.33 158.33-158.33s158.33 71.03 158.33 158.33z" fill="#393e9f"/><path d="m414.33 158.33v11.67h-30v-11.67c0-70.76-57.57-128.33-128.33-128.33v-30c87.31 0 158.33 71.03 158.33 158.33z" fill="#340d66"/><path d="m175.287 248.594h-54.972c-13.767 0-24.928-11.161-24.928-24.928v-43.901c0-13.767 11.161-24.928 24.928-24.928h54.972z" fill="#fe4945"/><path d="m334.711 248.594h56.974c13.767 0 24.928-11.161 24.928-24.928v-43.901c0-13.767-11.161-24.928-24.928-24.928h-56.974z" fill="#fa185e"/><path d="m512 469.59v42.41h-103.29l-15-15-15 15h-245.42l-15-15-15 15h-103.29v-42.41c0-18.34 11.78-34.59 29.2-40.31l153.66-50.36h146.71v.14l153.23 50.22c17.42 5.72 29.2 21.97 29.2 40.31z" fill="#13cffe"/><path d="m512 469.59v42.41h-103.29l-15-15-15 15h-122.71v-133.08h73.57v.14l153.23 50.22c17.42 5.72 29.2 21.97 29.2 40.31z" fill="#28abf9"/><path d="m329.57 306.33v72.59s-37 36.57-73.57 36.57-73.14-36.57-73.14-36.57v-72.59z" fill="#ffb9ab"/><path d="m329.57 306.33v72.59s-37 36.57-73.57 36.57v-109.16z" fill="#e39e8d"/><path d="m350.72 152.72v31.48l-9.72 10.47h-170l-9.72-10.47v-31.48c0-26.16 10.6-49.84 27.74-66.98s40.82-27.74 66.98-27.74c52.31 0 94.72 42.41 94.72 94.72z" fill="#ffb81f"/><path d="m350.72 152.72v31.48l-9.72 10.47h-85v-136.67c52.31 0 94.72 42.41 94.72 94.72z" fill="#fc9b28"/><path d="m350.72 184.26v64.87c0 6.69-.61 13.22-1.78 19.54-.95 5.15-14.23 15-14.23 15s6.34 10.23 3.8 15c-16.25 30.62-47.11 51.29-82.51 51.29-26.16 0-49.84-11.28-66.98-29.53s-27.74-43.45-27.74-71.3v-64.87h50.52c17.01 0 32.52-6.46 44.2-17.06 13.26-12.04 21.59-29.41 21.59-48.72 0 36.33 29.45 65.78 65.78 65.78z" fill="#fccbc3"/><path d="m350.72 184.26v64.87c0 6.69-.61 13.22-1.78 19.54-.95 5.15-14.23 15-14.23 15s6.34 10.23 3.8 15c-16.25 30.62-47.11 51.29-82.51 51.29v-182.76c13.26-12.04 21.59-29.41 21.59-48.72 0 36.33 29.45 65.78 65.78 65.78z" fill="#ffb9ab"/><path d="m348.94 268.67c-1.97 10.71-5.54 20.8-10.43 30h-65.3v-30z" fill="#340d66"/><path d="m103.286 466h30v46h-30z" fill="#28abf9"/><path d="m378.714 466h30v46h-30z" fill="#318def"/></g></svg>24*7 service
                   </div>
                </div>
                <div>
                   <div class="services-box">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill:#FF4F19;" d="M256,512l-5.445-2.117c-1.937-0.752-47.974-18.78-94.746-48.335 c-65.799-41.577-99.162-84.291-99.162-126.957V90.16h15.027c41.428,0,75.133-33.705,75.133-75.133V0h218.386v15.027 c0,41.428,33.705,75.133,75.133,75.133h15.027v244.433c0,42.665-33.363,85.38-99.162,126.956 c-46.772,29.554-92.808,47.582-94.746,48.335L256,512z"/><path style="fill:#FF3200;" d="M440.326,90.16c-41.428,0-75.133-33.705-75.133-75.133V0H256v512l5.445-2.117 c1.937-0.752,47.974-18.78,94.746-48.335c65.799-41.577,99.162-84.291,99.162-126.956V90.16H440.326z"/><path style="fill:#FFDB2D;" d="M256,449.234l-6.15-2.758c-1.408-0.632-34.901-15.745-68.908-38.831 c-48.575-32.974-73.205-65.276-73.205-96.008V139.865h15.027c25.778,0,46.75-20.95,46.75-46.701V78.138h172.972v15.027 c0,25.751,20.972,46.701,46.75,46.701h15.027v171.773c0,30.732-24.63,63.034-73.205,96.008 c-34.007,23.086-67.498,38.199-68.908,38.831L256,449.234z M249.85,419.055L249.85,419.055L249.85,419.055z"/><path style="fill:#FF9A00;" d="M389.236,139.865c-25.778,0-46.75-20.95-46.75-46.701V78.138H256v371.096l6.15-2.758 c1.409-0.632,34.901-15.745,68.908-38.831c48.575-32.974,73.204-65.276,73.204-96.008V139.865H389.236z"/><path style="fill:#B38A65;" d="M200.902,420.429c26.086,15.759,47.819,25.573,48.948,26.079l6.15,2.759l6.15-2.759 c1.129-0.507,22.861-10.32,48.948-26.079V278.966H200.902V420.429z"/><path style="fill:#A17852;" d="M256,278.999v170.236l6.15-2.758c1.129-0.506,22.861-10.316,48.948-26.069V278.999H256z"/><path style="fill:#9A4C00;" d="M304.238,309.052h-96.477l-49.811-76.847l49.811-76.846h31.058v54.477l17.179,14.183l17.179-14.183 v-54.477h31.06l49.811,76.846L304.238,309.052z"/><polygon style="fill:#703700;" points="354.048,232.205 304.238,155.359 273.179,155.359 273.179,209.836 256,224.019 256,309.052 304.238,309.052 "/><g></g></svg>
                      100% Secure Payment
                   </div>
                </div>
                <div>
                   <div class="services-box">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <path style="fill:#2196F3;" d="M509.88,408l-96.96-168.288c-2.208-3.808-5.888-6.56-10.144-7.584s-8.768-0.256-12.48,2.144 l-134.4,87.68c-7.104,4.672-9.344,14.048-5.12,21.408l92.8,160.64c2.88,4.992,8.192,8,13.856,8c0.672,0,1.408-0.032,2.08-0.128 c6.432-0.864,11.68-5.504,13.376-11.744l24.992-93.952l93.952,25.248c6.272,1.728,12.864-0.576,16.832-5.696 C512.632,420.64,513.08,413.632,509.88,408z"></path> <path style="fill:#2196F3;" d="M256.088,321.984l-134.4-87.68c-3.68-2.432-8.256-3.232-12.48-2.144 c-4.256,0.992-7.936,3.744-10.112,7.552L2.136,408c-3.232,5.632-2.752,12.64,1.184,17.76s10.56,7.424,16.832,5.696l93.952-25.248 l24.992,93.952c1.664,6.24,6.944,10.88,13.344,11.744c0.704,0.064,1.44,0.096,2.112,0.096c5.664,0,10.976-3.008,13.856-8 l92.8-160.64C265.464,336.032,263.224,326.624,256.088,321.984z"></path> </g> <circle style="fill:#FFC107;" cx="255.992" cy="176" r="176"></circle> <path style="fill:#FAFAFA;" d="M351.192,136.064c-1.728-5.152-5.92-9.056-11.136-10.432l-45.408-11.872l-24.896-41.92 c-5.76-9.728-21.76-9.728-27.488,0l-24.896,41.92l-45.408,11.872c-5.28,1.376-9.44,5.28-11.168,10.432s-0.704,10.784,2.688,15.04 l30.4,38.08l-3.296,49.76c-0.352,5.536,2.176,10.88,6.72,14.112c4.544,3.232,10.4,3.84,15.52,1.664l43.168-18.336l43.2,18.336 c1.984,0.864,4.128,1.28,6.24,1.28c3.296,0,6.496-0.992,9.248-2.944c4.576-3.232,7.104-8.576,6.72-14.112l-3.328-49.76l30.4-38.08 C351.864,146.848,352.888,141.216,351.192,136.064z"></path> <g></g> </svg>
                      Earn Rewards
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- services end -->
 
 <!--title start-->
 <div class="title8 section-big-pt-space">
    <h4>new product</h4>
 </div>
 <!--title end-->
 
 <!-- product tab start -->
 <section class="section-big-mb-space ratio_square product">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 pr-0">
             <div class="product-slide-5 product-m no-arrow">
                 
                <div>
                   <div class="product-box product-box2">
                      <div class="product-imgbox">
                         <div class="product-front">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/1.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-back">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/6.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-icon icon-inline">
                            <button  class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                               <i  data-feather="shopping-cart"></i>
                            </button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                               <i  data-feather="heart"></i>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                               <i  data-feather="eye"></i>
                            </a>
                            <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                               <i  data-feather="refresh-cw"></i>
                            </a>
                         </div>
                         <div class="new-label1">
                            <div>new</div>
                         </div>
                         <div class="on-sale1">
                            on sale
                         </div>
                      </div>
                      <div class="product-detail product-detail2 ">
                         <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>                           
                            <li><i class="fa fa-star-o"></i></li>
                         </ul>
                         <a href="product-page(no-sidebar).html">
                            <h3>women fashion shoes</h3>
                         </a>
                         <h5>
                            $50
                            <span>
                       $80
                     </span>
                         </h5>
                      </div>
                   </div>
                </div>
                
                <div>
                   <div class="product-box product-box2">
                      <div class="product-imgbox">
                         <div class="product-front">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/2.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-back">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/7.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-icon icon-inline">
                            <button  class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                               <i  data-feather="shopping-cart"></i>
                            </button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                               <i  data-feather="heart"></i>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                               <i  data-feather="eye"></i>
                            </a>
                            <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                               <i  data-feather="refresh-cw"></i>
                            </a>
                         </div>
                         <div class="new-label1">
                            <div>new</div>
                         </div>
                         <div class="on-sale1">
                            on sale
                         </div>
                      </div>
                      <div class="product-detail product-detail2 ">
                         <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>                           
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                         </ul>
                         <a href="product-page(no-sidebar).html">
                            <h3>men analogue watch</h3>
                         </a>
                         <h5>
                            $10
                            <span>
                       $30
                     </span>
                         </h5>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="product-box product-box2">
                      <div class="product-imgbox">
                         <div class="product-front">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/3.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-back">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/8.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-icon icon-inline">
                            <button  class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                               <i  data-feather="shopping-cart"></i>
                            </button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                               <i  data-feather="heart"></i>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                               <i  data-feather="eye"></i>
                            </a>
                            <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                               <i  data-feather="refresh-cw"></i>
                            </a>
                         </div>
                         <div class="new-label1">
                            <div>new</div>
                         </div>
                         <div class="on-sale1">
                            on sale
                         </div>
                      </div>
                      <div class="product-detail product-detail2 ">
                         <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>                           
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                         </ul>
                         <a href="product-page(no-sidebar).html">
                            <h3>wireless  headphones</h3>
                         </a>
                         <h5>
                            $34
                            <span>
                       $40
                     </span>
                         </h5>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="product-box product-box2">
                      <div class="product-imgbox">
                         <div class="product-front">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/4.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-back">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/9.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-icon icon-inline">
                            <button  class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                               <i  data-feather="shopping-cart"></i>
                            </button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                               <i  data-feather="heart"></i>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                               <i  data-feather="eye"></i>
                            </a>
                            <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                               <i  data-feather="refresh-cw"></i>
                            </a>
                         </div>
                         <div class="new-label1">
                            <div>new</div>
                         </div>
                         <div class="on-sale1">
                            on sale
                         </div>
                      </div>
                      <div class="product-detail product-detail2 ">
                         <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>                           
                            <li><i class="fa fa-star-o"></i></li>
                         </ul>
                         <a href="product-page(no-sidebar).html">
                            <h3>redmi not 9 pro</h3>
                         </a>
                         <h5>
                            $250
                            <span>
                       $390
                     </span>
                         </h5>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="product-box product-box2">
                      <div class="product-imgbox">
                         <div class="product-front">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/5.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-back">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/10.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-icon icon-inline">
                            <button  class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                               <i  data-feather="shopping-cart"></i>
                            </button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                               <i  data-feather="heart"></i>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                               <i  data-feather="eye"></i>
                            </a>
                            <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                               <i  data-feather="refresh-cw"></i>
                            </a>
                         </div>
                         <div class="new-label1">
                            <div>new</div>
                         </div>
                         <div class="on-sale1">
                            on sale
                         </div>
                      </div>
                      <div class="product-detail product-detail2 ">
                         <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>                           
                            <li><i class="fa fa-star-o"></i></li>
                         </ul>
                         <a href="product-page(no-sidebar).html">
                            <h3>Red Casual Backpack</h3>
                         </a>
                         <h5>
                            $80
                            <span>
                       $130
                     </span>
                         </h5>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="product-box product-box2">
                      <div class="product-imgbox">
                         <div class="product-front">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/3.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-back">
                            <a href="product-page(left-sidebar).html">
                               <img src="{{ URL::asset('front-end/assets/images/mega-store/product/8.jpg') }}" class="img-fluid  " alt="product">
                            </a>
                         </div>
                         <div class="product-icon icon-inline">
                            <button  class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                               <i  data-feather="shopping-cart"></i>
                            </button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                               <i  data-feather="heart"></i>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                               <i  data-feather="eye"></i>
                            </a>
                            <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                               <i  data-feather="refresh-cw"></i>
                            </a>
                         </div>
                         <div class="new-label1">
                            <div>new</div>
                         </div>
                         <div class="on-sale1">
                            on sale
                         </div>
                      </div>
                      <div class="product-detail product-detail2 ">
                         <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>                           
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                         </ul>
                         <a href="product-page(no-sidebar).html">
                            <h3>wireless  headphones</h3>
                         </a>
                         <h5>
                            $42
                            <span>
                       $65
                     </span>
                         </h5>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- product tab end -->



<!-- New Latest Products List -->

 <!--title start-->
 <div class="title8 section-big-pt-space">
   <h4>new product</h4>
</div>
<!--title end-->
<!-- product tab start -->
<section class="section-big-mb-space ratio_square product">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 pr-0">
            <div class="product-slide-5 product-m no-arrow">
              @foreach($newProducts as $product)  
               <div>
                  <div class="product-box product-box2">
                     <div class="product-imgbox">
                        <div class="product-front">
                           <a href="product-page(left-sidebar).html">
                              <?php $product_image_path = "master-admin/assets/productImage/small/".$product['main_image'];?>
											@if(!empty($product['main_image']) && file_exists($product_image_path))
                                    <img src="{{ URL::asset('master-admin/assets/productImage/small/'.$product['main_image']) }}" class="img-fluid  " alt="product">
                                 @else
                                 <img src="{{ URL::asset('master-admin/assets/productImage/small/no-image.png') }}" class="img-fluid  " alt="product">
                                 @endif
                           </a>
                        </div>
                        <div class="product-back">
                           <a href="product-page(left-sidebar).html">
                              @if(!empty($product['main_image']) && file_exists($product_image_path))
                              <img src="{{ URL::asset('master-admin/assets/productImage/small/'.$product['main_image']) }}" class="img-fluid  " alt="product">
                              @else
                              <img src="{{ URL::asset('master-admin/assets/productImage/small/no-image.png') }}" class="img-fluid  " alt="product">
                              @endif
                           </a>
                        </div>
                        <div class="product-icon icon-inline">
                           <button  class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                              <i  data-feather="shopping-cart"></i>
                           </button>
                           <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                              <i  data-feather="heart"></i>
                           </a>
                           <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                              <i  data-feather="eye"></i>
                           </a>
                           <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                              <i  data-feather="refresh-cw"></i>
                           </a>
                        </div>
                        <div class="new-label1">
                           <div>new</div>
                        </div>
                        <div class="on-sale1">
                           on sale
                        </div>
                     </div>
                     <div class="product-detail product-detail2 ">
                        <ul>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>                           
                           <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <a href="product-page(no-sidebar).html">
                           <h3>{{ $product['product_name'] }}</h3>
                        </a>
                        <h5>
                           $50
                           <span>
                      {{ $product['product_price']}}
                    </span>
                        </h5>
                     </div>
                  </div>
               </div>
              @endforeach 
            
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Product List over Here -->

 
 <!--collection banner start-->
 <section class="collection-banner section-py-space b-g-white">
    <div class="container-fluid">
       <div class="row collection-p4">
          <div class="col-md-4">
             <div class="collection-banner-main p-center text-center p-top banner-16 banner-style7">
                <div class="collection-img">
                   <img src="{{ URL::asset('front-end/assets/images/mega-store/collection-banner/1.jpg') }}" class="img-fluid bg-img  " alt="banner">
                </div>
                <div class="collection-banner-contain ">
                   <div>
                      <h3>couple watches</h3>
                      <h4>50% discount</h4>
                      <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="row">
                <div class="col-12">
                   <div class="collection-banner-main p-left text-center banner-13 banner-style7">
                      <div class="collection-img">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/collection-banner/2.jpg') }}" class="img-fluid bg-img  " alt="banner">
                      </div>
                      <div class="collection-banner-contain ">
                         <div>
                            <h3>jacket collection</h3>
                            <h4>best choise</h4>
                            <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-12">
                   <div class="collection-banner-main p-left text-center banner-13 banner-style7">
                      <div class="collection-img">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/collection-banner/3.jpg') }}" class="img-fluid bg-img  " alt="banner">
                      </div>
                      <div class="collection-banner-contain ">
                         <div>
                            <h3>relex camera</h3>
                            <h4>best offer</h4>
                            <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="collection-banner-main p-center p-top text-center banner-16 banner-style7">
                <div class="collection-img">
                   <img src="{{ URL::asset('front-end/assets/images/mega-store/collection-banner/4.jpg') }}" class="img-fluid bg-img  " alt="banner">
                </div>
                <div class="collection-banner-contain ">
                   <div>
                      <h3>latest collection</h3>
                      <h4>wow super sale</h4>
                      <a href="product-page(left-sidebar).html" class="btn btn-rounded btn-xs"> Shop Now </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--collection banner end-->
 
 <!--title start-->
 <div class="title8 section-big-pt-space">
    <h4>our category</h4>
 </div>
 <!--title end-->
 
 <!-- category start -->
 <section class="category4 section-big-pb-space">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 pr-0">
             <div class="category-slide5two no-arrow">
                <div>
                   <div class="category-box">
                      <div class="img-wrraper">
                         <a href="category-page(left-sidebar).html">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/category/1.jpg') }}" alt="category" class="img-fluid">
                         </a>
                      </div>
                      <div class="category-detail">
                         <a href="category-page(left-sidebar).html">
                            <h2>Fashion & Clothing</h2>
                         </a>
                         <ul>
                            <li>
                               <a href="category-page(left-sidebar).html">Winter Jackets  </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Office Blazer </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> sports watches </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Professional Cap </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">printed t-shirt </a>
                            </li>
                         </ul>
                         <a href="category-page(left-sidebar).html" class="btn btn-rounded btn-md btn-block">shop now</a>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="category-box">
                      <a href="category-page(left-sidebar).html">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/category/2.jpg') }}" alt="category" class="img-fluid">
                      </a>
                      <div class="category-detail">
                         <a href="category-page(left-sidebar).html">
                            <h2>home furniture</h2>
                         </a>
                         <ul>
                            <li>
                               <a href="category-page(left-sidebar).html">Chesterfield Chair</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Bunching Table</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Sofa beds</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Sleeper Sofas</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Storage cabinets </a>
                            </li>
                         </ul>
                         <a href="category-page(left-sidebar).html" class="btn btn-rounded btn-md btn-block">shop now</a>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="category-box">
                      <a href="category-page(left-sidebar).html">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/category/3.jpg') }}" alt="category" class="img-fluid">
                      </a>
                      <div class="category-detail">
                         <a href="category-page(left-sidebar).html">
                            <h2>letest electronics</h2>
                         </a>
                         <ul>
                            <li>
                               <a href="category-page(left-sidebar).html">Sony  oled TV </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">Gaming Phone</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">Asus Zenbook Pro</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">lg 21:9 Monitor </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">Ceiling Fans</a>
                            </li>
                         </ul>
                         <a href="category-page(left-sidebar).html" class="btn btn-rounded btn-md btn-block">shop now</a>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="category-box">
                      <a href="category-page(left-sidebar).html">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/category/4.jpg') }}" alt="category" class="img-fluid">
                      </a>
                      <div class="category-detail">
                         <a href="category-page(left-sidebar).html">
                            <h2>beauty & cosmetics</h2>
                         </a>
                         <ul>
                            <li>
                               <a href="category-page(left-sidebar).html">Skin Concealer</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">eye makeup mascara</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">Skin Cleansing Cream</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">organic cream </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">body loation</a>
                            </li>
                         </ul>
                         <a href="category-page(left-sidebar).html" class="btn btn-rounded btn-md btn-block">shop now</a>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="category-box">
                      <a href="category-page(left-sidebar).html">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/category/5.jpg') }}" alt="category" class="img-fluid">
                      </a>
                      <div class="category-detail">
                         <a href="category-page(left-sidebar).html">
                            <h2>fresh grocery</h2>
                         </a>
                         <ul>
                            <li>
                               <a href="category-page(left-sidebar).html">White Pepper Powder </a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">vegetable & fruits</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">Tomato sauce</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">Barbecue sauce</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html">fresh coffee powder</a>
                            </li>
                         </ul>
                         <a href="category-page(left-sidebar).html" class="btn btn-rounded btn-md btn-block">shop now</a>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="category-box">
                      <a href="category-page(left-sidebar).html">
                         <img src="{{ URL::asset('front-end/assets/images/mega-store/category/2.jpg') }}" alt="category" class="img-fluid">
                      </a>
                      <div class="category-detail">
                         <a href="category-page(left-sidebar).html">
                            <h2>home furniture</h2>
                         </a>
                         <ul>
                            <li>
                               <a href="category-page(left-sidebar).html">Chesterfield Chair</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Bunching Table</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Sofa beds</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Sleeper Sofas</a>
                            </li>
                            <li>
                               <a href="category-page(left-sidebar).html"> Storage cabinets </a>
                            </li>
                         </ul>
                         <a href="category-page(left-sidebar).html" class="btn btn-rounded btn-md btn-block">shop now</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- category end -->
 
 <!--sale banner start-->
 <section class="sale-banenr banner-style2  section-big-mb-space">
    <img src="{{ URL::asset('front-end/assets/images/mega-store/sale-banner/1.jpg') }}" alt="sale-banenr" class="img-fluid bg-img">
    <div class="custom-container">
       <div class="row">
          <div class="col-12 position-relative">
             <div class="sale-banenr-contain text-center  p-right">
                <div>
                   <h4>summer sale 20% off</h4>
                   <h2>shoes collection</h2>
                   <h3>fashion trends</h3>
                   <a href="product-page(left-sidebar).html" class="btn btn-rounded">Shop Now</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--sale banner ned-->
 
 <!--title-start-->
 <div class="title8 section-mb-space ">
    <h4>deal of the day</h4>
 </div>
 <!--title-end-->
 
 <!-- hot deal start -->
 <section class="hotdeal-second section-big-mb-space">
    <div class="container-fluid">
       <div class="row hotdeal-block2">
          <div class="col-12">
             <div class="hotdeal-slide3 no-arrow">
                <div>
                   <div class="hotdeal-box">
                      <div class="img-wrapper">
                         <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/hot-deal/1.jpg') }}" alt="hot-deal" class="img-fluid bg-img">
                         </a>
                      </div>
                      <div class="hotdeal-contain">
                         <div>
                            <a href="product-page(left-sidebar).html">
                               <h3>smart phone</h3>
                            </a>
                            <h5>
                               $60
                               <span class="price">$80</span>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <ul>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star-o"></i></li>
                            </ul>
                            <div class="timer2">
                               <p id="demo">
                               </p>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="hotdeal-box">
                      <div class="img-wrapper">
                         <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/hot-deal/2.jpg') }}" alt="hot-deal" class="img-fluid bg-img">
                         </a>
                      </div>
                      <div class="hotdeal-contain">
                         <div>
                            <a href="product-page(left-sidebar).html">
                               <h3>perfums</h3>
                            </a>
                            <h5>
                               $70
                               <span class="price">$100</span>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <ul>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star-o"></i>
                               </li>
                            </ul>
                            <div class="timer2">
                               <p id="demo1">
                               </p>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="hotdeal-box">
                      <div class="img-wrapper">
                         <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/hot-deal/3.jpg') }}" alt="hot-deal" class="img-fluid bg-img">
                         </a>
                      </div>
                      <div class="hotdeal-contain">
                         <div>
                            <a href="product-page(left-sidebar).html">
                               <h3>smart watch</h3>
                            </a>
                            <h5>
                               $90
                               <span class="price">$110</span>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <ul>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star-o"></i>
                               </li>
                            </ul>
                            <div class="timer2">
                               <p id="demo2">
                               </p>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="hotdeal-box">
                      <div class="img-wrapper">
                         <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/hot-deal/2.jpg') }}" alt="hot-deal" class="img-fluid bg-img">
                         </a>
                      </div>
                      <div class="hotdeal-contain">
                         <div>
                            <a href="product-page(left-sidebar).html">
                               <h3>perfum</h3>
                            </a>
                            <h5>
                               $70
                               <span class="price">$100</span>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                            <ul>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star-o"></i>
                               </li>
                            </ul>
                            <div class="timer2">
                               <p id="demo3">
                               </p>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- hot deal start -->
 
 
 <!--tab product-->
 <section  class="tab-product-main  tab-second">
    <div class="tab-prodcut-contain">
       <ul class="tabs tab-title">
          <li class="current"><a href="tab-1.html">all</a></li>
          <li class=""><a href="tab-2.html">furniture</a></li>
          <li class=""><a href="tab-3.html">electronic</a></li>
          <li class=""><a href="tab-4.html">sports</a></li>
          <li class=""><a href="tab-5.html">medicine</a></li>
       </ul>
    </div>
 </section>
 <!--tab product-->
 
 <!-- product start -->
 <section class="section-big-py-space">
    <div class="custom-container">
       <div class="row ">
          <div class="col-12 p-0">
             <div class="theme-tab product">
                <div class="tab-content-cls ">
                   <div id="tab-1" class="tab-content active default product-block3">
                      <div class="col-12 ">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/1.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>perfums</h3>
                                           </a>
                                           <h4>$70<span>$90</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/2.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>smartphone</h3>
                                           </a>
                                           <h4>$130<span>$150</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/3.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>vegetalbe</h3>
                                           </a>
                                           <h4>$150<span>$200</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/4.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>watches</h3>
                                           </a>
                                           <h4>$70<span>$80</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/5.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>wallet</h3>
                                           </a>
                                           <h4>$125<span>$140</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/6.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>camera</h3>
                                           </a>
                                           <h4>$85<span>$100</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div id="tab-2" class="tab-content  product-block3">
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/6.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>camera</h3>
                                           </a>
                                           <h4>$85<span>$100</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/4.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>watches</h3>
                                           </a>
                                           <h4>$70<span>$80</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/5.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>wallet</h3>
                                           </a>
                                           <h4>$125<span>$140</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/3.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>vegetalbe</h3>
                                           </a>
                                           <h4>$150<span>$200</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/1.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>perfums</h3>
                                           </a>
                                           <h4>$70<span>$90</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/2.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>smartphone</h3>
                                           </a>
                                           <h4>$130<span>$150</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div id="tab-3" class="tab-content  product-block3">
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/2.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>smartphone</h3>
                                           </a>
                                           <h4>$130<span>$150</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/3.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>vegetalbe</h3>
                                           </a>
                                           <h4>$150<span>$200</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/1.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>perfums</h3>
                                           </a>
                                           <h4>$70<span>$90</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/5.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>wallet</h3>
                                           </a>
                                           <h4>$125<span>$140</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/6.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>camera</h3>
                                           </a>
                                           <h4>$85<span>$100</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/4.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>watches</h3>
                                           </a>
                                           <h4>$70<span>$80</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div id="tab-4" class="tab-content  product-block3">
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/4.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>watches</h3>
                                           </a>
                                           <h4>$70<span>$80</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/5.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>wallet</h3>
                                           </a>
                                           <h4>$125<span>$140</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/6.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>camera</h3>
                                           </a>
                                           <h4>$85<span>$100</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/1.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>perfums</h3>
                                           </a>
                                           <h4>$70<span>$90</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/2.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>smartphone</h3>
                                           </a>
                                           <h4>$130<span>$150</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/3.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>vegetalbe</h3>
                                           </a>
                                           <h4>$150<span>$200</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div id="tab-5" class="tab-content  product-block3">
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/3.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>vegetalbe</h3>
                                           </a>
                                           <h4>$150<span>$200</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/1.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>perfums</h3>
                                           </a>
                                           <h4>$70<span>$90</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/2.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>smartphone</h3>
                                           </a>
                                           <h4>$130<span>$150</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
 
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="product-slide-3 no-arrow">
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/6.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>camera</h3>
                                           </a>
                                           <h4>$85<span>$100</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/4.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>watches</h3>
                                           </a>
                                           <h4>$70<span>$80</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div>
                               <div class="product-box3">
                                  <div class="media">
                                     <div class="img-wrapper">
                                        <a href="product-page(left-sidebar).html">
                                           <img class="img-fluid" src="{{ URL::asset('front-end/assets/images/mega-store/media-product/5.jpg') }}" alt="product">
                                        </a>
                                     </div>
                                     <div class="media-body">
                                        <div class="product-detail">
                                           <ul class="rating">
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                              <li><a href="javascript:void(0)"><i class="fa fa-star-o"></i></a></li>
                                           </ul>
                                           <a href="product-page(left-sidebar).html">
                                              <h3>wallet</h3>
                                           </a>
                                           <h4>$125<span>$140</span></h4>
                                           <a class="btn btn-rounded  btn-sm" href="product-page(left-sidebar).html" >shop now</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
 
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- product end -->
 
 
 <!--deal banner start-->
 <section class="deal-banner ">
    <div class="custom-container">
       <div class="row">
          <div class="col-md-12 col-lg-8">
             <div class="deal-banner-containe">
                <h2>
                   save up to  30% to 40% off
                </h2>
                <h1>
                   omg! just look at the great deals!
                </h1>
             </div>
          </div>
          <div class="col-md-12 col-lg-4 ">
             <div class="deal-banner-containe">
                <diV class="deal-btn">
                   <a href="category-page(left-sidebar).html" class="btn-white">
                      View more
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--deal banner end-->
 
 
 <!--discount banner start-->
 <section class="discount-banner">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="discount-banner-contain">
                <h2>Discount on every single item on our site.</h2>
                <h1><span>OMG! Just Look at the</span> <span>great Deals!</span></h1>
                <div class="rounded-contain ">
                   <div class="rounded-subcontain">
                      How does it feel, when you see great discount deals for each product?
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--discount banner end-->
 
 
 <!--title-start-->
 <div class="title8 section-big-my-space ">
    <h4>our happy clients</h4>
 </div>
 <!--title-end-->
 
 <!--testimonial start-->
 <section class="testimonial3 section-big-pb-space">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 pr-0">
             <div class="testimonial-slide3 no-arrow">
                <div>
                   <div class="testimonial-box">
                      <div class="testimonial-detail">
                         <h3>mark jecno</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                         <h6>designer</h6>
                      </div>
                      <div class="img-wrapper">
                         <img src="{{ URL::asset('front-end/assets/images/testimonial/1.jpg') }}" alt="testimonial" class="img-fluid" >
                      </div>
                      <ul>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                      </ul>
                   </div>
                </div>
                <div>
                   <div class="testimonial-box">
                      <div class="testimonial-detail">
                         <h3>johan deo</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                         <h6>designer</h6>
                      </div>
                      <div class="img-wrapper">
                         <img src="{{ URL::asset('front-end/assets/images/testimonial/2.jpg') }}" alt="testimonial" class="img-fluid" >
                      </div>
                      <ul>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                      </ul>
                   </div>
                </div>
                <div>
                   <div class="testimonial-box">
                      <div class="testimonial-detail">
                         <h3>elina folden</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                         <h6>designer</h6>
                      </div>
                      <div class="img-wrapper">
                         <img src="{{ URL::asset('front-end/assets/images/testimonial/4.jpg') }}" alt="testimonial" class="img-fluid" >
                      </div>
                      <ul>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                      </ul>
                   </div>
                </div>
                <div>
                   <div class="testimonial-box">
                      <div class="testimonial-detail">
                         <h3>elthan markote</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                         <h6>designer</h6>
                      </div>
                      <div class="img-wrapper">
                         <img src="{{ URL::asset('front-end/assets/images/testimonial/3.jpg') }}" alt="testimonial" class="img-fluid" >
                      </div>
                      <ul>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                         <li><i class="fa fa-star"></i></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--testimonial end-->
 
 <!--title-start-->
 <div class="title8 section-mb-space ">
    <h4>featured brands</h4>
 </div>
 <!--title-end-->
 
 <!-- brand start -->
 <section class="brand-second section-big-mb-space">
    <div class="container-fluid">
       <div class="row brand-block">
          <div class="col-12">
             <div class="brand-slide12 no-arrow mb--5">
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/1.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/2.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/3.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/4.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/5.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/6.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/7.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/4.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/5.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/6.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/4.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/5.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
                <div>
                   <div class="brand-box">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/brand/6.png') }}" alt="brand" class="img-fluid">
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- brand start -->
 @include('include.footer')

 <!--Newsletter modal popup start-->
<div class="modal fade bd-example-modal-lg blackfriday-modal theme-modal " id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
       <div class="modal-content ">
          <div class="modal-body">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             <div class="rainbow">
                <span></span>
                <span></span>
             </div>
             <div class="offer-content ">
                <img src="{{ URL::asset('front-end/assets/images/theme-modal/black-friday.jpg') }}" class="img-fluid bg-img" alt="">
                <div>
                   <div>
                      <h2><span>up to </span>80%</h2>
                      <div class="lable">get  30% off + free shipping</div>
                      <h3>black friday</h3>
                      <div class="timer">
                         <p id="demo4"><span>126<span class="timer-cal">Days</span></span><span>6<span class="timer-cal">Hrs</span></span><span>22<span class="timer-cal">Min</span></span><span>53<span class="timer-cal">Sec</span></span> </p>
                      </div>
                      <h4>Friday, 26 November 2021</h4>
                   </div>
                </div>
 
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--Newsletter Modal popup end-->
 
 <!-- Quick-view modal popup start-->
 <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
       <div class="modal-content quick-view-modal">
          <div class="modal-body">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             <div class="row">
                <div class="col-lg-6 col-xs-12">
                   <div class="quick-view-img">
                      <img src="{{ URL::asset('front-end/assets/images/mega-store/product/8.jpg') }}" alt="" class="img-fluid bg-img">
                   </div>
                </div>
                <div class="col-lg-6 rtl-text">
                   <div class="product-right">
                      <div class="pro-group">
                         <h2>
                            wireless  headphones
                         </h2>
                         <ul class="pro-price">
                            <li>$70</li>
                            <li><span>mrp $140</span></li>
                            <li>50% off</li>
                         </ul>
                         <div class="revieu-box">
                            <ul>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star"></i></li>
                               <li><i class="fa fa-star-o"></i></li>
                            </ul>
                            <a href="review.html"><span>(6 reviews)</span></a>
                         </div>
                         <ul class="best-seller">
                            <li>
                               <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><g><path d="m102.427 43.155-2.337-2.336a3.808 3.808 0 0 1 -.826-4.149l1.263-3.053a3.808 3.808 0 0 0 -2.063-4.975l-3.036-1.256a3.807 3.807 0 0 1 -2.352-3.519v-3.286a3.808 3.808 0 0 0 -3.809-3.808h-3.3a3.81 3.81 0 0 1 -3.518-2.35l-1.269-3.052a3.808 3.808 0 0 0 -4.98-2.059l-3.032 1.258a3.807 3.807 0 0 1 -4.152-.825l-2.323-2.323a3.809 3.809 0 0 0 -5.386 0l-2.336 2.336a3.808 3.808 0 0 1 -4.149.826l-3.053-1.263a3.809 3.809 0 0 0 -4.975 2.063l-1.257 3.036a3.808 3.808 0 0 1 -3.519 2.353h-3.285a3.808 3.808 0 0 0 -3.809 3.808v3.3a3.808 3.808 0 0 1 -2.349 3.519l-3.053 1.266a3.809 3.809 0 0 0 -2.059 4.976l1.259 3.035a3.81 3.81 0 0 1 -.825 4.152l-2.324 2.323a3.809 3.809 0 0 0 0 5.386l2.337 2.337a3.807 3.807 0 0 1 .826 4.149l-1.263 3.056a3.808 3.808 0 0 0 2.063 4.975l3.036 1.256a3.807 3.807 0 0 1 2.352 3.519v3.286a3.808 3.808 0 0 0 3.809 3.808h3.3a3.809 3.809 0 0 1 3.518 2.35l1.265 3.052a3.808 3.808 0 0 0 4.984 2.059l3.035-1.259a3.811 3.811 0 0 1 4.152.825l2.323 2.324a3.809 3.809 0 0 0 5.386 0l2.336-2.336a3.81 3.81 0 0 1 4.149-.827l3.053 1.264a3.809 3.809 0 0 0 4.975-2.063l1.257-3.037a3.809 3.809 0 0 1 3.519-2.352h3.285a3.808 3.808 0 0 0 3.809-3.808v-3.3a3.808 3.808 0 0 1 2.349-3.518l3.053-1.266a3.809 3.809 0 0 0 2.059-4.976l-1.259-3.036a3.809 3.809 0 0 1 .825-4.151l2.324-2.324a3.809 3.809 0 0 0 -.003-5.39z" fill="#f9cc4e"/><circle cx="64" cy="45.848" fill="#4ec4b5" r="29.146"/><path d="m59.795 41.643 4.205-12.614 4.205 12.614h12.615l-8.41 8.41 4.205 12.615-12.615-8.41-12.615 8.41 4.205-12.615-8.41-8.41z" fill="#f9cc4e"/><path d="m87.579 74.924h-1.6a3.809 3.809 0 0 0 -3.519 2.352l-1.257 3.037a3.809 3.809 0 0 1 -4.975 2.063l-3.053-1.264a3.81 3.81 0 0 0 -4.149.827l-2.336 2.336a3.809 3.809 0 0 1 -5.386 0l-2.323-2.324a3.811 3.811 0 0 0 -4.152-.825l-3.029 1.259a3.808 3.808 0 0 1 -4.977-2.059l-1.265-3.052a3.809 3.809 0 0 0 -3.518-2.35h-1.618l-17.417 35.386 17.255-5.872 5.872 17.256 17.868-36.304 17.868 36.3 5.872-17.256 17.26 5.876z" fill="#f95050"/></g></svg>
                               3 best seller
                            </li>
                            <li>
                               <svg enable-background="new 0 0 497 497" viewBox="0 0 497 497" xmlns="http://www.w3.org/2000/svg"><g><path d="m329.63 405.42-.38.43c-10.048 19.522-48.375 35.567-80.775 35.607-24.881 0-53.654-9.372-71.486-20.681-5.583-3.54-2.393-10.869-6.766-15.297l19.149-5.13c3.76-1.22 6.46-4.54 6.87-8.47l8.574-59.02 82.641-2.72 12.241 28.06.837 8.668-1.844 9.951 3.456 6.744.673 6.967c.41 3.93 3.11 7.25 6.87 8.47z" fill="#f2d1a5"/><path d="m420.39 497h-343.78c-6.21 0-7.159-6.156-6.089-12.266l2.53-14.57c3.82-21.96 16.463-37.323 37.683-44.153l27.702-8.561 28.754-8.035c18.34 18.57 48.615 27.957 81.285 27.957 32.4-.04 61.709-8.478 80.259-26.809l.38-.43 31.486 5.256 26.39 8.5c21.22 6.83 36.9 24.87 40.72 46.83l2.53 14.57c1.07 6.111-3.64 11.711-9.85 11.711z" fill="#7e8b96"/><g><path d="m384.055 215c-2.94 43.71-18.85 104.74-24.92 130.96-.68 2.94-2.33 5.45-4.56 7.22-2.23 1.78-5.05 2.82-8.06 2.82-6.88 0-12.55-5.37-12.94-12.23 0 0-5.58-84.28-7.63-128.77z" fill="#dc4955"/></g><path d="m141 271c-27.062 0-49-21.938-49-49 0-11.046 8.954-20 20-20h8.989l240.468-6.287 8.293 6.287h15.25c11.046 0 20 8.954 20 20 0 27.062-21.938 49-49 49z" fill="#f2bb88"/><path d="m360.6 415.39-.06.09c-49.3 66.23-174.56 66.38-223.76.56l-.43-.63 18.171-1.91 12.669-8.02c18.34 18.57 48.41 29.8 81.08 29.8h.15c32.4-.04 62.28-11.1 80.83-29.43l.38-.43z" fill="#a9a4d3"/><path d="m147.8 418.394v10.136l-32.89 10.59c-15.6 5.02-27.05 18.18-29.86 34.34l-3.59 23.54h-4.85c-6.21 0-10.92-5.6-9.85-11.71l2.53-14.57c3.82-21.96 19.5-40 40.72-46.83l26.34-8.48z" fill="#64727a"/><path d="m182.19 417.45-34.39 11.08c-3.99-3.86-7.68-8.02-11.02-12.49l-.43-.63 30.84-9.93c1.828 1.848 10.344.351 12.353 2.02 2.928 2.433-.561 7.928 2.647 9.95z" fill="#938dc8"/><path d="m299.7 358.2-2.71-28.06-79.861 2.255.001-.005-16.48.47-2.98 26.56-.763 6.8 2.039 12.83-3.989 4.55-.778 6.93c-.41 3.93-3.11 7.25-6.87 8.47l-20.12 6.48c4.37 4.43 9.41 8.44 15 11.97l10.02-3.22c9.79-3.17 16.79-11.79 17.88-21.97l2.058-17.506c.392-3.33 3.888-5.367 6.958-4.02 11.414 5.008 21.565 7.765 28.393 7.765 11.322.001 31.852-7.509 52.202-20.299z" fill="#f2bb88"/><path d="m134.539 164.427s-.849 18.411-.849 33.002c0 38.745 9.42 76.067 25.701 105.572 20.332 36.847 72.609 61.499 88.109 61.499s68.394-24.653 89.275-61.499c14.137-24.946 23.338-55.482 25.843-87.741.458-5.894-9.799-20.073-9.799-26.058l10.491-24.775c0-38.422-36.205-111.427-114.81-111.427s-113.961 73.005-113.961 111.427z" fill="#f2d1a5"/><g><path d="m294 227.5c-4.142 0-7.5-3.358-7.5-7.5v-15c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v15c0 4.142-3.358 7.5-7.5 7.5z" fill="#64727a"/></g><g><path d="m203 227.5c-4.142 0-7.5-3.358-7.5-7.5v-15c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v15c0 4.142-3.358 7.5-7.5 7.5z" fill="#64727a"/></g><g><path d="m249 260.847c-5.976 0-11.951-1.388-17.398-4.163-3.691-1.88-5.158-6.397-3.278-10.087 1.88-3.691 6.398-5.158 10.087-3.278 6.631 3.379 14.547 3.379 21.178 0 3.689-1.881 8.207-.413 10.087 3.278 1.88 3.69.413 8.207-3.278 10.087-5.447 2.775-11.422 4.163-17.398 4.163z" fill="#f2bb88"/></g><path d="m288.989 40.759c0 22.511-9.303 40.759-40.489 40.759s-48.702-42.103-48.702-42.103 17.516-39.415 48.702-39.415c25.911 0 47.746 12.597 54.392 29.769 1.353 3.497-13.903 7.182-13.903 10.99z" fill="#df646e"/><path d="m254.305 81.307c1.031-.099 2.069-.167 3.093-.295 26.96-3.081 47.572-19.928 47.572-40.252 0-3.81-.72-7.49-2.08-10.99-15.42-6.31-33.46-10.34-54.39-10.34-4.139 0-8.163.159-12.073.462-5.127.397-7.393-6.322-3.107-9.163 7.36-4.878 16.519-8.364 26.68-9.879-3.71-.56-7.56-.85-11.5-.85-25.933 0-47.766 12.621-54.393 29.813-.006.002-.011.004-.017.007-1.337 3.487-2.055 7.201-2.06 10.94 0 22.51 25.28 40.76 56.47 40.76 1.946.008 3.872-.09 5.805-.213z" fill="#dc4955"/><path d="m363.31 164.43v33c0 5.99-.23 11.94-.7 17.83-4.32-.91-8.4-2.66-12.05-5.19-22.785-15.834-31.375-40.163-37.64-60.936-.382-1.268-1.547-2.134-2.871-2.134h-30.949c-4.96 0-9.65-2.15-12.89-5.91l-10.947-12.711c-1.197-1.39-3.349-1.39-4.546 0l-10.947 12.711c-3.24 3.76-7.93 5.91-12.89 5.91h-90.33c8.47-39.6 44.09-94 111.95-94 78.61 0 114.81 73 114.81 111.43z" fill="#f2bb88"/><path d="m381 164.19v37.81h-11.25c-4 0-7.93-1.16-11.22-3.44-19.74-13.72-26.93-35.65-33.69-58.43-1.26-4.24-5.16-7.13-9.58-7.13h-36.165c-.873 0-1.703-.38-2.273-1.042l-21.559-25.029c-1.197-1.389-3.349-1.389-4.546 0l-21.559 25.029c-.57.662-1.4 1.042-2.273 1.042h-38.015c-5.3 0-9.68 4.14-9.98 9.44 0 0-2.331 25.591-4.032 66.31-1.765 42.256-7.908 135.02-7.908 135.02-.16 2.822-1.215 5.393-2.879 7.441-2.381 2.929-5.67.375-9.72.375-3.01 0-5.83-1.04-8.06-2.82-2.23-1.77-.792-5.474-1.472-8.414-6.7-28.94-23.83-94.686-23.83-138.351 0-13.73-.14-34.689 0-37.649.14-26.43 12.74-54.048 32-78.128 12.937-16.178 28.667-38.955 58.628-47.692 10.986-3.204 23.248-5.101 36.883-5.101 50.8 0 82.75 26.31 100.6 48.39 19.68 24.319 31.9 55.879 31.9 82.369z" fill="#df646e"/><path d="m211.62 38.54c-19.38 9.9-33.55 23.84-43.37 36.44-19.26 24.69-31.27 56.78-31.41 83.88-.14 3.03-.84 25.18-.84 39.25 0 44.77 18.69 117.93 25.39 147.6.47 2.08 1.4 3.94 2.68 5.5-2.38 2.93-6.01 4.79-10.06 4.79-3.01 0-5.83-1.04-8.06-2.82-2.23-1.77-3.88-4.28-4.56-7.22-6.7-28.94-25.39-100.29-25.39-143.96 0-13.73.7-35.33.84-38.29.14-26.43 12.15-57.73 31.41-81.81 12.94-16.18 33.4-34.63 63.37-43.36z" fill="#dc4955"/><g><path d="m316.539 193.816c-1.277 0-2.571-.327-3.755-1.013-11.762-6.82-25.806-6.82-37.567 0-3.583 2.078-8.172.858-10.25-2.726-2.078-3.583-.857-8.172 2.726-10.25 16.474-9.552 36.143-9.552 52.616 0 3.583 2.078 4.804 6.667 2.726 10.25-1.392 2.399-3.909 3.739-6.496 3.739z" fill="#df646e"/></g><g><path d="m225.539 193.816c-1.277 0-2.571-.327-3.755-1.013-11.762-6.82-25.806-6.82-37.567 0-3.583 2.078-8.171.858-10.25-2.726-2.078-3.583-.857-8.172 2.726-10.25 16.474-9.552 36.143-9.552 52.616 0 3.583 2.078 4.804 6.667 2.726 10.25-1.392 2.399-3.909 3.739-6.496 3.739z" fill="#df646e"/></g><g><path d="m302.143 383.517c-16.23 10.87-34.973 16.353-53.643 16.353s-37.3-5.41-53.54-16.27l3.476-6.313-1.526-11.067 4.15 3.37c28.46 20.41 66.63 20.37 95.05-.12.2-.14.39-.27.6-.39l3.826-2.211z" fill="#a9a4d3"/></g><g><path d="m211.98 376.2-1.85 15.68c-5.23-2.27-10.31-5.03-15.17-8.28l1.95-17.38 4.15 3.37c3.5 2.51 7.15 4.72 10.92 6.61z" fill="#938dc8"/></g><g><path d="m269.5 306.5h-42c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h42c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#df646e"/></g></g></svg>
                               44 active view this
                            </li>
                         </ul>
                      </div>
                      <div class="pro-group">
                         <h6 class="product-title">product infomation</h6>
                         <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                      </div>
                      <div class="pro-group pb-0">
                         <h6 class="product-title size-text">select size<span>
                 <a href="#" data-bs-toggle="modal" data-bs-target="#sizemodal">size chart</a></span></h6>
                         <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body"><img src="{{ URL::asset('front-end/assets/images/size-chart.jpg') }}" alt="" class="img-fluid "></div>
                               </div>
                            </div>
                         </div>
                         <div class="size-box">
                            <ul>
                               <li ><a href="javascript:void(0)">s</a></li>
                               <li><a href="javascript:void(0)">m</a></li>
                               <li><a href="javascript:void(0)">l</a></li>
                               <li><a href="javascript:void(0)">xl</a></li>
                               <li><a href="javascript:void(0)">2xl</a></li>
                            </ul>
                         </div>
                         <h6 class="product-title">color</h6>
                         <div class="color-selector inline">
                            <ul>
                               <li>
                                  <div class="color-1 active"></div>
                               </li>
                               <li>
                                  <div class="color-2"></div>
                               </li>
                               <li>
                                  <div class="color-3"></div>
                               </li>
                               <li>
                                  <div class="color-4"></div>
                               </li>
                               <li>
                                  <div class="color-5"></div>
                               </li>
                               <li>
                                  <div class="color-6"></div>
                               </li>
                               <li>
                                  <div class="color-7"></div>
                               </li>
                            </ul>
                         </div>
                         <h6 class="product-title">quantity</h6>
                         <div class="qty-box">
                            <div class="input-group">
                               <button class="qty-minus"></button>
                               <input class="qty-adj form-control" type="number" value="1">
                               <button class="qty-plus"></button>
                            </div>
                         </div>
                         <div class="product-buttons">
                            <a href="javascript:void(0)" onclick="openCart()" class="btn cart-btn btn-normal tooltip-top" data-tippy-content="Add to cart">
                               <i class="fa fa-shopping-cart"></i>
                               add to cart
                            </a>
                            <a href="product-page(left-sidebar).html" class="btn btn-normal tooltip-top"  data-tippy-content="view detail">
                               view detail
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Quick-view modal popup end-->
 
 <!-- edit product modal start-->
 <div class="modal fade bd-example-modal-lg theme-modal pro-edit-modal" id="edit-product" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
       <div class="modal-content ">
          <div class="modal-body">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             <div class="pro-group">
                <div class="product-img">
                   <div class="media">
                      <div class="img-wraper">
                         <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::asset('front-end/assets/images/mega-store/product/9.jpg') }}"  alt="" class="img-fluid">
                         </a>
                      </div>
                      <div class="media-body">
                         <a href="product-page(left-sidebar).html">
                            <h3>redmi not 3</h3>
                         </a>
                         <h6>$80<span>$120</span></h6>
                      </div>
                   </div>
                </div>
             </div>
             <div class="pro-group">
                <h6 class="product-title">Select Size</h6>
                <div class="size-box">
                   <ul>
                      <li ><a href="javascript:void(0)">s</a></li>
                      <li><a href="javascript:void(0)">m</a></li>
                      <li><a href="javascript:void(0)">l</a></li>
                      <li><a href="javascript:void(0)">xl</a></li>
                      <li><a href="javascript:void(0)">2xl</a></li>
                   </ul>
                </div>
             </div>
             <div class="pro-group">
                <h6 class="product-title">Select color</h6>
                <div class="color-selector inline">
                   <ul>
                      <li>
                         <div class="color-1 active"></div>
                      </li>
                      <li>
                         <div class="color-2"></div>
                      </li>
                      <li>
                         <div class="color-3"></div>
                      </li>
                      <li>
                         <div class="color-4"></div>
                      </li>
                      <li>
                         <div class="color-5"></div>
                      </li>
                      <li>
                         <div class="color-6"></div>
                      </li>
                      <li>
                         <div class="color-7"></div>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="pro-group">
                <h6 class="product-title">Quantity</h6>
                <div class="qty-box">
                   <div class="input-group">
                      <button class="qty-minus"></button>
                      <input class="qty-adj form-control" type="number" value="1"/>
                      <button class="qty-plus"></button>
                   </div>
                </div>
             </div>
             <div class="pro-group mb-0">
                <div class="modal-btn">
                   <a href="cart.html" class="btn btn-solid btn-sm">
                      add to cart
                   </a>
                   <a href="product-page(left-sidebar).html" class="btn btn-solid btn-sm">
                      more detail
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- edit product modal end-->
 
 <!-- Add to cart bar -->
 <div id="cart_side" class="add_to_cart right ">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
       <div class="cart_top">
          <h3>my cart</h3>
          <div class="close-cart">
             <a href="javascript:void(0)" onclick="closeCart()">
                <i class="fa fa-times" aria-hidden="true"></i>
             </a>
          </div>
       </div>
       <div class="cart_media">
          <ul class="cart_product">
             <li>
                <div class="media">
                   <a href="product-page(left-sidebar).html">
                      <img alt="megastore1" class="me-3" src="{{ URL::asset('front-end/assets/images/mega-store/product/1.jpg') }}">
                   </a>
                   <div class="media-body">
                      <a href="product-page(left-sidebar).html">
                         <h4>women fashion shoes</h4>
                      </a>
                      <h6>
                         $80.00 <span>$120.00</span>
                      </h6>
                      <div class="addit-box">
                         <div class="qty-box">
                            <div class="input-group">
                               <button class="qty-minus"></button>
                               <input class="qty-adj form-control" type="number" value="1"/>
                               <button class="qty-plus"></button>
                            </div>
                         </div>
                         <div class="pro-add">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                               <i data-feather="edit"></i>
                            </a>
                            <a href="javascript:void(0)">
                               <i  data-feather="trash-2"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </li>
             <li>
                <div class="media">
                   <a href="product-page(left-sidebar).html">
                      <img alt="megastore1" class="me-3" src="{{ URL::asset('front-end/assets/images/mega-store/product/2.jpg') }}">
                   </a>
                   <div class="media-body">
                      <a href="product-page(left-sidebar).html">
                         <h4>men analogue watch</h4>
                      </a>
                      <h6>
                         $80.00 <span>$120.00</span>
                      </h6>
                      <div class="addit-box">
                         <div class="qty-box">
                            <div class="input-group">
                               <button class="qty-minus"></button>
                               <input class="qty-adj form-control" type="number" value="1"/>
                               <button class="qty-plus"></button>
                            </div>
                         </div>
                         <div class="pro-add">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                               <i data-feather="edit"></i>
                            </a>
                            <a href="javascript:void(0)">
                               <i  data-feather="trash-2"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </li>
             <li>
                <div class="media">
                   <a href="product-page(left-sidebar).html">
                      <img alt="megastore1" class="me-3" src="{{ URL::asset('front-end/assets/images/mega-store/product/3.jpg') }}">
                   </a>
                   <div class="media-body">
                      <a href="product-page(left-sidebar).html">
                         <h4>wireless  headphones</h4>
                      </a>
                      <h6>
                         $80.00 <span>$120.00</span>
                      </h6>
                      <div class="addit-box">
                         <div class="qty-box">
                            <div class="input-group">
                               <button class="qty-minus"></button>
                               <input class="qty-adj form-control" type="number" value="1"/>
                               <button class="qty-plus"></button>
                            </div>
                         </div>
                         <div class="pro-add">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                               <i data-feather="edit"></i>
                            </a>
                            <a href="javascript:void(0)">
                               <i  data-feather="trash-2"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </li>
          </ul>
          <ul class="cart_total">
             <li>
                subtotal : <span>$1050.00</span>
             </li>
             <li>
                shpping <span>free</span>
             </li>
             <li>
                taxes <span>$0.00</span>
             </li>
             <li>
                <div class="total">
                   total<span>$1050.00</span>
                </div>
             </li>
             <li>
                <div class="buttons">
                   <a href="cart.html" class="btn btn-solid btn-sm">view cart</a>
                   <a href="checkout.html" class="btn btn-solid btn-sm ">checkout</a>
                </div>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!-- Add to cart bar end-->
 
 
 <!-- Add to wishlist bar -->
 <div id="wishlist_side" class="add_to_cart right ">
    <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
    <div class="cart-inner">
       <div class="cart_top">
          <h3>my wishlist</h3>
          <div class="close-cart">
             <a href="javascript:void(0)" onclick="closeWishlist()">
                <i class="fa fa-times" aria-hidden="true"></i>
             </a>
          </div>
       </div>
       <div class="cart_media">
          <ul class="cart_product">
             <li>
                <div class="media">
                   <a href="product-page(left-sidebar).html">
                      <img alt="megastore1" class="me-3" src="{{ URL::asset('front-end/assets/images/mega-store/product/1.jpg') }}">
                   </a>
                   <div class="media-body">
                      <a href="product-page(left-sidebar).html">
                         <h4>women fashion shoes</h4>
                      </a>
                      <h6>
                         $80.00 <span>$120.00</span>
                      </h6>
                      <div class="addit-box">
                         <div class="qty-box">
                            <div class="input-group">
                               <button class="qty-minus"></button>
                               <input class="qty-adj form-control" type="number" value="1"/>
                               <button class="qty-plus"></button>
                            </div>
                         </div>
                         <div class="pro-add">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                               <i data-feather="edit"></i>
                            </a>
                            <a href="javascript:void(0)">
                               <i  data-feather="trash-2"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </li>
             <li>
                <div class="media">
                   <a href="product-page(left-sidebar).html">
                      <img alt="megastore1" class="me-3" src="{{ URL::asset('front-end/assets/images/mega-store/product/2.jpg') }}">
                   </a>
                   <div class="media-body">
                      <a href="product-page(left-sidebar).html">
                         <h4>men analogue watch</h4>
                      </a>
                      <h6>
                         $80.00 <span>$120.00</span>
                      </h6>
                      <div class="addit-box">
                         <div class="qty-box">
                            <div class="input-group">
                               <button class="qty-minus"></button>
                               <input class="qty-adj form-control" type="number" value="1"/>
                               <button class="qty-plus"></button>
                            </div>
                         </div>
                         <div class="pro-add">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                               <i data-feather="edit"></i>
                            </a>
                            <a href="javascript:void(0)">
                               <i  data-feather="trash-2"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </li>
             <li>
                <div class="media">
                   <a href="product-page(left-sidebar).html">
                      <img alt="megastore1" class="me-3" src="{{ URL::asset('front-end/assets/images/mega-store/product/3.jpg') }}">
                   </a>
                   <div class="media-body">
                      <a href="product-page(left-sidebar).html">
                         <h4>wireless  headphones</h4>
                      </a>
                      <h6>
                         $80.00 <span>$120.00</span>
                      </h6>
                      <div class="addit-box">
                         <div class="qty-box">
                            <div class="input-group">
                               <button class="qty-minus"></button>
                               <input class="qty-adj form-control" type="number" value="1"/>
                               <button class="qty-plus"></button>
                            </div>
                         </div>
                         <div class="pro-add">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                               <i data-feather="edit"></i>
                            </a>
                            <a href="javascript:void(0)">
                               <i  data-feather="trash-2"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </li>
          </ul>
          <ul class="cart_total">
             <li>
                subtotal : <span>$1050.00</span>
             </li>
             <li>
                shpping <span>free</span>
             </li>
             <li>
                taxes <span>$0.00</span>
             </li>
             <li>
                <div class="total">
                   total<span>$1050.00</span>
                </div>
             </li>
             <li>
                <div class="buttons">
                   <a href="wishlist.html" class="btn btn-solid btn-block btn-md">view wislist</a>
                </div>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!-- Add to wishlist bar end-->
 
 <!-- My account bar start-->
 <div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
       <div class="cart_top">
          <h3>my account</h3>
          <div class="close-cart">
             <a href="javascript:void(0)" onclick="closeAccount()">
                <i class="fa fa-times" aria-hidden="true"></i>
             </a>
          </div>
       </div>
       <form class="theme-form">
          <div class="form-group">
             <label for="email">Email</label>
             <input type="text" class="form-control" id="email" placeholder="Email" required="">
          </div>
          <div class="form-group">
             <label for="review">Password</label>
             <input type="password" class="form-control" id="review" placeholder="Enter your password" required="">
          </div>
          <div class="form-group">
             <a href="javascript:void(0)" class="btn btn-solid btn-md btn-block ">Login</a>
          </div>
          <div class="accout-fwd">
             <a href="forget-pwd.html" class="d-block"><h5>forget password?</h5></a>
             <a href="register.html" class="d-block"><h6 >you have no account ?<span>signup now</span></h6></a>
          </div>
       </form>
    </div>
 </div>
 <!-- Add to account bar end-->
 
 <!-- add to  setting bar  start-->
 <div id="mySetting" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="cart-inner">
       <div class="cart_top">
          <h3>my setting</h3>
          <div class="close-cart">
             <a href="javascript:void(0)" onclick="closeSetting()">
                <i class="fa fa-times" aria-hidden="true"></i>
             </a>
          </div>
       </div>
       <div class="setting-block">
          <div class="form-group">
             <select>
                <option value="">language</option>
                <option value="">english</option>
                <option value="">french</option>
                <option value="">hindi</option>
             </select>
          </div>
          <div class="form-group">
             <select>
                <option value="">currency</option>
                <option value="">uro</option>
                <option value="">ruppees</option>
                <option value="">piund</option>
                <option value="">doller</option>
             </select>
          </div>
       </div>
    </div>
 </div>
 <!-- add to  setting bar  end-->
 
 <!-- notification product -->
 <div class="product-notification" id="dismiss">
    <span  onclick="dismiss();" class="btn-close" aria-hidden="true"></span>
    <div class="media">
       <img class="me-2" src="{{ URL::asset('front-end/assets/images/mega-store/hot-deal/3.jpg') }}" alt="Generic placeholder image">
       <div class="media-body">
          <h5 class="mt-0 mb-1">Latest trending</h5>
          Cras sit amet nibh libero, in gravida nulla.
       </div>
    </div>
 </div>
 <!-- notification product -->
 
 
 <!-- latest jquery-->
 <script src="{{ URL::asset('front-end/assets/js/jquery-3.3.1.min.js') }}"></script>
 
 <!-- slick js-->
 <script src="{{ URL::asset('front-end/assets/js/slick.js') }}"></script>
 
 
 
 <!-- tool tip js -->
 <script src="{{ URL::asset('front-end/assets/js/tippy-popper.min.js') }}"></script>
 <script src="{{ URL::asset('front-end/assets/js/tippy-bundle.iife.min.js') }}"></script>
 
 <!-- popper js-->
 <script src="{{ URL::asset('front-end/assets/js/popper.min.js') }}" ></script>
 
 <!-- ajax search js -->
 <script src="{{ URL::asset('front-end/assets/js/typeahead.bundle.min.js') }}"></script>
 <script src="{{ URL::asset('front-end/assets/js/typeahead.jquery.min.js') }}"></script>
 <script src="{{ URL::asset('front-end/assets/js/ajax-custom.js') }}"></script>
 
 <!-- Timer js-->
 <script src="{{ URL::asset('front-end/assets/js/menu.js') }}"></script>
 
 <!-- Bootstrap js-->
 <script src="{{ URL::asset('front-end/assets/js/bootstrap.js') }}"></script>
 
 <!-- father icon -->
 <script src="{{ URL::asset('front-end/assets/js/feather.min.js') }}"></script>
 <script src="{{ URL::asset('front-end/assets/js/feather-icon.js') }}"></script>
 
 <!-- Bootstrap js-->
 <script src="{{ URL::asset('front-end/assets/js/bootstrap-notify.min.js') }}"></script>
 
 <!-- Theme js-->
 <script src="{{ URL::asset('front-end/assets/js/script.js') }}"></script>
 <script src="{{ URL::asset('front-end/assets/js/timer1.js') }}"></script>
 <script src="{{ URL::asset('front-end/assets/js/timer2.js') }}"></script>
 <script src="{{ URL::asset('front-end/assets/js/modal.js') }}"></script>
 </body>
 
 
 </html>
 
 
 