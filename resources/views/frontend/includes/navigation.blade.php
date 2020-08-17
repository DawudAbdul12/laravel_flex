



<nav class=" d-none d-md-none d-lg-block d-xl-block">
 <div class="container-fluid container-who py-3">
    <div class="row">
       <div class="col-12 col-md-5">
       <ul class="nav ">
          <li class="nav-item px-2">
            <a class="nav-link navbar-wholsome active" href="/">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link navbar-wholsome" href="/about-us">About Us</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link navbar-wholsome" href="/our-services">Our Services</a>
          </li>
        </ul>
       </div>

       <div class="col-12 col-md-2 text-center">
          <a href="/"><img src="{{ asset('img/wholesomelogo.svg')}}" class="navbar-band" alt="" width="70"></a>
       </div>

       <div class="col-12 col-md-5">
       <ul class="nav justify-content-end">
          <li class="nav-item px-2">
            <a class="nav-link navbar-wholsome " href="/testimonials">Testimonials</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link navbar-wholsome" href="/how-it-works">How it works</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link navbar-wholsome" href="/blog">Blog</a>
          </li>
          <li class="nav-item px-2">
            <!-- <a class="nav-link navbar-wholsome " href="#" >Contact Us</a> -->
            <a href="/contact-us" class="btn btn-success">Contact Us</a>
          </li>
        </ul>
       </div>
    </div>
 </div>
</nav>





<nav class="mobinav fixed-top d-sm-block d-lg-none ">
<div class="container">
<div id="myNavwhole" class="overlaywhole">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavwhole()">&times;</a>
  <div class="overlay-contentwhole">
    <p> <a href="/index">Home</a></p>
    <p> <a href="/about-us">About Us</a></p>
    <p> <a href="/our-services">Our Services</a></p>
    <p><a href="/testimonials">Testimonials</a></p>
    <p>   <a href="/how-it-works">How It Works</a></p>
    <p>  <a href="/blog">Blog</a></p>
    <p> <a href="/contact-us" class="btn btn-success">Contact Us</a></p>  
  </div>
</div>
  <div class="row centerit">
    <div class="col-8">
    <a href="/"><img src="{{ asset('img/wholesomelogo.svg')}}" class="navbar-band" alt="" width="70"></a>
    </div>
    
    <div class="col-4 text-right">
<span style="cursor:pointer" onclick="openNavwhole()">
<img src="{{ asset('img/navmenuicon.svg')}}" width="27" alt="MENU">
</span>
    </div>
  </div>
</div>
</nav>




