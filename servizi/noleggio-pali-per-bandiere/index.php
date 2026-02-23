<!DOCTYPE html>
<html lang="it">

<head>
<!-- Google tag (gtag.js) - deferred to not block LCP -->
<script>
  window.addEventListener('load', function() {
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=AW-859280756';
    document.head.appendChild(s);
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-859280756');
  });
</script>



  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Preload LCP image immediately - highest priority -->
  <link rel="preload" as="image" href="img/noleggio-pennoni-pali-per-bandiere-1.png" fetchpriority="high">

  <!-- DNS prefetch for external resources -->
  <link rel="dns-prefetch" href="https://www.galloaldo.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=optional" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=optional" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=optional">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=optional">
  </noscript>

  <!-- Stylesheets - non render blocking -->
  <link rel="preload" as="style" href="../../css/vendors.css" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" as="style" href="../../css/main.css" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" as="style" href="../../wh/venom-button.css" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="../../css/vendors.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../wh/venom-button.css">
  </noscript>

  <!-- Polyfill for older browsers that don't support rel=preload -->
  <script>
    !function(e){"use strict";var t=function(t,n,r){function o(e){return d.body?e():void setTimeout(function(){o(e)})}function i(){f.addEventListener&&f.removeEventListener("load",i),f.media=r||"all"}var a,d=e.document,f=d.createElement("link");if(n)a=n;else{var s=(d.body||d.documentElement).style;a="undefined"!=typeof s.transition?"transition":"undefined"!=typeof s.WebkitTransition?"WebkitTransition":""}f.rel="stylesheet",f.href=t,f.media="only x",o(function(){d.head.appendChild(f)}),setTimeout(i)};e.loadCSS=t}("undefined"!=typeof global?global:this);
  </script>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="../../img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../../img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../../img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../../img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Noleggio a breve termine pennoni pali aste e pennoni per bandiere .</title>
  <meta name="description" content="La Gallo Aldo è azienda specializzata in produzione e noleggio aste, pali e pennoni ed accessori per bandiere in metallo e fusione. Chiedi un preventivo ora.">	
	<?php include ("../../headscript.html")?>

  <style>
    /* Prevent CLS from async font loading */
    body { font-family: Inter, Arial, sans-serif; }
    h1, h2, h3, h4, h5, h6 { font-family: Oswald, Arial, sans-serif; }

    /* Prevent CLS from logo images */
    .header__logo img {
      width: auto;
      height: 40px;
    }

    /* Prevent CLS from flag images */
    img.mw36 {
      width: 36px;
      height: auto;
    }

    /* Italy flag in hero */
    .sectionHeading p img[src*="italy_flag"] {
      width: 200px;
      height: auto;
    }

    /* 2-col image grid */
    .img-grid-2col {
      display: grid;
      grid-template-columns: 1fr;
      gap: 32px;
    }
    @media (min-width: 768px) {
      .img-grid-2col {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    .img-grid-2col img {
      width: 100%;
      height: auto;
      display: block;
    }

    /* Skip rendering below-fold content until needed - reduces LCP work */
    .layout-pb-md.bg-dark-1 {
      content-visibility: auto;
      contain-intrinsic-size: 0 800px;
    }
  </style>

</head>

<body>

<?php include ("../../bodyscript.html")?>



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


    <main class="bg-dark-1">


      <!-- header start -->
      <header class="header -dark -sticky-dark js-header-dark js-header">
       <!-- header__bar start -->
        <div class="header__bar">
          <div class="header__logo js-header-logo"> <a data-barba href="../../" title="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio">
              <img class="header__logo__light js-lazy" data-srcset="../../img/gallo-aldo-srl-logo.png 1x, ../../img/gallo-aldo-srl-logo.png 2x" data-src="../../img/gallo-aldo-srl-logo.png" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio" width="180" height="40">
            </a>            <a data-barba href="../../">
              <img class="header__logo__dark js-lazy" data-srcset="../../img/logo-white-gallo-aldo.png 1x, ../../img/logo-white-gallo-aldo.png 2x" data-src="../../img/logo-white-gallo-aldo.png" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio" width="180" height="40">
            </a>
          </div>

          <div class="menustyle header__menu js-header-menu">
            <button type="button" class="nav-button-open js-nav-open">
              <i class="icon" data-feather="menu"></i>
            </button>
			  <a href="https://www.galloaldo.com/en-EN/"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36" width="36" height="24" alt="English"></a>  	
          </div>
        </div>
        <!-- header__bar end -->

<!-- nav start -->
        <nav class="nav js-nav">
          <div class="nav__inner js-nav-inner">
            <div class="nav__bg js-nav-bg"></div>

            <div class="nav__container">
              <div class="nav__header">
                <button type="button" class="nav-button-back js-nav-back">
                  <i class="icon" data-feather="arrow-left-circle"></i>
                </button>

                <button type="button" class="nav-btn-close js-nav-close pointer-events-none">
                  <i class="icon" data-feather="x"></i>
                </button>
              </div>

              <div class="nav__content">
				  <!--LOAD NAV CONTENT-->
                <?php include ("../../nav-lev3.html")?>
				<!--END NAV CONTENT-->
                <div class="nav__content__right">
                   <div class="nav__info">
					<!--LOAD NAV INFO-->
					
                <?php include ("../../nav-info-lev3.html")?>
				<!--END NAV INFO-->
				<!--SWITCH LANG-->
					<div class="nav__info__item js-navInfo-item" style="margin-top:0 !important;">
					   <div class="nav__info__content text-lg text-white mt-16">
                        <a href="../../en-EN/index.php"><img src="../../img/uk-flag.svg" class="mw36" width="36" height="24" alt="English"></a>    
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
      <section class="layout-pt-xl layout-pb-xs">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-xl-7 col-lg-8">
              <ul class="breadcrumbs text-white mb-40">
                <li class="breadcrumbs-item">   <a data-barba href="../../">
                    Home
                  </a>
                </li>
				 <li class="breadcrumbs-item">
                  <a data-barba href="../index.php">
                    Servizi
                  </a>
                </li> 
				 
                <li class="breadcrumbs-item active" aria-current="page">
                  Noleggio Pali per Bandiere
                </li>
              </ul>

              <div class="sectionHeading -lg">
                
				  <p><img src="../../img/italy_flag.svg" style="width: 200px" width="200" height="133" alt="Bandiera Italia"></p>
				  
				  <h1 class="sectionHeading__title text-white">
                  Noleggio Pali per Bandiere
                </h1>
				 <div class="spacer-small"></div>
			   <p class="text-white">Tutte le immagini e i contenuti sono di proprietà di Gallo Aldo sono protetti dal diritto d´autore nonche dal diritto di proprietà intellettuale. È vietata la copia e la riproduzione dei contenuti e immagini in qualsiasi forma. È vietata la redistribuzione e la pubblicazione dei contenuti e immagini non autorizzata espressamente da Gallo Aldo.</p>
             <p class="text-white pt-8">Per maggiori informazioni: <a href="https://www.paliperbandiere.com/" target="_blank" style="text-decoration: underline">paliperbandiere.com</a></p>
			
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->
		
		
      <!-- section start -->
      <section class="layout-pt-md layout-pb-md bg-dark-1">
        <div class="section-filter">

          <!-- container start -->
          <div class="container layout-pt-sm">

            <div class="img-grid-2col">

              <div>
                <img src="img/noleggio-pennoni-pali-per-bandiere-1.png" alt="Noleggio pennoni pali per bandiere" fetchpriority="high" decoding="sync" width="800" height="600">
              </div>

              <div>
                <img src="img/noleggio-pennoni-pali-per-bandiere-2.png" alt="Noleggio pennoni pali per bandiere" loading="lazy" decoding="async" width="800" height="600">
              </div>

              <div>
                <img src="img/noleggio-pennoni-pali-per-bandiere-3.jpg" alt="Noleggio pennoni pali per bandiere" loading="lazy" decoding="async" width="800" height="600">
              </div>

              <div>
                <img src="img/noleggio-pennoni-pali-per-bandiere-4.jpg" alt="Noleggio pennoni pali per bandiere" loading="lazy" decoding="async" width="800" height="600">
              </div>

            </div>

          </div>
          <!-- container end -->

        </div>
      </section>
      <!-- section end -->
		
		
	


  <!--LOAD FOOTER-->
	<?php include ("../../footer-lev3.html")?>
		<!--END LOAD FOOTER-->


    </main>

  </div>
  <!-- barba container end -->


  <!-- JavaScript - deferred to not block rendering -->
  <script src="../../js/vendors.js" defer></script>
  <script src="../../js/main.js" defer></script>

</body>

</html>