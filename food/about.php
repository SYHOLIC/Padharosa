<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
   body {
    background-image: url('images/italian-food-background.webp'); /* Change the path to your image */
    background-size:cover; /* Ensure the image covers the entire viewport */
    background-position: center; /* Center the image */

}

</style>
</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to PADHAROSA! We pride ourselves on providing a unique dining experience that combines exceptional cuisine, impeccable service, and a warm and inviting
             atmosphere. Our menu features a wide variety of dishes made with the freshest and highest quality ingredients, sourced locally whenever possible. Our talented chefs are passionate about creating 
             delicious and visually stunning dishes that will tantalize your taste buds and leave you wanting more. From classic favorites to innovative new creations, our menu has something for everyone
             . We believe that exceptional service is just as important as the food we serve, and our friendly and knowledgeable staff are dedicated to ensuring that every guest has a memorable and enjoyable dining experience.
              Whether you're looking for a romantic dinner for two, a family gathering, or a business lunch, we are here to provide you with a dining experience that
             exceeds your expectations. We invite you to join us at our restaurant and experience the flavors, aromas, and ambiance that make us a unique and beloved dining destination</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         
      </div>

   </div>

</section>

<!-- steps section ends -->





















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>



</script>

</body>
</html>