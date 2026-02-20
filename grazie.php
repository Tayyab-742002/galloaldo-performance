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

  <title>Grazie per aver contattato Gallo Aldo.</title>
  <meta name="description" content="Puoi contattare Gallo a Concesio, Gallo Aldo è un'azienda specializzata nella produzione e commercializzazione di aste, pennoni e pali per bandiere.">	
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
                        <a href="./en-EN/contact.php"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36"></a>    
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
                  La tua richiesta è stata presa in carico. 
                </p>
                <h1 class="sectionHeading__title leading-sm">
                  Siamo i migliori nel campo degli accessori per bandiere.
                </h1>
				   <h4 class="leading-sm pt-16">
                  A breve ti faremo avere un preventivo rispetto alla tua richiesta.
                </h4>
              </div>
            </div>
          </div>
          <!-- row end -->

          <!-- row start -->
          <div data-anim-child="slide-up delay-2" class="row justify-content-center layout-pt-md">
            <div class="col-xl-10">
              <div class="row x-gap-48 y-gap-48">
                <div class="col-lg-3 col-md-6 col-sm-8">
                  <h4 class="text-xl fw-600">
                    Indirizzo
                  </h4>
                  <div class="text-dark mt-12">
                    <p>Via della Stella 54 25062 Concesio, BS</p>
                  </div>
					
					  <div class="social -bordered mt-16 md:mt-12">

                    <a class="social__item text-black border-dark" href="https://www.facebook.com/galloasteperbandiere" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>

                    <a class="social__item text-black border-dark" href="https://www.instagram.com/gallo_aldo_concesio/?hl=it" target="_blank">
                      <i class="fa fa-instagram"></i>
                    </a>

                    

                  </div>
					
                </div>

                <div class="col-lg-auto offset-lg-1 col-md-6">
                  <h4 class="text-xl fw-600">
                    Contatti
                  </h4>
                  <div class="text-dark mt-12">
                    <div>
                      <a class="button -underline" href="mailto:info@galloaldo.com">info@galloaldo.com</a>
                    </div>
                    <div class="mt-4">
						Tel <a class="button -underline" href="tel:+390308900679">+39-030.8900679</a>
                    </div>
					 <div class="mt-4">
                      Tel <a class="button -underline" href="tel:+393312128211">+39-3312128211</a><br>(Simone Resp. Commerciale)
                    </div>
					  <div class="mt-4">
                      <a class="button -underline" href="https://wa.me/+393487688606">+39-3487688606<br>
Ufficio (Whatsapp Chat)</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-auto offset-lg-1">
                  <h4 class="text-xl fw-600">
                    E-mail
                  </h4>
                  <div class="text-dark mt-12">
                    <div>
                      <strong>Info</strong> <a class="button -underline" href="mailto:info@galloaldo.com">info@galloaldo.com</a>
                    </div>
                    <div class="mt-4">
                      <strong>Ordini</strong> <a class="button -underline" href="mailto:magazzino@galloaldo.com">magazzino@galloaldo.com</a>
                    </div>
					 <div class="mt-4">
                      <strong>Spedizioni</strong> <a class="button -underline" href="mailto:logistica@galloaldo.com">logistica@galloaldo.com</a>
                    </div> 
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


      <!-- section start -->
      <section class="layout-pt-md layout-pb-lg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div data-anim="slide-up delay-3" class="row justify-content-center">
            <div class="col-xl-10">
              <div class="sectionHeading -sm">
                <h2 class="sectionHeading__title">
                  Inviaci la tua richiesta
                </h2>
                <p class="text-black leading-md mt-12">
                  Compila il seguente form o inviaci un’email a <a href="mailto:info@galloaldo.com">info@galloaldo.com</a>.
                </p>
              </div>
            </div>

            <div class="w-1/1"></div>

            <div class="col-xl-10 mt-48 sm:mt-32">
              <div class="contact-form -type-1">
                <form class="row x-gap-40 y-gap-32" method="POST" action="sendmailag.php" id="formcontatto" name="formcontatto">
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
                      <input type="text" name="sdi" placeholder="SDI">
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
                      Località
                      <input type="text" name="localita" data-required placeholder="Località">
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
                      <input type="text" name="cap" placeholder="CAP" required>
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
                      <input type="text" name="email" required placeholder="Email">
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
  <script src="js/vendors.js" defer></script>
  <script src="js/main.js" defer></script>
<script src="./validate/jquery.min.js" defer></script>
<script src="./validate/jquery.validate.min.js" defer></script>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
$("#formcontatto").validate();
});
	</script>

</body>

</html>