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

<!-- Event snippet for Chiamate dal sito (1) conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-859280756/DKaECLXfqogYEPSq3pkD',
      'event_callback': callback
  });
  return false;
}
</script>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/head-perf.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">


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

    <title>aste da interno e da esterno per bandiere.</title>
   <meta name="description" content="Scopri il mondo della Gallo Aldo: aste da interno o da esterno, di allumunio, ottone o ferro. Scegli lciò di cui hai bisogno. Preventivo gratuito e veloce.">	
	<?php include ("../../headscript.html")?>
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
              <img class="header__logo__light js-lazy" data-srcset="../../img/gallo-aldo-srl-logo.png 1x, ../../img/gallo-aldo-srl-logo.png 2x" data-src="../../img/gallo-aldo-srl-logo.png" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio">
            </a>            <a data-barba href="../../">
              <img class="header__logo__dark js-lazy"data-srcset="../../img/logo-white-gallo-aldo.png 1x, ../../img/logo-white-gallo-aldo.png 2x" data-src="../../img/logo-white-gallo-aldo.png" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio">
            </a>
          </div>

          <div class="menustyle header__menu js-header-menu">
            <button type="button" class="nav-button-open js-nav-open" aria-label="Apri menu">
              <i class="icon" data-feather="menu" aria-hidden="true"></i>
            </button>
			  <a href="https://www.galloaldo.com/en-EN/" aria-label="Switch to English version"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36" alt="English"></a>  	
          </div>
        </div>
        <!-- header__bar end -->

<!-- nav start -->
        <nav class="nav js-nav">
          <div class="nav__inner js-nav-inner">
            <div class="nav__bg js-nav-bg"></div>

            <div class="nav__container">
              <div class="nav__header">
                <button type="button" class="nav-button-back js-nav-back" aria-label="Torna indietro">
                  <i class="icon" data-feather="arrow-left-circle" aria-hidden="true"></i>
                </button>

                <button type="button" class="nav-btn-close js-nav-close pointer-events-none" aria-label="Chiudi menu">
                  <i class="icon" data-feather="x" aria-hidden="true"></i>
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
                        <a href="../../en-EN/products/flagpoles/index.php" aria-label="Switch to English version"><img src="../../img/uk-flag.svg" class="mw36" alt="English"></a>    
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
      <section class="masthead -type-4 js-masthead-type-4">
        <!-- container start -->
        <div class="container-fluid px-0">
          <!-- row start -->
          <div class="row no-gutters align-items-center h-full">
            <div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1 sm:px-20 z-2">
              <div class="masthead__content">
                <div data-split="lines" data-split-page-reveal>
                  <p class="masthead__subtitle uppercase text-sm tracking-md text-light mb-24 md:mb-16 js-subtitle">
                    Aste per bandiere
                  </p>
                </div>

                <div data-split="lines" data-split-page-reveal class="mr-minus-lg md:mr-0">
                  <h1 class="masthead__title fw-700 text-white js-title">
                    Una vasta gamma a catalogo di aste per bandiere
                  </h1>
                </div>

                <div data-split="lines" data-split-page-reveal>
                  <p class="masthead__text text-light mt-40 md:mt-20 js-text">
                    Ad ogni bandiera la sua asta. Aste da interno, da esterno, aste in velluto personalizzabili e disponibili in diverse misure.
                  </p>
                </div>

                <div class="masthead__button overflow-hidden mt-48 md:mt-32">
                  <a href="../../richiedi-catalogo.php" class="button -md -white text-black js-button">
                    Richiedi il Catalogo
                  </a>
                </div>
              </div>
            </div>

            <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1 z-1">
              <div data-parallax="0.7" class="masthead__img overflow-hidden h-100vh ml-minus-sm md:ml-0">
                <div data-parallax-target class="bg-image js-lazy js-image" data-bg="img/aste-per-bandiere-main-pic.jpg"></div>
                <div class="masthead__img__cover js-image-cover"></div>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->

        
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-xl layout-pb-lg">
        <!-- container start -->
        <div class="container">

          <!-- row start -->
          <div class="row">
            <div class="col-xl-9 col-md-12">
              <div class="sectionHeading -sm">
                
                <h2 class="sectionHeading__title fw-600 text-white">
                  Le nostre aste per bandiere sono in alluminio anodizzato argento oppure oro, ferro e ottone cromato o lucidato, personalizzabili con velluto da parata, e disponibili in diverse lunghezze e vari diametri.
                </h2>
              </div>
            </div>
          </div>
          <!-- row end -->


          <!-- row start -->
          <div data-anim-wrap class="row x-gap-48 y-gap-60 layout-pt-md">

            <div class="col-lg-4 col-sm-6">
              <div data-anim-child="slide-up delay-4" class="serviceCard -type-2">
                <div class="serviceCard__content">
                  <h3 class="serviceCard__title text-accent text-2xl fw-500 mt-40 md:mt-24">
                    Aste da Interno
                  </h3>
<p><img src="../../img/italy_flag.svg" style="width: 200px" alt="Bandiera Italiana"></p>
                  <p class="serviceCard__text text-light mt-16">
                    Le nostre aste per bandiere da interno sono in alluminio anodizzato argento oppure oro, ferro e ottone cromato o lucidato oro, disponibili in diverse lunghezze e vari diametri.
                  </p>

                  <div class="serviceCard__navButton navButton -md mt-24">
                    <a href="./aste-per-interno.php" title="Gallo Aldo Brescia aste per bandiere da interno in alluminio anodizzato argento oppure oro, ferro e ottone cromato o lucidato oro, personalizzabili con velluto da parata, e disponibili in diverse lunghezze e vari diametri" class="navButton__item button -outline-white text-white">
                      <i data-feather="arrow-right" class="icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6">
              <div data-anim-child="slide-up delay-4" class="serviceCard -type-2">
                <div class="serviceCard__content">
                  <h3 class="serviceCard__title text-accent text-2xl fw-500 mt-40 md:mt-24">
                    Aste da Esterno
                  </h3>
<p><img src="../../img/italy_flag.svg" style="width: 200px" alt="Bandiera Italiana"></p>
                  <p class="serviceCard__text text-light mt-16">
                    Le nostre aste per bandiere da esterno prodotte in alluminio anodizzato, un materiale che resiste agli effetti degli agenti atmosferici e ai graffi, disponibili in vari diametri.
                  </p>

                  <div class="serviceCard__navButton navButton -md mt-24">
                    <a href="./aste-per-esterno.php" title="Gallo Aldo Brescia aste per bandiere da esterno prodotte in alluminio anodizzato, un materiale che resiste agli effetti degli agenti atmosferici e ai graffi. Scopri in questa sezione le aste per bandiere in alluminio disponibili in vari diametri e lunghezze e gli accessori suggeriti da abbinare, come bracci girevoli, fune interna ganci, cerniere e carrucole" class="navButton__item button -outline-white text-white">
                      <i data-feather="arrow-right" class="icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6">
              <div data-anim-child="slide-up delay-4" class="serviceCard -type-2">
                <div class="serviceCard__content">
                  <h3 class="serviceCard__title text-accent text-2xl fw-500 mt-40 md:mt-24">
                    Aste in Velluto
                  </h3>
					<p><img src="../../img/italy_flag.svg" style="width: 200px" alt="Bandiera Italiana"></p>
                  <p class="serviceCard__text text-light mt-16">
                    Le nostre aste per bandiere personalizzate con velluto sono adatte nell'ambito militare e le parate. Tutte le nostre aste in velluto sono personalizzabili con lunghezza fino a 280cm
                  </p>

                  <div class="serviceCard__navButton navButton -md mt-24">
                    <a href="./aste-in-velluto.php" title="Gallo Aldo Brescia aste per bandiere. Le nostre aste per bandiere personalizzate con velluto sono adatte nell'ambito militare e le parate. Tutte le nostre aste in velluto sono personalizzabili con lunghezza fino a 280cm" class="navButton__item button -outline-white text-white">
                      <i data-feather="arrow-right" class="icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
			  
			  <div class="col-lg-4 col-sm-6">
              <div data-anim-child="slide-up delay-4" class="serviceCard -type-2">
                <div class="serviceCard__content">
                  <h3 class="serviceCard__title text-accent text-2xl fw-500 mt-40 md:mt-24">
                    Aste Militari
                  </h3>
					<p><img src="../../img/italy_flag.svg" style="width: 200px" alt="Bandiera Italiana"></p>
                  <p class="serviceCard__text text-light mt-16">
                    Le nostre aste per bandiere specifiche per l'ambito militare sono realizzate e prodotte seguendo le specifiche del capitolato dell'esercito italiano e personalizzabili con diversi stendardi.
                  </p>

                  <div class="serviceCard__navButton navButton -md mt-24">
                    <a href="./aste-militari.php" title="Gallo Aldo Brescia aste per bandiere. Le nostre aste per bandiere specifiche per l'ambito militare sono realizzate e prodotte seguendo le specifiche del capitolato dell'esercito italiano." class="navButton__item button -outline-white text-white">
                      <i data-feather="arrow-right" class="icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
			  
			   <div class="col-lg-4 col-sm-6">
              <div data-anim-child="slide-up delay-4" class="serviceCard -type-2">
                <div class="serviceCard__content">
                  <h3 class="serviceCard__title text-accent text-2xl fw-500 mt-40 md:mt-24">
                    Aste Grigio Micaceo
                  </h3>
					<p><img src="../../img/italy_flag.svg" style="width: 200px" alt="Bandiera Italiana"></p>
                  <p class="serviceCard__text text-light mt-16">
                    Le nostre aste per bandiere da esterno della linea grigio micaceo prodotte in alluminio anodizzato, un materiale molto resistente agli agenti atmosferici, disponibili in vari diametri.
                  </p>

                  <div class="serviceCard__navButton navButton -md mt-24">
                    <a href="./aste-grigio-micaceo.php" title="Gallo Aldo Brescia aste per bandiere. Le nostre aste per bandiere da esterno della linea grigio micaceo prodotte in alluminio anodizzato, un materiale molto resistente agli agenti atmosferici, disponibili in vari diametri." class="navButton__item button -outline-white text-white">
                      <i data-feather="arrow-right" class="icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
			  
			   <div class="col-lg-4 col-sm-6">
              <div data-anim-child="slide-up delay-4" class="serviceCard -type-2">
                <div class="serviceCard__content">
                  <h3 class="serviceCard__title text-accent text-2xl fw-500 mt-40 md:mt-24">
                    Aste No-Roll
                  </h3>
					<p><img src="../../img/italy_flag.svg" style="width: 200px" alt="Bandiera Italiana"></p>
                  <p class="serviceCard__text text-light mt-16">
                    Il nostro sistema brevettato No Roll per aste per bandiere da esterno garantisce che le vostre bandiere non saranno mai più arrotolate su se stesse grazie a molla in acciaio INOX AISI 430. 
                  </p>

                  <div class="serviceCard__navButton navButton -md mt-24">
                    <a href="./aste-no-roll.php" title="Gallo Aldo Brescia aste per bandiere. Il nostro sistema brevettato No Roll per aste per bandiere da esterno garantisce che le vostre bandiere non saranno mai più arrotolate su se stesse grazie a molla in acciaio INOX AISI 430" class="navButton__item button -outline-white text-white">
                      <i data-feather="arrow-right" class="icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
			  
			  <div class="col-lg-4 col-sm-6">
              <div data-anim-child="slide-up delay-4" class="serviceCard -type-2">
                <div class="serviceCard__content">
                  <h3 class="serviceCard__title text-accent text-2xl fw-500 mt-40 md:mt-24">
                    Astine per Veicoli
                  </h3>
					<p><img src="../../img/italy_flag.svg" style="width: 200px" alt="Bandiera Italiana"></p>
                  <p class="serviceCard__text text-light mt-16">
                    Una vasta scelta di aste cromate per bandiere da applicare su automobili e motociclette, con attacco a magnete o agganciabile al finestrino dell’auto. Astine in plastica per autovetture 
                  </p>

                  <div class="serviceCard__navButton navButton -md mt-24">
                    <a href="./astine-per-veicoli.php" title="Gallo Aldo Brescia aste per bandiere. Una vasta scelta di aste cromate per bandiere da applicare su automobili e motociclette, con attacco a magnete o agganciabile al finestrino dell’auto. Astine in plastica per autovetture" class="navButton__item button -outline-white text-white">
                      <i data-feather="arrow-right" class="icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- row end -->

        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


          <!--LOAD FOOTER-->
	<?php include ("../../footer-lev3.html")?>
		<!--END LOAD FOOTER-->


    </main>

  </div>
  <!-- barba container end -->


  <!-- JavaScript -->
  <script src="../../js/vendors.js" defer></script>
  <script src="../../js/main.js" defer></script>

</body>

</html>