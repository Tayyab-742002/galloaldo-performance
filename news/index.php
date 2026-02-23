<!DOCTYPE html>
<html lang="it">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-859280756"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-859280756');
</script>



  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/head-perf.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>News, segui il Blog dedicato ad aste e pali per bandiere.</title>
  <meta name="description" content="Gallo Aldo area news e blog: News e informazioni su promo e attività varie svolte dalla nostra azienda, produzione aste e pali per bandiere a Concesio, Brescia.">	
	<?php include ("../headscript.html")?>
</head>

<body >

<?php include ("../bodyscript.html")?>





  <!-- cursor start -->
  <div class="cursor js-cursor">
    <div class="cursor__wrapper">
      <div class="cursor__follower js-follower"></div>
      <div class="cursor__label js-label"></div>
      <div class="cursor__icon js-icon"></div>
    </div>
  </div>
  <!-- cursor end -->


  <!-- barba container start -->
  <div class="barba-container" data-barba="container">

    <!-- to-top-button start -->
    <div data-cursor class="backButton js-backButton">
      <span class="backButton__bg"></span>
      <div class="backButton__icon__wrap">
        <i class="backButton__button js-top-button" data-feather="arrow-up"></i>
      </div>
    </div>
    <!-- to-top-button end -->


    <main class="">


      <!-- header start -->
      <header class="header -light -sticky-light js-header">
        <!-- header__bar start -->
        <div class="header__bar">
          <div class="header__logo js-header-logo">
            <a data-barba href="../index.php" aria-label="Home">
              <img class="header__logo__light js-lazy" data-srcset="../img/gallo-aldo-logo-wht.svg 1x, ../img/gallo-aldo-logo-wht.svg 2x" data-src="../img/gallo-aldo-logo-wht.svg" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio">
            </a>
            <a data-barba href="../index.php" aria-label="Home">
              <img class="header__logo__dark js-lazy" data-srcset="../img/gallo-aldo-logo-black.svg 1x, ../img/gallo-aldo-logo-black.svg 2x" data-src="../img/gallo-aldo-logo-black.svg" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio">
            </a>
          </div>

          <div class="menustyle header__menu js-header-menu">
            <button type="button" class="nav-button-open js-nav-open" aria-label="Apri menu di navigazione">
              <i class="icon" data-feather="menu"></i>
            </button>
			  <a href="https://www.galloaldo.com/en-EN/index.php" aria-label="English version"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36" alt="English version" ></a>  	
          </div>
        </div>
        <!-- header__bar end -->


        <!-- nav start -->
        <nav class="nav js-nav">
          <div class="nav__inner js-nav-inner">
            <div class="nav__bg js-nav-bg"></div>

            <div class="nav__container">
              <div class="nav__header">
                <button type="button" class="nav-button-back js-nav-back" aria-label="Indietro">
                  <i class="icon" data-feather="arrow-left-circle"></i>
                </button>

                <button type="button" class="nav-btn-close js-nav-close pointer-events-none" aria-label="Chiudi menu di navigazione">
                  <i class="icon" data-feather="x"></i>
                </button>
              </div>

             <div class="nav__content">
				  <!--LOAD NAV CONTENT-->
                <?php include ("../nav-lev2.html")?>
				<!--END NAV CONTENT-->
                <div class="nav__content__right">
                   <div class="nav__info">
					<!--LOAD NAV INFO-->
					
                <?php include ("../nav-info-lev2.html")?>
				<!--END NAV INFO-->
				<!--SWITCH LANG-->
					<div class="nav__info__item js-navInfo-item" style="margin-top:0 !important;">
					   <div class="nav__info__content text-lg text-white mt-16">
                        <a href="../en-EN/contact.php" aria-label="English version"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36" alt="English version"></a>    
                      </div>
					   </div>
				<!--END SWTICH LANG-->	
					</div>
					
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- nav end -->
      </header>
      <!-- header end -->



		    <!-- section start -->
      <section class="layout-pt-xl layout-pb-md">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row justify-content-center text-center">
            <div class="col-xl-7 col-lg-8">
              <ul class="breadcrumbs justify-content-center text-dark mb-40">
                <li class="breadcrumbs-item">
                  <a data-barba href="../index.php" aria-label="Home">
                    Home
                  </a>
                </li>
                <li class="breadcrumbs-item active" aria-current="page">
                  News
                </li>
              </ul>

              <div class="sectionHeading -lg">
                <h1 class="sectionHeading__title">
                  News e Promozioni
                </h1>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->
		
		 <!-- section start -->
      <section class="layout-pt-xs layout-pb-md">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row no-gutters justify-content-between">

            <!-- posts start -->
            <div class="col-lg-8">

              <!-- blog-item start -->
              <div class="blogPost">
                <a data-barba href="../servizi/noleggio-pali-per-bandiere/index.php" aria-label="Noleggio Pali per Bandiere">
                  <div class="blogPost__img -hover">
                    <div class="bg-image ratio ratio-16:9 js-lazy" data-bg="img/sett-2022/noleggio-pennoni.png"></div>
                  </div>
                </a>

                <!-- blog-content start -->
                <div class="blogPost__content mt-24">
                  <div class="blogPost__info leading-md">
                   09 Settembre 2022
                    
                  </div>

                  <h3 class="blogPost__title text-2xl fw-600 mt-16">
                    <a data-barba href="../servizi/noleggio-pali-per-bandiere/index.php" aria-label="Noleggio Pali per Bandiere">
                      Noleggio Pali per Bandiere
                    </a>
                  </h3>

                  <p class="blogPost__text text-base mt-12 text-dark">
                    Scopri il nostro nuovo servizio di noleggio a breve termine di pali per bandiere.
                  </p>

                  <div class="blogPost__button text-dark mt-12">
                    <a href="../servizi/noleggio-pali-per-bandiere/index.php" data-barba class="button -underline fw-500" aria-label="Scopri di più su Noleggio Pali per Bandiere">
                      Scopri di più
                    </a>
                  </div>
                </div>
                <!-- blog-content end -->
              </div>
              <!-- blog-item end -->


            </div>
            <!-- posts end -->


            <!-- sidebar start -->
            <div class="col-lg-4">
              <aside class="blogSidebar widget_area">


                <!-- widget start -->
                <div class="widget widget_categories">
                  <h5 class="widget-title">
                    Info & Contatti
                  </h5>

					<p><strong>Gallo Aldo</strong><br>
						Aste - Pennoni e Accessori per Bandiere
						<br><hr />
						Via della Stella 54<br>
25062 Concesio, BS<br>
					</p>	
					
                  <ul>
                    <li>
                      <a href="mailto:info@galloaldo.com" aria-label="Email Gallo Aldo">info@galloaldo.com</a>
						<a href="tel:+390308900679" aria-label="Telefono Gallo Aldo">+39-030.8900679</a>
                    </li>
                   
                  </ul>
					
					<p class="text-sm" style="font-size:10px">Tutte le immagini e i contenuti sono di proprietà di Gallo Aldo sono protetti dal diritto d´autore nonche dal diritto di proprietà intellettuale. È vietata la copia e la riproduzione dei contenuti e immagini in qualsiasi forma. È vietata la redistribuzione e la pubblicazione dei contenuti e immagini non autorizzata espressamente da Gallo Aldo. </p>
                </div>
                <!-- widget end -->



              </aside>
            </div>
            <!-- sidebar end -->

          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


	


  <!--LOAD FOOTER-->
	<?php include ("../footer-lev2.html")?>
		<!--END LOAD FOOTER-->


    </main>

  </div>
  <!-- barba container end -->


  <!-- JavaScript -->
  <script src="../js/vendors.js"></script>
  <script src="../js/main.js"></script>

</body>

</html>