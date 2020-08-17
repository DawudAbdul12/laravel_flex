<!doctype html>
<html lang="en">
  <head>
    <title>Wholesome Craft | Single Blog </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

   

   <!-- include navigation -->
   @include("frontend.includes.nav-links")
   @include("frontend.includes.navigation")
  <!-- include navigation -->

  @php
  $day = date('d',strtotime($blog->publish));
  $mth = date('F',strtotime($blog->publish));
  $th = date('S',strtotime($blog->publish));
  $yr = date('Y',strtotime($blog->publish));
  @endphp

<section class="spacetop pt-4">
   <div class="container-fluid container-who2 ">
     <div class="row centerit mt-md-5">
      

       <div class="col-12 col-md-6 mt-md-5 order-2 order-md-1 ">
         <p> {{$day.''.$th}} {{$mth}} {{$yr}}  </p>
         <h1 class="mb-3">{{ ucwords($blog->title) }}</h1>

        <a href="#" class="btn btn-round shadow">
              <img src="{{ asset('img/arrowdown2.svg')}}" alt="">
        </a>
       </div>

       <div class="col-12 col-md-6 order-1 order-md-2">
        <img src="/blog_images/{{ $blog->pic }}" class="img-fluid w-100 shadow rounded-circle " alt="">
       </div>
     </div>
   </div>
</section>


<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 mx-auto"> 
        {!! ucfirst($blog->content)  !!}
      </div>
    </div>
  </div>
</section>


<!-- You might also like.. -->
  <section class="my-5">
     <div class="container-fluid container-who2  py-5">
       <div class="row ">

          <div class="col-12 py-4">
            <h3>You Might Also Like..</h3>
          </div>

          @foreach ($related as $blog)
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
                  <small class="bdate">{{$day.''.$th}} {{$mth}} {{$yr}} </small>
                  <h5 class="btitle">{{  ucwords($blog->title) }}</h5>
                  <p class="bcon">{!! limit_text($blog->content,13) !!}</p>
                </div>
              <hr class="hr2">
            </div>

          @endforeach


     </div>
  </section>
<!-- You might also like.. -->


<!-- footer includes -->
 @include("frontend.includes.footer")
 @include("frontend.includes.footer-links")
 <!-- footer includes -->

  </body>
</html>