<!DOCTYPE html>
<html lang="it">

<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/head-perf.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="./validate/jquery.min.js"></script>
<script src="./validate/jquery.validate.min.js"></script>
	 <style>label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}

input.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}</style>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Catalogo Aste e Accessori per Bandiere, Richiesta Catalogo.</title>
  <meta name="description" content="Puoi richiedere il catalogo di aste, pali, pennoni per bandiere ed accessori, compilando il form sottostante. Richiedi il nostro catalogo adesso.">	
	<?php include ("./headscript.html")?>
</head>

<body class="preloader-visible" >

<?php include ("./bodyscript.html")?>


  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>

    <div class="preloader__progress">
      <div class="preloader__progress__inner"></div>
    </div>
  </div>
  <!-- preloader end -->


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
          <div class="header__logo js-header-logo">            <a data-barba href="./"><img class="header__logo__light js-lazy" data-srcset="./img/gallo-aldo-srl-logo.png 1x, ./img/gallo-aldo-srl-logo.png 2x" data-src="./img/gallo-aldo-srl-logo.png" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio">
            </a>            <a data-barba href="./">
              <img class="header__logo__dark js-lazy"data-srcset="./img/logo-white-gallo-aldo.png 1x, ./img/logo-white-gallo-aldo.png 2x" data-src="./img/logo-white-gallo-aldo.png" alt="Gallo Aldo aste, pennoni e accessori per bandiere made in Italy Brescia Concesio">
            </a>
          </div>

          <div class="menustyle header__menu js-header-menu">
            <button type="button" class="nav-button-open js-nav-open">
              <i class="icon" data-feather="menu"></i>
            </button>
			  <a href="https://www.galloaldo.com/en-EN/"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36"></a>  	
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
                <?php include ("./nav.html")?>
				<!--END NAV CONTENT-->
                <div class="nav__content__right">
                   <div class="nav__info">
					<!--LOAD NAV INFO-->
					
                <?php include ("./nav-info.html")?>
				<!--END NAV INFO-->
				<!--SWITCH LANG-->
					<div class="nav__info__item js-navInfo-item" style="margin-top:0 !important;">
					   <div class="nav__info__content text-lg text-white mt-16">
                        <a href="./en-EN/request-a-catalog.php"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36"></a>    
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
        <div data-anim-wrap class="container">

          <!-- row start -->
          <div class="row">
            <div class="col-xl-9 offset-xl-1 col-lg-11">
              <div data-anim-child="slide-up delay-1" class="sectionHeading -lg">
                <p class="sectionHeading__subtitle">
                  Gallo Aldo, Aste Pennoni e Accessori per Bandiere
                </p>
                <h1 class="sectionHeading__title leading-sm">
                  Richiedi il nostro Catalogo
                </h1>
				   <h4 class=" leading-sm">
                  Inoltra la richiesta al nostro staff compilando il form sottostante:
                </h4>
				  <p class="pt-24"><img src="./img/catalogo-aste-per-bandiere-gallo-aldo-2023.png" style="max-width:450px"></p>
              </div>
            </div>
          </div>
          <!-- row end -->

          

        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-md layout-pb-lg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div data-anim="slide-up delay-3" class="row justify-content-center">
            <div class="col-xl-10">
              <div class="sectionHeading -sm">
                <h2 class="sectionHeading__title">
                  Richiedi il Catalogo
                </h2>
                <p class="text-black leading-md mt-12">
                  Per informazioni e richieste specifiche
                  <a href="mailto:info@galloaldo.com" class="fw-700">info@galloaldo.com</a>.
                </p>
              </div>
            </div>

            <div class="w-1/1"></div>

            <div class="col-xl-10 mt-48 sm:mt-32">
              <div class="contact-form -type-1">
                <form class="row x-gap-40 y-gap-32" method="POST" action="catalog-script.php" id="formcatalogo" name="formcatalogo">
                  <div class="col-lg-6">
                    <label class="js-input-group">
                      Ragione Sociale *
                      <input type="text" name="ragionesociale" required placeholder="Ragione Sociale">
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-lg-6">
                    <label class="js-input-group">
                      P.IVA *
                      <input type="text" name="vat" placeholder="Partita Iva" required>
                      <span class="form__error"></span>
                    </label>
                  </div>
					
					<div class="col-lg-6">
                    <label class="js-input-group">
                      Codice Fiscale *
                      <input type="text" name="cf" required placeholder="Codice Fiscale">
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-lg-6">
                    <label class="js-input-group">
                      Codice SDI 
                      <input type="text" name="sdi" placeholder="SDI" >
                      <span class="form__error"></span>
                    </label>
                  </div>
					
					<div class="col-lg-6">
                    <label class="js-input-group">
                      Indirizzo *
                      <input type="text" name="indirizzo" required placeholder="indirizzo">
                      <span class="form__error"></span>
                    </label>
                  </div>
					
					<div class="col-lg-6">
                    <label class="js-input-group">
                      Località *
                      <input type="text" name="localita" required placeholder="Località">
                      <span class="form__error"></span>
                    </label>
                  </div>
					
					<div class="col-lg-6">
                    <label class="js-input-group">
                      Provincia *
                      <input type="text" name="provincia" required placeholder="Provincia">
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-lg-6">
                    <label class="js-input-group">
                      CAP *
                      <input type="text" name="cap" placeholder="CAP">
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-lg-6">
                    <label class="js-input-group">
                      Numero di Telefono *
                      <input type="text" name="phone" placeholder="Telefono" required>
                      <span class="form__error"></span>
                    </label>
                  </div>

                  <div class="col-lg-6">
                    <label class="js-input-group">
                      Email *
                      <input type="text" name="email" data-required placeholder="Email" required>
                      <span class="form__error"></span>
                    </label>
                  </div>
 					<div class="col-12">
                    <label class="js-input-group">
                      Conferma la somma come numero: 
                      <?php 
					  $answers = Array('Dieci+2','Otto+4','Sei+6!','Nove+3','Undici+1');
					  shuffle($answers);
						echo $answers[array_rand($answers)];
					  ?>
                     <input type="text" name="somma" data-required placeholder="inserisci il risultato numerico" required>
                      <span class="form__error"></span>
                    </label>
                  </div>
            
                  <div class="col-12">
                    <label class="js-input-group">
                      Messaggio
                      <textarea name="message" rows="2" placeholder="inserisci la tua richiesta"></textarea>
                      <span class="form__error"></span>
                    </label>
                  </div>

                <div class="col-12">
                    
					 <input type="checkbox" name="gdprlift" id="gdprlift" required class="css-checkbox" value="si" /><label>* Autorizzo il trattamento dei miei dati personali, ai sensi del D.lgs. 196 del 30 giugno 2003. <a href="./privacy-policy.php">Privacy Policy</a> </label>
					
                  </div>

                  <div class="col-12">
                    <button class="button -md -black text-white">
                      Invia Messaggio
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->

<!--LOAD FOOTER-->
	<?php include ("./footer.html")?>
		<!--END LOAD FOOTER-->


    </main>

  </div>
  <!-- barba container end -->


  <!-- JavaScript -->
  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>

	<script>
	$(document).ready(function() {
$("#formcatalogo").validate();
});
	</script>

</body>

</html>