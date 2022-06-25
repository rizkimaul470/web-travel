<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="icon" type="image/png" href="images/icon2.png">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">Maul travel.</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="package.php">Package</a>
         <a href="book.php">Booking</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- home section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide1.jpg) no-repeat">
               <div class="content">
                  <span>Explore, Discover, Travel</span>
                  <h3>Jelajahi Destinasi Wisata Impian Anda</h3>
                  <a href="package.php" class="btn">Pesan Sekarang</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide2.jpg) no-repeat">
               <div class="content">
                  <span>Explore, Discover, Travel</span>
                  <h3>Temukan Tempat Baru</h3>
                  <a href="package.php" class="btn">Pesan Sekarang</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide3.jpg) no-repeat">
               <div class="content">
                  <span>Explore, Discover, Travel</span>
                  <h3>Buat Liburan Anda Menyenangkan</h3>
                  <a href="package.php" class="btn">Pesan Sekarang</a>
               </div>
            </div>
         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </section>

   <!-- home section ends -->

   <!-- home about section starts  -->

   <section class="home-about">

      <div class="image">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/jts_SxPV7kQ?start=83" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="home-about content">
         <h3>Tentang</h3>
         <p>Jelajahi destinasi wisata di Riau dengan mudah. Hanya disini !!</p>
         <a href="about.php" class="btn">Lebih Lanjut</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- home offer section starts  -->

   <section class="home-offer">
      <div class="content">
         <h3>Diskon 50%</h3>
         <p>Untuk pengunjung anak-anak yang berusa dibawah 12 tahun</p>
         <a href="book.php" class="btn">pesan sekarang</a>
      </div>
   </section>

   <!-- home offer section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>Contact</h3>
            <a href="#"> <i class="fas fa-phone"></i> +628-2286-9504-87 </a>
            <a href="#"> <i class="fas fa-envelope"></i> maulanarizki587@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Pekanbaru, Riau </a>
         </div>

         <div class="box">
            <h3>Follow Me</h3>
            <a href="https://instagram.com/rizki____maul"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/in/muhammad-rizki-maulana-901544237"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> Created by <span>Muhammad Rizki Maulana</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>