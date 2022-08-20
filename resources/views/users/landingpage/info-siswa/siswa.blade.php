<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'http://localhost/websekolah_adminsekolah_master/api/siswa');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  $result = json_decode($result, true);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Web Sekolah</title>
    <style type="text/css">
      .left {
        text-align: left;
      }
      .right {
        text-align: right;
      }
      .center {
        text-align: center;
      }
      .justify {
        text-align: justify;
      }
    </style>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/logo/favicon.png" rel="icon" />
    <link href="assets/img/logo/favicon.png" rel="apple-touch-icon" />

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
          <img src="assets/img/logo/logo1.png" alt="" />
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
            <li class="dropdown">
              <a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/sejarah">Sejarah Singkat</a></li>
                <li><a href="/visimisi">Visi Misi</a></li>
                <li><a href="/ekskul">Ekskul</a></li>
                <li><a href="/profilpimpinan">Profil Pimpinan</a></li>
                <li><a href="/sarpras">Sarpras</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="/#testimonials">Jurusan</a></li>
            <li class="dropdown">
              <a href="#"><span>GTK dan Siswa</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/gurustaff">Pendik dan TU</a></li>
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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <header class="section-header mt-5">
          <h2>Info Siswa</h2>
          <p>SMK NEGERI 1 PALU</p>
        </header>

        <div class="row gy-4">
          @foreach ($result as $row)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= $row["link"]; ?>" class="img-fluid" id="gambar" alt="" />
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
              <div class="member-info">
                <a href="" class="stretched-link" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["pendik_id"]; ?>"></a>
                <h4><?= $row["nama_lengkap"]; ?></h4>
                <span><?= $row["jurusan"]; ?></span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- Modal -->
    @foreach ($result as $row)
    <div class="modal fade" id="exampleModal<?= $row["pendik_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Biodata Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <img src="<?= $row["link"]; ?>" class="img-fluid" alt="" />
                </div>
                <div class="col-md-8">
                  <table class="table">
                      <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?= $row["nama_lengkap"]; ?></td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td><?= $row["jenis_kelamin"]; ?></td>
                      </tr>
                      <tr>
                        <th>NISN</th>
                        <td>:</td>
                        <td><?= $row["nisn"]; ?></td>
                      </tr>
                      <tr>
                        <th>NIS</th>
                        <td>:</td>
                        <td><?= $row["nis"]; ?></td>
                      </tr>
                      <tr>
                        <th>NIK</th>
                        <td>:</td>
                        <td><?= $row["nik"]; ?></td>
                      </tr>
                      <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <td>:</td>
                        <td><?= $row["tempat_lahir"]; ?>, <?= $row["tanggal_lahir"]; ?></td>
                      </tr>
                      <tr>
                        <th>Agama</th>
                        <td>:</td>
                        <td><?= $row["agama_id"]; ?></td>
                      </tr>
                      <tr>
                        <th>Kebutuhan Khusus</th>
                        <td>:</td>
                        <td><?= $row["kebutuhan_khusus"]; ?></td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <!-- Modal -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo/logo1.png" alt="" />
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

    <!-- Template Main JS File -->
    <script src="<?=url('/')?>/public/assets/js/main.js"></script>
  </body>
</html>
