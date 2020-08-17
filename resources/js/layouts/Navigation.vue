<template>

  <div>
    <nav class=" d-none d-md-block d-lg-block d-xl-block">
      <div class="container-fluid container-who py-3">
          <div class="row">
            <div class="col-12 col-md-5">
                <ul class="nav ">
                    <li class="nav-item px-2">
                      <router-link tag="a" to="/" class="nav-link navbar-wholsome">Home</router-link>
                      <!-- <a class="nav-link navbar-wholsome active" href="index.php">Home</a> -->
                    </li>
                    <li class="nav-item px-2">
                      <router-link tag="a" to="/about-us" class="nav-link navbar-wholsome active">About Us</router-link>
                    </li>
                    <li class="nav-item px-2">
                      <router-link tag="a" to="/" class="nav-link navbar-wholsome active">Our Services</router-link>
                    </li>
                  </ul>
            </div>

            <div class="col-12 col-md-2 text-center">
                <router-link tag="a" to="/"><img src="img/wholesomelogo.svg" class="navbar-band" alt="" width="70"></router-link>
            </div>

            <div class="col-12 col-md-5">
                <ul class="nav justify-content-end">
                    <li class="nav-item px-2">
                      <router-link tag="a" to="/testimonials" class="nav-link navbar-wholsome active">Testimonials</router-link>
                    </li>
                    <li class="nav-item px-2">
                      <router-link tag="a" to="/how-it-works" class="nav-link navbar-wholsome active">How it works</router-link>
                    </li>
                    <li class="nav-item px-2">
                      <router-link tag="a" to="/blog" class="nav-link navbar-wholsome active">Blog</router-link>
                    </li>
                    <li class="nav-item px-2">
                      <router-link tag="a" to="/contact-us" class="btn btn-success">Contact Us</router-link>
                      <!-- <a class="nav-link navbar-wholsome " href="#" >Contact Us</a> -->
                      <!-- <a href="contact-us.php" class="btn btn-success">Contact Us</a> -->
                    </li>
                </ul>
            </div>
          </div>
      </div>
    </nav>
    <nav class="mobinav fixed-top d-sm-block d-md-none ">
      <div class="container">
        <div id="myNavwhole" class="overlaywhole">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNavwhole()">&times;</a>
            <div class="overlay-contentwhole">
              <p><router-link tag="a" to="/" onclick="closeNavwhole()" >Home</router-link></p>
              <p><router-link tag="a" to="/about-us" onclick="closeNavwhole()" >About Us</router-link></p>
              <p><router-link tag="a" to="/" onclick="closeNavwhole()" >Our Services</router-link></p>
              <p><router-link tag="a" to="/testimonials" onclick="closeNavwhole()" >Testimonials</router-link></p>
              <p><router-link tag="a" to="/how-it-works" onclick="closeNavwhole()" >How It Works</router-link></p>
              <p><router-link tag="a" to="/blog" onclick="closeNavwhole()" >Blog</router-link></p>
              <p><router-link tag="a" to="/contact-us" onclick="closeNavwhole()" class="btn btn-success" >Contact Us</router-link></p>
              
            </div>
        </div>
        <div class="row centerit">
          <div class="col-8">
            <router-link tag="a" to="/" ><img src="img/wholesomelogo.svg" class="navbar-band" alt="" width="70"></router-link>
          </div>
          <div class="col-4 text-right">
            <span style="cursor:pointer" onclick="openNavwhole()">
            <img src="img/navmenuicon.svg" width="27" alt="MENU">
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>

</template>