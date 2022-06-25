<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking</title>
   <link rel="icon" type="image/png" href="images/icon3.png">

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

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>Pemesanan</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">Pesan Liburan Sekarang!</h1>

      <!-- <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>No Identitas (KTP/Paspor) :</span>
               <input type="text" placeholder="masukkan Nomor Identitas" name="no_id">
            </div>
            <div class="inputBox">
               <input type="text" placeholder="masukkan nama lengkap" name="nama_lengkap">
            </div>
            <div class="inputBox">
               <span>No Hp :</span>
               <input type="number" placeholder="masukkan nomor hp" name="no_hp">
            </div>
            <div class="inputBox">
               <span>Tempat Wisata :</span>
               <input type="text" placeholder="tujuan destinasi" name="tujuan">
            </div>
            <div class="inputBox">
               <span>Pengunjung Dewasa :</span>
               <input type="number" placeholder="jumlah pengunjung dewasa" name="adult">
            </div>
            <div class="inputBox">
               <span>Pengunjung Anak-anak :</span>
               <input type="number" placeholder="jumlah pengunjung anak-anak" name="adult">
            </div>
            <div class="inputBox">
               <span>Tanggal Kunjungan :</span>
               <input type="date" placeholder="tanggal kunjungan" name="date">
            </div>
         </div>

         <input type="button" value="Hitung Total Bayar" class="btn" onclick="hitung()">
         <input type="submit" value="submit" class="btn" name="send">
         <input type="button" value="Cancel" class="btn">
      </form> -->
      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>Nama Lengkap:</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>Email :</span>
               <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>No Hp :</span>
               <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
               <span>Domisili :</span>
               <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
               <span>Tujuan Destinasi :</span>
               <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
               <span>Jumlah Pengunjung :</span>
               <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
               <span>Keberangkatan :</span>
               <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
               <span>Kepulangan :</span>
               <input type="date" name="leaving">
            </div>
         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>
   </section>
   <!-- booking section ends -->

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