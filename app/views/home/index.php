<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $data['title'] ?></title>
    <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Tooplate" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <link rel="stylesheet" href="<?= base_url; ?>/assets_landing_page/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url; ?>/assets_landing_page/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url; ?>/assets_landing_page/css/animate.css" />
    <link rel="stylesheet" href="<?= base_url; ?>/assets_landing_page/css/owl.carousel.css" />
    <link rel="stylesheet" href="<?= base_url; ?>/assets_landing_page/css/owl.theme.default.min.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets_landing_page/css/tooplate-style.css" />
  </head>
  <body
    id="top"
    data-spy="scroll"
    data-target=".navbar-collapse"
    data-offset="50"
  >
    <!-- PRE LOADER -->
    <section class="preloader">
      <div class="spinner">
        <span class="spinner-rotate"></span>
      </div>
    </section>

    <!-- HEADER -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-5">
            <p>Welcome datang di Website Puskesmas blablabla</p>
          </div>

          <div class="col-md-8 col-sm-7 text-align-right">
            <span class="phone-icon"
              ><i class="fa fa-phone"></i> 010-060-0160</span
            >
            <span class="date-icon"
              ><i class="fa fa-calendar-plus-o"></i> 05:00 - 22:00
              (Senin-Minggu)</span
            >
            <span class="email-icon"
              ><i class="fa fa-envelope-o"></i>
              <a href="#">info@puskesmas.com</a></span
            >
          </div>
        </div>
      </div>
    </header>

    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse"
          >
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>

          <!-- lOGO TEXT HERE -->
          <a href="index.html" class="navbar-brand">Puskesmas blablabla</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#top" class="smoothScroll">Beranda</a></li>
            <li class="appointment-btn">
              <a href="<?=base_url;?>/login">Pendaftaran Online</a>
            </li>
            <li><a href="#about" class="smoothScroll">Tentang Kami</a></li>
            <li><a href="#team" class="smoothScroll">Dokter</a></li>
            <li><a href="#news" class="smoothScroll">Berita</a></li>
            <li><a href="#google-map" class="smoothScroll">Kontak</a></li>
            <li class="appointment-btn">
              <a href="<?=base_url;?>/login/loginadmin">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="owl-carousel owl-theme">
            <div class="item item-first">
              <div class="caption">
                <div class="col-md-offset-1 col-md-10">
                  <h3>Mari buat Hidupmu lebih Bahagia</h3>
                  <h1>Hidup Sehat</h1>
                  <a
                    href="#team"
                    class="section-btn btn btn-default smoothScroll"
                    >Daftar Antrian</a
                  >
                </div>
              </div>
            </div>

            <div class="item item-second">
              <div class="caption">
                <div class="col-md-offset-1 col-md-10">
                  <h3>Menghadirkan pengalaman hidup unik</h3>
                  <h1>Gaya Hidup Baru</h1>
                  <a
                    href="#about"
                    class="section-btn btn btn-default btn-gray smoothScroll"
                    >Lebih banyak</a
                  >
                </div>
              </div>
            </div>

            <div class="item item-third">
              <div class="caption">
                <div class="col-md-offset-1 col-md-10">
                  <h3>Pelajari Manfaat Kesehatan Anda</h3>
                  <h1>Kesehatan Anda</h1>
                  <a
                    href="#news"
                    class="section-btn btn btn-default btn-blue smoothScroll"
                    >Baca Berita</a
                  >
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
              <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                Selamat Datang di Puskesmas blablabla
              </h2>
              <div class="wow fadeInUp" data-wow-delay="0.8s">
                <p>
                  Aenean luctus lobortis tellus, vel ornare enim molestie
                  condimentum. Curabitur lacinia nisi vitae velit volutpat
                  venenatis.
                </p>
                <p>
                  Sed a dignissim lacus. Quisque fermentum est non orci commodo,
                  a luctus urna mattis. Ut placerat, diam a tempus vehicula.
                </p>
              </div>
              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                <img src="<?= base_url; ?>/assets_landing_page/images/dokter.jpg" class="img-responsive" alt="" />
                <figcaption>
                  <h3>Dr. Arya Subarjo</h3>
                  <p>Kepala Puskemas blablabla</p>
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
              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Dokter Kami</h2>
            </div>
          </div>

          <div class="clearfix"></div>
          <?php foreach ($data['dokter'] as $row) :?>
          <div class="col-md-4 col-sm-6">
            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
              <img src="<?= base_url; ?>/files/<?= $row['file']; ?>" class="img-responsive"  alt="foto dokter"  width="360" height="830" />

              <div class="team-info">
                <h3><?=$row['nama']?></h3>
                <p><?=$row['spesialisasi']?></p>
                <div class="team-contact-info">
                  <p><i class="fa fa-phone"></i><?= $row['telepon'] ?></p>
                  <p>
                    <i class="fa fa-envelope-o"></i>
                    <a href="#"><?= $row['email'] ?></a>
                  </p>
                </div>
                <ul class="social-icon">
                  <li><a href="#" class="fa fa-linkedin-square"></a></li>
                  <li><a href="#" class="fa fa-envelope-o"></a></li>
                  <li><a href="#" class="fa fa-facebook-square"></a></li>
                  <li><a href="#" class="fa fa-twitter"></a></li>
                </ul>
              </div>
            </div>
          </div>
            <?php endforeach; ?>
          
        </div>
      </div>
    </section>

    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="2.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <!-- SECTION TITLE -->
            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
              <h2>Berita Terkini</h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <!-- NEWS THUMB -->
            <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
              <a href="#">
                <img
                  src="<?= base_url; ?>/assets_landing_page/images/news-image1.jpg"
                  class="img-responsive"
                  alt=""
                />
              </a>
              <div class="news-info">
                <span>March 08, 2018</span>
                <h3><a href="#">About Amazing Technology</a></h3>
                <p>
                  Maecenas risus neque, placerat volutpat tempor ut, vehicula et
                  felis.
                </p>
                <div class="author">
                  <img
                    src="<?= base_url; ?>/assets_landing_page/images/author-image.jpg"
                    class="img-responsive"
                    alt=""
                  />
                  <div class="author-info">
                    <h5>Jeremie Carlson</h5>
                    <p>CEO / Founder</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <!-- NEWS THUMB -->
            <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
              <a href="news-detail.html">
                <img
                  src="<?= base_url; ?>/assets_landing_page/images/news-image2.jpg"
                  class="img-responsive"
                  alt=""
                />
              </a>
              <div class="news-info">
                <span>February 20, 2018</span>
                <h3>
                  <a href="#"
                    >Introducing a new healing process</a
                  >
                </h3>
                <p>
                  Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam
                  et est ligula.
                </p>
                <div class="author">
                  <img
                    src="<?= base_url; ?>/assets_landing_page/images/author-image.jpg"
                    class="img-responsive"
                    alt=""
                  />
                  <div class="author-info">
                    <h5>Jason Stewart</h5>
                    <p>General Director</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <!-- NEWS THUMB -->
            <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
              <a href="#">
                <img
                  src="<?= base_url; ?>/assets_landing_page/images/news-image3.jpg"
                  class="img-responsive"
                  alt=""
                />
              </a>
              <div class="news-info">
                <span>January 27, 2018</span>
                <h3>
                  <a href="#">Review Annual Medical Research</a>
                </h3>
                <p>
                  Vivamus non nulla semper diam cursus maximus. Pellentesque
                  dignissim.
                </p>
                <div class="author">
                  <img
                    src="<?= base_url; ?>/assets_landing_page/images/author-image.jpg"
                    class="img-responsive"
                    alt=""
                  />
                  <div class="author-info">
                    <h5>Andrio Abero</h5>
                    <p>Online Advertising</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MAKE AN APPOINTMENT -->

    <!-- GOOGLE MAP -->
    <section id="google-map">
      <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4780449833606!2d113.43335977401978!3d-8.154495581685552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd68b0132a34b69%3A0xda83178b6fec15dd!2sPUSKESMAS%20Tanggul!5e0!3m2!1sid!2sid!4v1695104428640!5m2!1sid!2sid"
        width="100%"
        height="350"
        frameborder="0"
        style="border: 0"
        allowfullscreen
      ></iframe>
    </section>

    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="footer-thumb">
              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Info Kontak</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime
                officia tenetur, dolor voluptatem nisi recusandae quam qui aut
                numquam architecto, excepturi, in modi veritatis sapiente atque
                quisquam saepe alias optio.
              </p>

              <div class="contact-info">
                <p><i class="fa fa-phone"></i> 010-070-0170</p>
                <p>
                  <i class="fa fa-envelope-o"></i>
                  <a href="#">info@puskesmas.com</a>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="footer-thumb">
              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Berita Terkini</h4>
              <div class="latest-stories">
                <div class="stories-image">
                  <a href="#"
                    ><img
                      src="<?=base_url;?>/assets_landing_page/images/news-image.jpg"
                      class="img-responsive"
                      alt=""
                  /></a>
                </div>
                <div class="stories-info">
                  <a href="#"><h5>Amazing Technology</h5></a>
                  <span>March 08, 2018</span>
                </div>
              </div>

              <div class="latest-stories">
                <div class="stories-image">
                  <a href="#"
                    ><img
                      src="<?=base_url;?>/assets_landing_page/images/news-image.jpg"
                      class="img-responsive"
                      alt=""
                  /></a>
                </div>
                <div class="stories-info">
                  <a href="#"><h5>New Healing Process</h5></a>
                  <span>February 20, 2018</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="footer-thumb">
              <div class="opening-hours">
                <h4 class="wow fadeInUp" data-wow-delay="0.4s">Buka Jam</h4>
                <p>Senin - Jum'at <span>05:00 - 22:00</span></p>
                <p>Sabtu - Minggu <span>04:00 - 24:00</span></p>
              </div>

              <ul class="social-icon">
                <li>
                  <a
                    href="#"
                    class="fa fa-facebook-square"
                    attr="facebook icon"
                  ></a>
                </li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 border-top">
            <div class="col-md-4 col-sm-6">
              <div class="copyright-text">
                <p>Copyright &copy; 2023 SIAP</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="footer-link">
                <a href="#">Tentang Kami</a>
                <a href="#">Dokter</a>
                <a href="#">Berita</a>
                <a href="#">Kontak</a>
              </div>
            </div>
            <div class="col-md-2 col-sm-2 text-align-center">
              <div class="angle-up-btn">
                <a
                  href="#top"
                  class="smoothScroll wow fadeInUp"
                  data-wow-delay="1.2s"
                  ><i class="fa fa-angle-up"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="<?= base_url; ?>/assets_landing_page/js/jquery.js"></script>
    <script src="<?= base_url; ?>/assets_landing_page/js/bootstrap.min.js"></script>
    <script src="<?= base_url; ?>/assets_landing_page/js/jquery.sticky.js"></script>
    <script src="<?= base_url; ?>/assets_landing_page/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url; ?>/assets_landing_page/js/wow.min.js"></script>
    <script src="<?= base_url; ?>/assets_landing_page/js/smoothscroll.js"></script>
    <script src="<?= base_url; ?>/assets_landing_page/js/owl.carousel.min.js"></script>
    <script src="<?= base_url; ?>/assets_landing_page/js/custom.js"></script>
  </body>
</html>
