<?php
/**
 * head-perf.php — Shared performance-optimized head resources.
 * Include once inside <head> on every page:
 *   <?php include_once $_SERVER['DOCUMENT_ROOT'].'/head-perf.php'; ?>
 *
 * Uses absolute server-relative paths (/css/...) so this works
 * from any directory depth (root, azienda/, en-EN/, notizie/blog/, etc.)
 *
 * Each page still provides its own:
 *   <title>, <meta name="description">, <link rel="canonical">
 *   <link rel="preload" as="image" ...> for its specific LCP element
 *   Structured data <script type="application/ld+json">
 */
?>

  <!-- Preconnect: eliminate DNS + TCP round-trips for external resources -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Preload critical local icon fonts (used in header & nav on every page) -->
  <link rel="preload" href="/fonts/fontawesome-webfont-v=4.7.0.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/fonts/icomoon-ipuuib.woff" as="font" type="font/woff" crossorigin>

  <!-- Critical CSS — inlined for first paint. -->
  <style>
    :root{
      --accent-color:#FF002E;
      --bg-dark-1:#131419;--bg-dark-2:#1E2027;--bg-dark-3:#0D0D12;--bg-dark-4:#0A0A0F;
      --font-primary:"Inter",sans-serif;
    }
    /* Prevent scroll while nav overlay is active */
    .html-overflow-hidden{overflow:hidden!important}
    .html-overflow-hidden body{overflow-y:scroll}
    /* Preloader removed — hide residual HTML still present in pages */
    .preloader{display:none!important}
    /* Hero/masthead baseline so no height jump when full CSS loads */
    .bg-image{background-size:cover;background-repeat:no-repeat;background-position:center center}
    .bg-black{background-color:#000}
    .sliderMain.-type-1{position:relative;overflow:hidden;width:100%;height:100vh}
    /* Prevent CLS for images that have width/height attrs but no explicit height: auto rule */
    img.responsive-img{height:auto}
  </style>

  <!-- Vendor CSS: Bootstrap grid, Swiper, icon fonts. -->
   <link rel="preload" href="/css/vendors.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
   <noscript><link rel="stylesheet" href="/css/vendors.css"></noscript>

  <!-- Main CSS: loaded async -->
  <link rel="preload" href="/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/css/main.css"></noscript>

  <!-- Non-critical CSS: modal styles & WhatsApp floating button — fully async -->
  <link rel="preload" href="/css/sm.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/css/sm.css"></noscript>

  <link rel="preload" href="/wh/venom-button.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/wh/venom-button.css"></noscript>

  <!-- Google Fonts: fully non-blocking via media="print" trick.
       display=optional: no font-swap after first paint → eliminates CLS from
       late-arriving woff2 files. On first uncached visit the system font is used;
       on repeat visits the font is served from cache within the optional block window. -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=optional"
        media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=optional">
  </noscript>
