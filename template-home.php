<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="home-page-hero-parent">
<div class="green-background"></div>

<div class="view home-page-hero container" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->



  <!-- Content -->
 
  <!-- Content -->




</div>
<!-- Full Page Intro --> 


<div class="container text-center pt-5 pb-5">

<h1>A proper London pub, Marylebone W1</h1>

  </div>




<main>
  
    <section class="container pt-5">
    <div class="row">

      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pub_1.jpg" alt="" class="img-fluid">
        <div class="text-box col-10 offset-1 d-none d-md-block">
        <h4>Upstairs at Gunmakers</h4>
        <h3>Modern light rooms in the heart of central West London</h3>
            <a href="rooms"><button type="button" class="btn btn-outline-primary mt-3" data-mdb-ripple-color="dark">
 Take a look
</button></a>
          </div>   
      </div>
      
      <div class="offset-md-1 col-md-7  ">
          <div class="text-box col-10 offset-1 col-md-8 offset-md-2">
            <h4>Pub, Events Space & Guesthouse</h4>
            <h3>Enjoy a warm welcome, great ales and classic pub food</h3>
            <a href="book"><button type="button" class="btn btn-outline-primary mt-3" data-mdb-ripple-color="dark">
 Book a Table
</button></a>
          </div>    
          <div class="col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel.jpg" alt="" class="img-fluid">
           
            </div>
      </div> 
      <div class="text-box col-10 offset-1 d-block d-md-none">
        <h4>Upstairs at Gunmakers</h4>
        <h3>Modern light rooms in the heart of central West London</h3>
            <a href="rooms"><button type="button" class="btn btn-outline-primary mt-3" data-mdb-ripple-color="dark">
 Take a look
</button></a>
          </div>   
      
        
  </div>
  </section>


  <section class="green-section">

  <div class="container weekly-specials pt-5 pb-5">
  <header class="section-header d-flex justify-content-center">
  <h2>Weekly Specials</h2>
  </header>
    <div class="row">
      <a href="burger" class="special-hover col-10 offset-1 offset-md-0 col-md-6 mb-5">
        <h6 class="text-center pb-2">THURSDAY</h6>
        <div class="mb-3" style="height: 500px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/beerBurger.png'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
        <h4 class="text-center">Beef, chicken or plant based burgers</h4>
     
      </a>
   

      <a href="fish" class="special-hover col-10 offset-1 offset-md-0 col-md-6 mb-5">
      <h6 class="text-center pb-2">FRIDAY</h6>
        <div class="mb-3" style="height: 500px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/fish.png'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>     
        <h4 class="text-center">Traditional British Friday classic</h4>
      </a>
    

   

   
    </div>

  </div>
</section>
<section>
<div class="container">
<div class="row">
  <div class="text-box col-sm-12  col-md-7 offset-md-0">
 
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero06.jpg" alt="" class="img-fluid">

 

  </div>
  <div class="text-box col-sm-10 offset-sm-1 col-md-4 align-self-center">
    <h4>Host your event with us</h4>
    <h3>Elegent events space with private entrance, bar and kitchen</h3>
    <a href="event-space"><button type="button" class="btn btn-outline-primary mt-3" data-mdb-ripple-color="dark">
 Take a look
</button></a>
  </div>

</div>




 </section>


  
</main><!-- #main -->



<?php get_footer(); ?>