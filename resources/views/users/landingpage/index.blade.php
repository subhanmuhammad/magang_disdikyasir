<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'http://localhost/websekolah_adminsekolah_master/api/data_kejuruan');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  $result = json_decode($result, true);
  // dd($result);
?>

<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'http://localhost/websekolah_adminsekolah_master/api/berita');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result2 = curl_exec($curl);
  curl_close($curl);

  $result2 = json_decode($result2, true);
  // dd($result2);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Website Sekolah SMKN 1 Palu</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?=url('/')?>/public/assets/img/logo/logo1.png" rel="icon" />
    <link href="<?=url('/')?>/public/assets/img/logo/favicon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?=url('/')?>/public/assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <img src="<?=url('/')?>/public/assets/img/logo/logosekolah.png" alt="" />
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="<?=url('/')?>/admin/landingpage">Beranda</a></li>
            <li class="dropdown">
              <a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/sejarah">Sejarah Singkat</a></li>
                <li><a href="/visimisi">Visi Misi</a></li>
                <li><a href="<?=url('/')?>/admin/ekskul">Ekskul</a></li>
                <li><a href="/profilpimpinan">Profil Pimpinan</a></li>
                <li><a href="<?=url('/')?>/admin/sarpras">Sarpras</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="/#testimonials">Jurusan</a></li>
            <li class="dropdown">
              <a href="#"><span>GTK dan Siswa</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/gurustaff">Guru dan TU</a></li>
                <li><a href="/siswa">Siswa</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/#recent-blog-posts">Berita</a></li>
                <li><a href="/#values1">Event</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="https://pusdapendik.disdikbud.sultengprov.go.id">Pusdapendik</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/sambutan/foto.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="caption">SELAMAT DATANG<br><b>DI SMK NEGERI 1 PALU</b></h1>
            <p>"Kamu harus tetap bersekolah. Kamu harus. Kamu harus kuliah. Kamu harus mendapatkan gelarmu. Karena itu satu hal yang tidak bisa diambil orang darimu adalah pendidikanmu. Dan itu sepadan dengan investasi."</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/sambutan/foto.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="caption">SELAMAT DATANG<br><b>DI SMK NEGERI 1 PALU</b></h1>
            <p>"Kamu harus tetap bersekolah. Kamu harus. Kamu harus kuliah. Kamu harus mendapatkan gelarmu. Karena itu satu hal yang tidak bisa diambil orang darimu adalah pendidikanmu. Dan itu sepadan dengan investasi."</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/sambutan/foto.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="caption">SELAMAT DATANG<br><b>DI SMK NEGERI 1 PALU</b></h1>
            <p>"Kamu harus tetap bersekolah. Kamu harus. Kamu harus kuliah. Kamu harus mendapatkan gelarmu. Karena itu satu hal yang tidak bisa diambil orang darimu adalah pendidikanmu. Dan itu sepadan dengan investasi."</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Hero -->

    <main id="main">
     
    <!-- Sambutan Kepala Sekolah -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Sambutan</h2>
          <p>Kepala Sekolah</p>
        </header>
        <div class="row">
          <div class="col-md-2" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="<?=url('/')?>/public/assets/img/guru-staff/1.jpg" class="img-fluid" alt="" />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-whatsapp"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h6>Aan Hayati, S.Pd., MM.</h6>
                  <span>Kepala Sekolah SMK NEGERI 1 PALU</span>
                </div>
              </div>
          </div>
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="100">
            <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
              <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
              <p class="mb-0 mt-2 font-italic justify">"Era globalisasi dengan segala implikasinya menjadi salah satu pemicu cepatnya perubahan yang terjadi pada berbagai aspek kehidupan masyarakat, dan bila tidak ada upaya sungguh-sungguh untuk mengantisipasinya maka hal tersebut akan menjadi maslah yang sangat serius. Dalam hal ini dunia pendidikan mempunyai tanggung jawab yang besar, terutama dalam menyiapkan sumber daya manusia yang tangguh sehingga mampu hidup selaras didalam perubahan itu sendiri. Pendidikan merupakan investasi jangka panjang yang hasilnya tidak dapat dilihat dan dirasakan secara instan, sehingga sekolah sebagai ujung tombak dilapangan harus memiliki arah pengembangan jangka panjang dengan tahapan pencapaiannya yang jelas dan tetap mengakomodir tuntutan permasalahan faktual kekinian yang ada di masyarakat"</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <!-- Sambutan Kepala Sekolah -->

    <!-- ======= Jurusan ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Jurusan</h2>
          <p>SMK NEGERI 1 PALU</p>
        </header>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            @foreach ($result as $row)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="<?= $row["link"]; ?>" class="img-fluid" alt="" />
                  <h3><a href="" class=""><?= $row["nama_jurusan"]; ?></a></h3>
                  <p><?= $row["keterangan"]; ?></p>
                </div>
              </div>
            </div>
            @endforeach
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Jurusan -->

      <!-- SPAB -->
<!--       <section id="values" class="values">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Satuan Pendidikan aman bencana</h2>
            <p>SMK NEGERI 1 PALU</p>
          </header>
          <div class="row">

            <div class="col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <img src="<?=url('/')?>/public/assets/img/spab/vaksin3.png" class="img-fluid" alt="">
                <h3>Data Covid</h3>
                <a href="<?=url('/')?>/admin/data_covid">" class="stretched-link"></a>
                <p>Menampilkan Data Covid-19</p>
              </div>
            </div>
  
            <div class="col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="<?=url('/')?>/public/assets/img/spab/sekolah.png" class="img-fluid" alt="">
                <h3>Sekolah Tanggap Bencana</h3>
                <a href="" class="stretched-link"></a>
                <p>Menampilkan Informasi mengenai tanggap bencana</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- SPAB -->

      <!--Berita Terbaru-->
      <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Info</h2>
            <p>BERITA TERBARU</p>
          </header>
          <div class="row">
            @foreach ($result2 as $row)
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
              <div class="post-box">
                <div class="post-img"><img src="<?= $row["link"]; ?>" class="img-fluid" alt="" /></div>
                <span class="post-date">Selasa, 8 Maret 2022</span>
                <h6 class="post-title"><?= $row["judul"]; ?></h6>
                <a href="" class="stretched-link" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["id"]; ?>"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

      <!-- Modal -->
      @foreach ($result2 as $row)
      <div class="modal fade" id="exampleModal<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><b><?= $row["judul"]; ?></b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                  <img src="<?= $row["link"]; ?>" class="img-fluid border-radius" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="justify">
                    <?= $row["deskripsi"]; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      @endforeach
      <!--End Berita Terbaru-->

      <!-- Zonasi -->
      <section id="features" class="features">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Zonasi</h2>
            <p>SMK NEGERI 1 PALU</p>
          </header>
            <div class="row feature-icons" data-aos="fade-up">
              <div class="col-xl-6 text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="<?=url('/')?>/public/assets/img/zonasi/zonasi.png" class="img-fluid p-4" alt="">
              </div>
              <div class="col-xl-6 d-flex content">
                <div class="row align-self-center gy-4">
                  <div class="col-md-6 icon-box" data-aos="fade-up">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. Masjid Raya</h4>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. Rajawali</h4>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. Kesehatan</h4>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. Wolter Monginsidi</h4>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. Bali</h4>
                    </div>
                  </div>
  
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. R.A. Kartini</h4>
                    </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="600">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. Tj. Santigi</h4>
                    </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="700">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>Jl. Tj. Seng</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>
      <!-- Zonasi -->

      <!--Agenda-->
      <section id="values1" class="values1">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Jadwal</h2>
          <p>INFO KEGIATAN</p>
        </header>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-margin">
              <div class="card-header no-border">
                <h5 class="card-title">SENIN</h5>
              </div>
              <div class="card-body pt-0">
                <div class="widget-49">
                  <div class="widget-49-title-wrapper">
                    <div class="widget-49-date-primary">
                      <span class="widget-49-date-day">09</span>
                      <span class="widget-49-date-month">apr</span>
                    </div>
                    <div class="widget-49-meeting-info">
                      <span class="widget-49-pro-title">PRO-08235 DeskOpe. Website</span>
                      <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                    </div>
                  </div>
                  <ol class="widget-49-meeting-points">
                    <li class="widget-49-meeting-item"><span>Expand module is removed</span></li>
                    <li class="widget-49-meeting-item"><span>Data migration is in scope</span></li>
                    <li class="widget-49-meeting-item"><span>Session timeout increase to 30 minutes</span></li>
                  </ol>
                  <div class="widget-49-meeting-action">
                    <a href="#" class="btn btn-sm btn-flash-border-primary">View All</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card card-margin">
              <div class="card-header no-border">
                <h5 class="card-title">SELASA</h5>
              </div>
              <div class="card-body pt-0">
                <div class="widget-49">
                  <div class="widget-49-title-wrapper">
                    <div class="widget-49-date-warning">
                      <span class="widget-49-date-day">13</span>
                      <span class="widget-49-date-month">apr</span>
                    </div>
                    <div class="widget-49-meeting-info">
                      <span class="widget-49-pro-title">PRO-08235 Lexa Corp.</span>
                      <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                    </div>
                  </div>
                  <ol class="widget-49-meeting-points">
                    <li class="widget-49-meeting-item"><span>Scheming module is removed</span></li>
                    <li class="widget-49-meeting-item"><span>App design contract confirmed</span></li>
                    <li class="widget-49-meeting-item"><span>Client request to send invoice</span></li>
                  </ol>
                  <div class="widget-49-meeting-action">
                    <a href="#" class="btn btn-sm btn-flash-border-warning">View All</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card card-margin">
              <div class="card-header no-border">
                <h5 class="card-title">RABU</h5>
              </div>
              <div class="card-body pt-0">
                <div class="widget-49">
                  <div class="widget-49-title-wrapper">
                    <div class="widget-49-date-success">
                      <span class="widget-49-date-day">22</span>
                      <span class="widget-49-date-month">apr</span>
                    </div>
                    <div class="widget-49-meeting-info">
                      <span class="widget-49-pro-title">PRO-027865 Opera module</span>
                      <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                    </div>
                  </div>
                  <ol class="widget-49-meeting-points">
                    <li class="widget-49-meeting-item"><span>Scope is revised and updated</span></li>
                    <li class="widget-49-meeting-item"><span>Time-line has been changed</span></li>
                    <li class="widget-49-meeting-item"><span>Received approval to start wire-frame</span></li>
                  </ol>
                  <div class="widget-49-meeting-action">
                    <a href="#" class="btn btn-sm btn-flash-border-success">View All</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
      <!--End Agenda-->

      <!-- End Portfolio Section -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Galeri</h2>
            <p>SMK NEGERI 1 PALU</p>
          </header>
  
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/1.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/2.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/3.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/4.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/5.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/6.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/7.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/8.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/galeri/9.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/10.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/11.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap border-radius">
                <img src="assets/img/galeri/12.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                  <img src="<?=url('/')?>/public/assets/img/logo/logosekolah.png" alt="" />
                </a>
                <p class="justify">"Kamu harus tetap bersekolah. Kamu harus. Kamu harus kuliah. Kamu harus mendapatkan gelarmu. Karena itu satu hal yang tidak bisa diambil orang darimu adalah pendidikanmu. Dan itu sepadan dengan investasi."</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                </div>
              </div>

              <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Profil</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Jurusan</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">GTK dan Siswa</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Informasi</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Pusdapendik</a></li>
                </ul>
              </div>

              <div class="col-lg-2 col-6 footer-links">
                <h4>Jurusan</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Bisnis Daring dan Pemasaran</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Otomatisasi dan Tata Kelola Perkantoran</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Rekayasa Perangkat Lunak</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Teknik Komputer dan Jaringan</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Akuntansi dan Keuangan Lembaga</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Hubungi Kami</h4>
                <p>
                  Alamat: Jl. R.A. Kartini No.14, Lolu Sel.<br />
                  Kec. Palu Tim<br />
                  Kota Palu <br />
                  Sulawesi Tengah 94112<br />
                  <strong>Phone:</strong> +1 5589 55488 55<br />
                  <strong>Email:</strong> info@example.com<br />
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Dinas Pendidikan dan Kebudayaan Sulawesi Tengah</span></strong
            >. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">KailiNusantara</a>
          </div>
        </div>
      </footer>
      <!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="<?=url('/')?>/public/assets/vendor/purecounter/purecounter.js"></script>
      <script src="<?=url('/')?>/public/assets/vendor/aos/aos.js"></script>
      <script src="<?=url('/')?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?=url('/')?>/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="<?=url('/')?>/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="<?=url('/')?>/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="<?=url('/')?>/public/assets/vendor/php-email-form/validate.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      <!-- Template Main JS File -->
      <script src="<?=url('/')?>/public/assets/js/main.js"></script>
    </main>
  </body>
</html>
