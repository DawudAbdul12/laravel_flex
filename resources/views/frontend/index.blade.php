<!doctype html>
<html lang="en">
  <head>
    <title>Wholesome Craft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

   

   <!-- include navigation -->
   @include("frontend.includes.nav-links")
   @include("frontend.includes.navigation")
  <!-- include navigation -->


<section class="home_search spacetop">
   <div class="container-fluid container-who">
     <div class="row">
      <div class="col-12">
        <div class="owl-carousel  owl-hit owl-theme">

          @foreach ($sliders as $slider)
            <div class="item">
              <div class="row">
                  <div class="col-12 mt-4">
                    <img src="/slider_images/{{ $slider->pic }}" class="img-fluid topcoverimage" alt="">
                  </div>
                  <div class="col-12 tctext">
                    <h1 class="mb-3"> {{ ucwords($slider->title) }} </h1>
                    <p> {!! ucfirst($slider->content) !!}</p>
                    <a href=" {{ $slider->link }} " class="btn btn-success"> {{  ucwords($slider->btn_text) }} </a>
                  </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
   </div>
</section>







<!-- A Perfect Plan For everyone -->
  <section class="glogreen">
    <div class="container-fluid container-who2">
      <div class="row">
        <div class="col-12 text-center">
          <img src="img/petal.svg" class="img-fluid" alt="">
          <h2 class="pt-3">A Perfect Plan For Everyone</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas convallis</p>
        </div>
      </div>

      <div class="row mt-5">

      <div class="col-12 col-md-12 col-lg-4 mb-4">
          <div class="card">
            <!--  -->
            <div class="squi">
              <img src="img/weplan1.png" alt="" class="vasimg-blog1">
              <div class="overlay-light-black-blog1"></div>
              <div class="text-contain2-blog1">
               <h1 class="wc whotext1">We Craft, You Savor</h1>
               <hr>
                <p class="font-weight-bold mt-5 mb-2">  Features:</p>
                <img src="img/smalldash.svg" alt="">
                <ul class=mt-4>
                  <li class="wholli">Supervised By Our Dietitian</li>
                  <li class="wholli">Carefully Crafted By our Chefs</li>
                  <li class="wholli">Delivered Daily To Your Doorstep</li>
                </ul>
              </div>
          </div>
            <!--  -->
            <div class="card-body pt-2 pb-4">
              <a href="">
              <p class="whotext3 mb-0">Choose</p>
              <div class="row ">
                <div class="col-9"> 
                   <h5 class="whotext2">Wholesome Meal Plan</h5>
                   </div>
                <div class="col-2 mt-1"><img src="img/arrowr.svg" width=25  alt=""> </div>
              </div>
              </a>
          </div>

          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4 mb-4">
          <div class="card">
            <!--  -->
            <div class="squi">
              <img src="img/weplan.png" alt="" class="vasimg-blog1">
              <div class="overlay-light-black-blog1"></div>
              <div class="text-contain2-blog1">
               <h1 class="wc whotext1">We plan, You cook</h1>
               <hr>
                <p class="font-weight-bold mt-5 mb-2">  Features:</p>
                <img src="img/smalldash.svg" alt="">
                <ul class=mt-4>
                  <li class="wholli">Daily Meals Program</li>
                  <li class="wholli">Calorie-Counted Recipes</li>
                  <li class="wholli">Ingredients & Measurements</li>
                </ul>
              </div>
          </div>
            <!--  -->
            <div class="card-body pt-2 pb-4">
              <a href="">
              <p class="whotext3 mb-0">Choose</p>
              <div class="row ">
                <div class="col-9"> 
                   <h5 class="whotext2">Wholesome Meal Plan</h5>
                   </div>
                <div class="col-2 mt-1"><img src="img/arrowr.svg" width=25  alt=""> </div>
              </div>
              </a>
          </div>

          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4 mb-4">
          <div class="card">
            <!--  -->
            <div class="squi">
              <img src="img/weplan2.png" alt="" class="vasimg-blog1">
              <div class="overlay-light-black-blog1"></div>
              <div class="text-contain2-blog1">
               <h1 class="wc whotext1">You Choose</h1>
               <hr>
                <p class="font-weight-bold mt-5 mb-2">  Features:</p>
                <img src="img/smalldash.svg" alt="">
                <ul class=mt-4>
                  <li class="wholli">Single Meals</li>
                  <li class="wholli">Curated Recipes</li>
                  <li class="wholli">No contract, Order On The Go</li>
                </ul>
              </div>
          </div>
            <!--  -->
            <div class="card-body pt-2 pb-4">
              <a href="">
              <p class="whotext3 mb-0">Choose</p>
              <div class="row ">
                <div class="col-9"> 
                   <h5 class="whotext2">Wholesome Meal Plan</h5>
                   </div>
                <div class="col-2 mt-1"><img src="img/arrowr.svg" width=25  alt=""> </div>
              </div>
              </a>
          </div>

          </div>
        </div>


      </div>
    </div>
  </section>
<!-- A Perfect Plan For everyone -->

<!-- How wholesome Craft Works & what you’ll get -->


<section class="glogreen">
    <div class="container-fluid container-who2">
    <div class="row">
       <div class="col-12 col-md-5">
       <img src="img/petal.svg" class="img-fluid" width="40" alt="">
          <h2 class="my-3">How wholesome Craft Works <br>
& what you’ll get</h2>

<p >The one-on-one consultation with  <br>
our dietitian includes:</p>

<a href="#" class="btn btn-success shadow">Book Appointment</a>
       </div>

       <div class="col-12 col-md-7">
         <img src="img/icons.svg" class="img-fluid" alt="">
       </div>
    </div>
   </div>
</section>
   
<!-- How wholesome Craft Works & what you’ll get -->




<!-- We are here to help you achieve a healthy diet lifestyle -->
  <section class="glogreen3">
     <div class="container-fluid container-who2  py-5">
       <div class="row centerit">
          <div class="col-12 col-md-7">
             <img src="img/cakes.png" class="w-100" alt="">
          </div>

          <div class="col-12 col-md-5 pl-md-5">
          <img src="img/petal.svg" class="img-fluid" width="40" alt="">
                <h2 class="my-3">We Are Here To Help You Achieve A Healthy Diet Lifestyle</h2>

      <p >The Menu is a blend of Continental, Ghanaian, Mediterranean and Asian cuisines.</p>

      <a href="#" class="btn btn-success my-4 shadow">Our Plans</a>

      <hr class="hr2">
            </div>

          
       </div>
     </div>
  </section>
<!-- We are here to help you achieve a healthy diet lifestyle -->



<!-- What our customers are saying about us -->
<section class="">
    <div class="container-fluid container-who2">
    <div class="row centerit">
      <div class="col-12  mb-4">
        <hr class="hr2">
      </div>
       <div class="col-12 col-md-5 pl-md-5">
       <img src="img/petal.svg" class="img-fluid" width="40" alt="">
          <h2 class="my-4">What Our Customers <br>
          Are Saying About Us</h2>

          <p  class="mb-5">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit maecenas convallis</p>
          <a href="#" class="btn btn-success shadow">Testimonials</a>
        
          <p class="mt-3"><img src="img/shortdash.png" class="w-50" alt=""></p>
       </div> 

       <div class="col-12 col-md-7">
         <img src="img/people.svg" class="img-fluid w-100" alt="">
       </div>
    </div>
   </div>
</section>
<!-- What our customers are saying about us -->




<!-- Our awesome services are just click away -->
<section class="golpad ">
     <div class="container-fluid container-who2  py-5">
       <div class="row centerit">
          <div class="col-12 col-md-7">
             <img src="img/roundgreen.svg" class="w-100" alt="">
          </div>

          <div class="col-12 col-md-5 pl-md-5">
          <img src="img/petal.svg" class="img-fluid" width="40" alt="">
                <h2 class="my-3">Our Awesome Services Are Just Click Awaye</h2>

      <p  class="py-4">Our  services comprise of meal plans that make it easy for you to live your best life and live healthy. We can cook the meals and deliver to your doorstep.</p>
  
      <ul class="list-inline">
        <li class="list-inline-item mb-3">
          <a href="#"><img src="img/applestore.svg"  width="130"  alt=""></a>
        </li>
        <li class="list-inline-item mb-3">
          <a href="#"><img src="img/googleplay.svg"  width="130"    alt=""></a>
        </li>
      </ul>

            </div>


            <div class="col-12 fotphone">
              <img src="img/phonescreen1.png" class="img-fluid welcomephone" alt="">
            </div>

          
       </div>
     </div>
  </section>
<!-- Our awesome services are just click away -->

<!-- footer includes -->
  @include("frontend.includes.footer")
  @include("frontend.includes.footer-links")
 <!-- footer includes -->

  </body>
</html>