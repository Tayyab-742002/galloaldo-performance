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
 <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Funzione per caricare i contatori dal localStorage
            function loadCounters() {
                const counters = localStorage.getItem('linkCounters');
                return counters ? JSON.parse(counters) : { link1: 0 };
            }

            // Funzione per salvare i contatori nel localStorage
            function saveCounters(counters) {
                localStorage.setItem('linkCounters', JSON.stringify(counters));
            }

            // Funzione per aggiornare il testo del contatore
            function updateCounterText(linkId, count) {
                const counterElement = document.getElementById(`${linkId}-counter`);
                if (counterElement) {
                    counterElement.innerText = count;
                }
            }

            // Inizializza i contatori dai dati salvati nel localStorage
            const linkCounters = loadCounters();

            // Aggiorna il testo dei contatori all'avvio della pagina
            for (const linkId in linkCounters) {
                if (linkCounters.hasOwnProperty(linkId)) {
                    updateCounterText(linkId, linkCounters[linkId]);
                }
            }

            // Seleziona tutti i link con la classe "track-link"
            const links = document.querySelectorAll('.track-link');

            // Aggiungi un event listener a ciascun link
            links.forEach(link => {
                link.addEventListener('click', (event) => {
                    // Ottieni l'ID del link dal dataset
                    const linkId = event.currentTarget.dataset.linkId;

                    // Incrementa il contatore per il link specifico
                    linkCounters[linkId] = (linkCounters[linkId] || 0) + 1;

                    // Aggiorna il testo dell'elemento del contatore specifico
                    updateCounterText(linkId, linkCounters[linkId]);

                    // Salva i contatori aggiornati nel localStorage
                    saveCounters(linkCounters);
                });
            });
        });
    </script>
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

  <title>Certificazione ISO 9001:2015 Gallo Aldo.</title>
  <meta name="description" content="Certificazione ISO 9001:2015. Il progetto è iniziato a fine 2023 e nel Giugno 2024, abbiamo conseguito la certificazione ISO 9001:2015.">	
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
                        <a href="./en-EN/staff.php"><img src="https://www.galloaldo.com/flag/uk-flag.svg" class="mw36"></a>    
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
      <section class="layout-pt-lg layout-pb-lg">
        <!-- container start -->
        <div data-anim-wrap class="container">

          <!-- row start -->
          <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-10">
              <div data-anim-child="slide-up" class="sectionHeading -lg">
                <p class="sectionHeading__subtitle">
                  Certificazione ISO 9001:2015<br>
					<img src="img/italy_flag.svg" style="max-width:200px">
                </p>
				
                <h2 class="sectionHeading__title fw-700">
                  Abbiamo ottenuto la certificazione ISO 9001:2015
                </h2>
              </div>
            </div>
          </div>
          <!-- row end -->


          <!-- row start -->
          <div class="row x-gap-60 y-gap-60 layout-pt-md">

			   <div class="sectionHeading -lg">
                
				 
				   <div class="spacer-small"></div>
			   <p>Il progetto è iniziato a fine 2023 e nel Giugno 2024, abbiamo conseguito la certificazione ISO 9001:2015, 
			   ricevendo così l’attestazione ufficiale <b>della qualità dei nostri processi aziendali dall’ente certificatore Bureau Veritas</b>.
La GALLO ALDO si impegna costantemente per ottenere risultati sempre migliori per quanto riguarda il soddisfacimento delle esigenze dei nostri utenti in termini di qualità, affidabilità, sicurezza, tempestività, puntualità e flessibilità.
Qual è quindi il nostro valore aggiunto?
Il valore aggiunto fornito dalla certificazione accreditata è la garanzia che la GALLO ALDO persegue gli obiettivi e le responsabilità fondamentali per la qualità, analizzando in profondità tutte le sue attività, i processi delle organizzazioni, le esigenze espresse ed implicite dei clienti e delle altre parti interessate.
Ora, resta solo che affidarvi al sistema <strong>GALLO ALDO</strong>.
<div style="height:40px;"></div>
<br>
<div style="text-align: center;">
  <img src="certificazione.png" style="width:40%;">
</div>
     
<br><br>
Clicca l'icona del pdf per scaricare il certificato.<br>
<a href="gallo-aldo-iso-9001-2025.pdf" target="_blank" class="track-link" data-link-id="link1"><img src="pdf.png" alt="PDF"></a>
    <br><br>Il documento è stato scaricato: <span id="link1-counter">0</span> volte.



</p>
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

</body>

</html>