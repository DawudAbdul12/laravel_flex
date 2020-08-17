<!doctype html>
<html lang="en">
  <head>
    <title>Wholesome Craft |  Blog </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

   

   <!-- include navigation -->
   @include("frontend.includes.nav-links")
   @include("frontend.includes.navigation")
  <!-- include navigation -->


<section class="topfloat spacetop">
   <div class="container-fluid container-who2">
     <div class="row centerit mt-5">
      

       <div class="col-12 col-md-5 mt-5 order-2 order-md-1 ">
         <h1 class="mb-3">Our blog. Explore, <br> discover, & learn with <br> wholesome craft. </h1>
        <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit maecenas convallis.</p>

        <a href="#" class="btn btn-round shadow">
              <img src="img/arrowdown2.svg" alt="">
          </a>
       </div>

       <div class="col-12 col-md-7 mt-5  mt-md-0 order-1 order-md-2">
        <img src="img/blogtop.png" class="img-fluid w-100 shadow rounded-circle " alt="">
       </div>
     </div>
   </div>
</section>

<!-- Blog list -->
  <section class="glogreen3">
     <div class="container-fluid container-who2  py-5">
       <div class="row ">

       

        @foreach ($blogs as $blog)

          @php
          $day = date('d',strtotime($blog->publish));
          $mth = date('F',strtotime($blog->publish));
          $th = date('S',strtotime($blog->publish));
          $yr = date('Y',strtotime($blog->publish));
          @endphp
          
          <div class="col-12 col-md-4 px-md-4 mb-5">
            <a href="/blog/{{ strtolower($blog->slug) }}">
            <img src="/blog_images/{{ $blog->pic }}" class="img-fluid bimage" alt="">
            </a>
            <div class="px-3 my-3">
              {{-- 12 Feb 2020 --}}
              <small class="bdate"> {{$day.''.$th}} {{$mth}} {{$yr}}  </small>
              <h5 class="btitle"> {{  ucwords($blog->title) }} </h5>
              <p class="bcon"> {!! limit_text($blog->content,13) !!}   </p>
            </div>
            
            <hr class="hr2">
          </div>

        @endforeach
      
       </div>
     </div>
  </section>
<!-- Blog list -->




<!-- footer includes -->
@include("frontend.includes.footer")
@include("frontend.includes.footer-links")
 <!-- footer includes -->

  </body>
</html>