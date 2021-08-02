
<?php
use App\Models\Banner; 
$getBanners = Banner::getBanners(); 
?>

<!-- Required font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" integrity="sha512-y6ZMKFUQrn+UUEVoqYe8ApScqbjuhjqzTuwUMEGMDuhS2niI8KA3vhH2LenreqJXQS+iIXVTRL2iaNfJbDNA1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
<style>
  .carousel-open:checked+.carousel-item {
    position: static;
    opacity: 100;
  }

  .carousel-item {
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
  }

  #carousel-1:checked~.control-1,
  #carousel-2:checked~.control-2,
  #carousel-3:checked~.control-3 {
    display: block;
  }

  .carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
  }

  #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
  #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
  #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #2b6cb0;
    /*Set to match the Tailwind colour you want the active one to be */
  }
</style>

<div class="carousel relative rounded relative overflow-hidden shadow-xl">
  <div class="carousel-inner relative overflow-hidden w-full">

    @foreach($getBanners as $key => $banner)
    <!--Slide 1-->
    <input class="carousel-open" type="radio" id="carousel-{{$key}}" name="carousel" aria-hidden="true" hidden=""
     @if($key ==0 ) checked="checked" @else checked="" @endif>
    <div class="carousel-item absolute opacity-0 bg-center" style="height:500px;   background-repeat: no-repeat; background-image: url({{ asset('master-admin/assets/bannerImage/'.$banner['image']) }})">
    
    </div>
    <label for="carousel-3"
      class="control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto flex justify-center content-center"><i
        class="fas fa-angle-left mt-3"></i></label>
    <label for="carousel-2"
      class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
        class="fas fa-angle-right mt-3"></i></label>

   @endforeach
       

    <!-- Add additional indicators for each slide-->
    
    <ol class="carousel-indicators">
      @foreach($getBanners as $key => $value)
      <li class="inline-block mr-3">
        <label for="carousel-{{ $key }}"
          class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
      </li>
      @endforeach
    </ol>

  </div>
</div>