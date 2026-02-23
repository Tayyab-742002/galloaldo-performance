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

    <title>Emblemi regioni italiane, puntali per aste Regioni d'Italia.</title>
   <meta name="description" content="Siamo i primi e unici produttori degli emblemi delle Regioni italiane, i puntali da mettere sulle aste delle bandiere delle Regioni.">	
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


    <main class="">


      <!-- header start -->
      <header class="header -light -sticky-light js-header" style="background: #FFFFFF">
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
                        <a href="../../en-EN/products/flagpoles-spearheads-and-emblems/index.php" aria-label="Switch to English version"><img src="../../img/uk-flag.svg" class="mw36" alt="English"></a>    
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
<!--Load top banner-->
                <?php include ("../../banner-top-categoria-prodotti.html")?>
				<!--END Load top banner-->

      <!-- section start -->
      <section class="layout-pt-md layout-pb-xs">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-xl-7 col-lg-8">
              <ul class="breadcrumbs text-black mb-40">
                <li class="breadcrumbs-item">   <a data-barba href="../../">
                    Home
                  </a>
                </li>
				 <li class="breadcrumbs-item">
                  <a data-barba href="../index.php">
                    Prodotti
                  </a>
                </li> 
				 
                <li class="breadcrumbs-item active" aria-current="page">
                  Emblemi Regioni Italiane
                </li>
              </ul>

              <div class="sectionHeading -lg">
                
				  <p><img src="../../img/italy_flag.svg" style="width: 200px"></p>
				  
				  <h1 class="sectionHeading__title">
                 Emblemi Regioni 
                </h1>
			
				  <div class="spacer-small"></div>
			   	<p><h3 style="font-size:22px;">Regioni d'Italia e Province autonome di Trento e Bolzano</h3></p>
				<p>Produciamo gli  <strong>emblemi delle regioni italiane</strong>. Offriamo emblemi ufficiali delle Regioni Italiane, oltre a quelli della Repubblica Italiana, dell'Unione Europea e di associazioni ed enti. I nostri emblemi garantiscono qualità e resistenza. Realizziamo stemmi ufficiali di tutte le 20 Regioni italiane, tra cui: Lombardia, Lazio, Veneto, Sicilia, Toscana, Piemonte, Campania, Puglia... <br>
                 <br>
Ogni emblema è riprodotto con precisione e rispetto dei simboli ufficiali. <br>
<font color="red"><b>I dischi stampati UV sono sia fronte che retro</b></font>
<br>
<br>
<em> La riproduzione, anche parziale, di questi Emblemi costituisce violazione dei diritti di proprietà industriale e intellettuale di GALLO ALDO SRL e sarà perseguita secondo quanto previsto dalle normative vigenti (Codice della Proprietà Industriale – D.lgs. 30/2005 e s.m.i.)."</em></p>
            
			
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </section>
      <!-- section end -->


      <!-- section start -->
      <section class="layout-pt-md layout-pb-md">
        <div class="section-filter">

          <!-- container start -->
          <div class="container">
            <!-- row start -->
            <div class="row y-gap-32 justify-content-between align-items-center">
             

              <div class="col-auto">
                 <a class="button -md -outline-black text-black" href="../../richiedi-catalogo.php" title="Le lance e gli emblemi per aste portabandiera a catalogo sono tutti in fusione di ottine sono rifiniti con cura">
                  Richiedi il Catalogo
                </a>
                </a>
              </div>
            </div>
            <!-- row end -->
          </div>
          <!-- container end -->


          <!-- container start -->
          <div class="container layout-pt-sm">
            <div class="masonry -col-4 -gap-32">
              <div class="masonry__sizer"></div>

            
<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-AB-EMBLEMA-REGIONE-ABRUZZO.jpg" alt="Emblema Regione Abruzzo"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Abruzzo</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/AB</p>	  
				   </div>
              </div>
              
            
              
			<!--ITEM-->
            
            
            
           
            
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-BA-EMBLEMA-REGIONE-BASILICATA.jpg" alt="Emblema Regione Basilicata"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Basilicata</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/BA</p>	  
				   </div>
              </div>
			<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-CA-EMBLEMA-REGIONE-CALABRIA.jpg" alt="Emblema Regione Calabria"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Calabria</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/CA</p>	  
				   </div>
              </div>
			<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-CM-EMBLEMA-REGIONE-CAMPANIA.jpg" alt="Emblema Regione Campania"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Campania</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/CM</p>	  
				   </div>
              </div>
				
			<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-EL-EMBLEMA-REGIONE-EMILIA-ROMAGNA.jpg" alt="Emblema Regione Emilia Romagna"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Emilia Romagna</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/EL</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-FR-EMBLEMA-REGIONE-FRIULIVENEZIA-GIULIA.jpg" alt="Emblema Regione Friuli-Venezia Giulia"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Friuli-Venezia Giulia</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/FR</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-LA-EMBLEMA-REGIONE-LAZIO.jpg" alt="Emblema Regione Lazio"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Lazio</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/LA</p>	  
				   </div>
              </div>
              
                <!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-LI-EMBLEMA-REGIONE-LIGURIA.jpg" alt="Emblema Regione Liguria"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Liguria</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/LI</p>	  
				   </div>
              </div>
            
			<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-LO-EMBLEMA-REGIONE-LOMBARDIA.jpg" alt="Emblema Regione Lombardia"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Lombardia</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/LO</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-MA-EMBLEMA-REGIONE-MARCHE.jpg" alt="Emblema Regione Marche"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Marche</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/MA</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-MO-EMBLEMA-REGIONE-MOLISE.jpg" alt="Emblema Regione Molise"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Molise</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/MO</p>	  
				   </div>
              </div>
				
				<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-PI-EMBLEMA-REGIONE-PIEMONTE.jpg" alt="Emblema Regione Piemonte"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Piemonte</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/PI</p>	  
				   </div>
              </div>
				
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-PU-EMBLEMA-REGIONE-PUGLIA.jpg" alt="Embleama Regione Puglia"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Embleama Regione Puglia</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/PU</p>	  
				   </div>
              </div>
				
				
				<!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-SA-EMBLEMA-REGIONE-SARDEGNA.jpg" alt="Emblema Regione Sardegna"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Sardegna</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/SA</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-SI-EMBLEMA-REGIONE-SICILIA.jpg" alt="Emblema Regione Sicilia"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Sicilia</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/SI</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-TO-EMBLEMA-REGIONE-TOSCANA.jpg" alt="Emblema Regione Toscana"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Toscana</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/TO</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-TR-EMBLEMA-REGIONE-TRENTINO-ALTO-ADIGE.jpg" alt="Emblema Regione Trentino Alto Adige"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Trentino Alto Adige</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/TR</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-UM-EMBLEMA-REGIONE-UMBRIA.jpg" alt="Emblema Regione Umbria"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Umbria</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/UM</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-VA-EMBLEMA-REGIONE-VALLE-D-AOSTA.jpg" alt="Emblema Regione Valle d'Aosta"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Valle d'Aosta</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/VA</p>	  
				   </div>
              </div>
				<!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-VE-EMBLEMA-REGIONE-VENETO.jpg" alt="Emblema Regione Veneto"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Regione Veneto</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/VE</p>	  
				   </div>
              </div>
			
            
            <!--ITEM-->
               <div class="masonry__item lance">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-PB-EMBLEMA-PROVINCIA-DI-BOLZANO.jpg" alt="Emblema Provincia di Bolzano"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Provincia di Bolzano</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/PB</p>	  
				   </div>
              </div>
            <!--ITEM-->
               <div class="masonry__item emblemi">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="img/emblemi/ART-186-PT-EMBLEMA-PROVINCIA-DI-TRENTO.jpg" alt="Emblema Provincia di Trento"></div>
                      </div>
                    </div>
                </div>
				   <div class="productdesc">
				  <h6 class="pb8">Emblema Provincia di Trento</h6>
				  <p class="fs12 desccodice"><strong style="padding-left:8px">Cod</strong> 186/PT</p>	  
				   </div>
              </div>
            	<!--ITEM-->
               
					

				
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


  <!-- JavaScript -->
  <script src="../../js/vendors.js" defer></script>
  <script src="../../js/main.js" defer></script>

</body>

</html>