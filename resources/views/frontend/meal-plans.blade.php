<!doctype html>
<html lang="en">
  <head>
    <title>Wholesome Craft |  Meal Plans </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

   

   <!-- include navigation -->
   @include("frontend.includes.nav-links")
   @include("frontend.includes.navigation")


   <style>
   .page-section {
  
}

.navigation {
    position: fixed;
    background-color: rgba(153, 153, 153, 0);
    color: #fff;
    top: 16rem;
    left: 0;
}
.navigation__link {
    display: block;
    color: #464646;
    text-decoration: none;
    padding: 20px 15px;
    font-weight: 300;
}

.navigation__link:hover {
  color: green;
  font-weight: 400;
}
.navigation__link.active {
  color: green;
  font-weight: 400;
}
</style>
  <!-- include navigation -->


<section class="topfloat spacetop">
   <div class="container-fluid container-who2">
     <div class="row centerit mt-5">
      

       <div class="col-12 col-md-5 mt-5 order-2 order-md-1 ">
         <h1 class="mb-3">Find The Perfect <br>
Meal Plan For You.  </h1>
        <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit maecenas convallis.</p>

        <a href="#" class="btn btn-round shadow">
              <img src="img/arrowdown2.svg" alt="">
          </a>
       </div>

       <div class="col-12 col-md-7 mt-5  mt-md-0 order-1 order-md-2">
        <img src="img/mealplan.png" class="img-fluid w-100 shadow rounded-circle " alt="">
       </div>
     </div>
   </div>
</section>








<section class="glogreen3">
  <div class="container">
    <div class="row">

    <div class="col-12 col-lg-2 d-none d-md-block d-lg-block d-xl-block">

  
    <nav class="navigation ml-4" id="mainNav">
			<a class="navigation__link" href="#1"> <span class="mr-3"><i class="fa fa-circle fa-lg" aria-hidden="true"></i></span> Wholesome Slim</a>
			<a class="navigation__link push1mp" href="#2"><span class="mr-3"><i class="fa fa-circle fa-lg" aria-hidden="true"></i></span> Tone Up</a>
			<a class="navigation__link push2mp" href="#3"><span class="mr-3"><i class="fa fa-circle fa-lg" aria-hidden="true"></i></span> Lifestyle</a>
			<a class="navigation__link push2mp" href="#4"><span class="mr-3"><i class="fa fa-circle fa-lg" aria-hidden="true"></i></span> Wholesome Gain</a>
				<a class="navigation__link push1mp" href="#5"><span class="mr-3"><i class="fa fa-circle fa-lg" aria-hidden="true"></i></span> Wholesome Kids</a>
				<a class="navigation__link" href="#6"><span class="mr-3"><i class="fa fa-circle fa-lg" aria-hidden="true"></i></span> Whole-Vegan</a>
</nav>
        

    
    </div>


      <div class="col-12  col-lg-10">

      <?php require_once("includes/meal-plans/wholesome-slim.php");?>

      <?php require_once("includes/meal-plans/tone-up.php");?>

      <?php require_once("includes/meal-plans/lifestyle.php");?>

      <?php require_once("includes/meal-plans/wholesome-gain.php");?>

      <?php require_once("includes/meal-plans/wholesome-kids.php");?>

      <?php require_once("includes/meal-plans/whole-vegan.php");?>


      </div>
    </div>
  </div>
</section>



<!-- Our awesome services are just click away -->
<section class="golpad  bg-white">
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
        <li class="list-inline-item">
          <a href="#"><img src="img/applestore.svg"  width="130"  alt=""></a>
        </li>
        <li class="list-inline-item">
          <a href="#"><img src="img/googleplay.svg"  width="130"    alt=""></a>
        </li>
      </ul>

            </div>


            <div class="col-12 fotphone">
              <img src="img/phonescreen1.png" class="img-fluid" alt="">
            </div>

          
       </div>
     </div>
  </section>
<!-- Our awesome services are just click away -->



<!-- footer includes -->
@include("frontend.includes.footer")
@include("frontend.includes.footer-links")
 <!-- footer includes -->

 <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


 <script>
  $(document).ready(function() {
		$('a[href*=#]').bind('click', function(e) {
				e.preventDefault(); // prevent hard jump, the default behavior

				var target = $(this).attr("href"); // Set the target as variable

				// perform animated scrolling by getting top-position of target-element and set it as scroll target
				$('html, body').stop().animate({
						scrollTop: $(target).offset().top
				}, 600, function() {
						location.hash = target; //attach the hash (#jumptarget) to the pageurl
				});

				return false;
		});
});

$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();

		// Show/hide menu on scroll
		if (scrollDistance >= 550 ) {
			$('.navigation').fadeIn("fast");
		} else {
			$('.navigation').fadeOut("fast");
		}
	
		// Assign active class to nav links while scolling
		$('.page-section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
						$('.navigation a.active').removeClass('active');
						$('.navigation a').eq(i).addClass('active');
				}
		});
}).scroll();
 </script>

  </body>
</html>