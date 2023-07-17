<!DOCTYPE html>
<html lang="en">
<head>

     <title>apa aja dlu</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="style">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}">
     <link rel="stylesheet" href="{!! asset("css/font-awesome.min.css")!!}>
     <link rel="stylesheet" href="{!! asset('css/animate.css')!!}>
     <link rel="stylesheet" href="{!! asset ('css/owl.carousel.css')!!}>
     <link rel="stylesheet" href={!! asset("css/owl.theme.default.min.css")!!}>

     <!-- MAIN CSS -->
     <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     {{-- <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section> --}}


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Selamat datang di Klik Kesehatan</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     @include('layouts.nav');


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Ciptakan Kehidupan yang Sehat</h3>
                                             <h2>Come check your health now</h2>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Ketahui Dokternya</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Di dalam tubuh yang sehat terdapat jiwa yang kuat</h3>
                                             <h2>Healthy is Expensive</h2>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Informasi lanjut</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Sehat pikiran berawal dari sehat jasmani</h3>
                                             <h2>Keep Well</h2>
                                             <a href="#poliklinik" class="section-btn btn btn-default btn-blue smoothScroll">Informasi lanjut</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Klik Kesehatan</h1>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Rumah Sakit Islam Surabaya menyediakan berbagai layanan kesahatan dan perawatan secara intensif melalui  rawat inap, rawat jalan, UGD, IGD.</p>
                                   <p>Untuk informasi lebih lanjut silahkan hubungi contact yang tertera pada website kami.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/logo.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Rumah Sakit Islam Surabaya</h3>
                                        <p>Klik Kesehatan</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/doc1.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>IU</h3>
                                        <p>Dokter Bedah</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 081231451661 </p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">iucantik00@gmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/doc2.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Jaehyun</h3>
                                        <p>Dokter Kandungan</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i>08235177581</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">jaehyun@gmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-facebook-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/doc3.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Song Hye kyo</h3>
                                        <p>Dokter Umum</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i>081217992625</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">songhyekyo@gmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-twitter"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="poliklinik" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>POLIKLINIK</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.php">
                                   <img src="images/POLI UMUM.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <h3><a href="news-detail.php">Tentang Poli Umum</a></h3>
                                   <p>Poli umum merupakan salah satu dari jenis layanan di Puskesmas  yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.</p>
                                   <div class="author">
                                        <img src="images/doc3.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Song Hye Kyo</h5>
                                             <p>Dokter Umum</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.php">
                                   <img src="images/POLI JANTUNG.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <h3><a href="news-detail.php">Pengenalan Poli Jantung</a></h3>
                                   <p>Poliklinik jantung dan pembuluh darah adalah klinik yang menangani hal-hal yang berkaitan dengan jantung dan pembuluh darah, atau kardiovaskuler, Orang biasanya akan datang ke Poliklinik Jantung & Pembuluh darah, karena berkaitan dengan pencegahan, diagnosis, dan pengobatan berbagai penyakit kardiovaskular, mulai dari tekanan darah tinggi hingga serangan jantung.</p>
                                   <div class="author">
                                        <img src="images/doc1.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>IU </h5>
                                             <p>Dokter Bedah</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.php">
                                   <img src="images/POLI ANAK.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <h3><a href="news-detail.php">Tentang Poli Anak</a></h3>
                                   <p>Poli klinik anak adalah layanan kesehatan untuk anak sejak dia dilahirkan hingga berusia 18 tahun. Tidak hanya berfokus pada aspek penunjang kesehatan yang dibutuhkan anak, namun juga gangguan kesehatan pada anak, penyakit, kelainan, alergi dan yang lainnya yang dapat mengganggu tumbuh kembang anak.</p>
                                   <div class="author">
                                        <img src="images/doc2.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jaehyun</h5>
                                             <p>Dokter Kandungan dan Anak</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/doc4.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action=#"<?php echo $_SERVER["PHP_SELF"];?>">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Buat janji secara online</h2>
                                   <p>~ Silahkan isi data diri dibawah ini ~</p>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="name" name="nama" placeholder="Nama lengkap">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Tanggal</label>
                                        <input type="date" name="tanggal_lahir" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Spesialis</label>
                                        <select class="form-control">
                                             <option>Dokter Umum</option>
                                             <option>Dokter Kandungan</option>
                                             <option>Dokter Bedah</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Nomor Telephone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nomor">
                                        <label for="Message">Ceritakan Keluhan Singkat Anda</label>
                                        <textarea class="form-control" rows="5" id="message" name="Keluhan" placeholder="pesan"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="tambah">Submit</button>
                                        <a href="index.php">
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>
     <!-- <?php

     //      // Check If form submitted, insert form data into users table.
     //        if(isset($_POST['tambah'])) {
     //        $NIK = $_POST['nik'];
     //        $Nama = $_POST['nama'];
     //        $Tanggal_Lahir = $_POST['tanggal_lahir'];
     //        $Telp= $_POST['phone'];
     //        $Gmail= $_POST['email'];
     //        $Keluhan = $_POST['Keluhan'];


     //        // include database connection file
     //        include_once("../config.php");

     //        // Insert user data into table
     //         $result = mysqli_query($koneksi, "INSERT INTO `pasien` (`NIK`, `Nama`, `Tanggal_Lahir`, `ID_Jenis_Kelamin`, `Telp`,`Gmail`, `Alamat`, `Keluhan`,`Status`) VALUES('$NIK','$Nama','$Tanggal_Lahir','01','$Telp','$Gmail','aaaaa','$Keluhan','Blum Disetujui')");

     //      }
     // ?>

     <?php
    //  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //  $servername = "localhost";
    //  $username = "root";
    //  $password = "";
    //  $dbname = "rs_segar";

    //  // Create connection
    //  $conn = new mysqli($servername, $username, $password, $dbname);
    //  // Check connection
    //  if ($conn->connect_error) {
    //       die("Connection failed: " . $conn->connect_error);
    //  }

    //  $sql = "INSERT INTO pasien (NIK, Nama, Tanggal_Lahir, ID_Jenis_Kelamin, Telp, Gmail, Alamat, Keluhan, Status)
    //  VALUES ('".$_POST["nik"]."', '".$_POST["nama"]."', '".$_POST["tanggal_lahir"]."', '01', '".$_POST["phone"]."', '".$_POST["email"]."','-', '".$_POST["Keluhan"]."', 'Blum Disetujui')";

    //  if ($conn->query($sql) === TRUE) {
    //       echo "New record created successfully";
    //  } else {
    //       echo "Error: " . $sql . "<br>" . $conn->error;
    //  }

    //  $conn->close();
    //  }
     ?> -->

     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7914.856826681047!2d112.73506113068818!3d-7.305671904146175!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d5564dcc8032c68!2sRumah%20Sakit%20Islam%20Surabaya!5e0!3m2!1sid!2sid!4v1672803793524!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Alamat : Jl. Raya Jemursari No.51-57, Jemur Wonosari, Kec. Wonocolo, Kota SBY, Jawa Timur 60237, Indonesia</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>(031)8471877</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">rsislamsurabaya@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">ABOUT</h4>
                              <div class="latest-stories">
                                        <span>Kita ingin merubah image masyarakat bahwa RS Islam Surabaya
                                             dulu yang dikelola secara konvensional bertransformasi menjadi rumah sakit islam yang modern dengan peralatan dan sarana prasana yang sesuai dengan standar akreditasi</span>
                                   </div>
                              </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Senin - Jumat <span>06:00 WIB - 22:00 WIB</span></p>
                                   <p>Sabtu & Minggu <span>09:00 WIB - 20:00 WIB</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2023 Kelompok 3 </p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
