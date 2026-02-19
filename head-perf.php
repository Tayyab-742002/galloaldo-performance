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

  <!-- ═══════════════════════════════════════════════════════════════════
       CRITICAL CSS — inlined so the preloader renders on the very first
       paint, BEFORE any external stylesheet has loaded.
       The preloader covers 100% of the viewport, so nothing else is
       visible until JS removes it — making all other CSS non-critical.
       ═══════════════════════════════════════════════════════════════════ -->
  <style>
    :root{
      --accent-color:#FF002E;
      --bg-dark-1:#131419;--bg-dark-2:#1E2027;--bg-dark-3:#0D0D12;--bg-dark-4:#0A0A0F;
      --preloader-image:url('/img/general/loader.svg');
      --font-primary:"Inter",sans-serif;
    }
    /* Prevent scroll while preloader/nav overlay is active */
    .html-overflow-hidden{overflow:hidden!important}
    .html-overflow-hidden body{overflow-y:scroll}
    /* Preloader overlay */
    body.preloader-visible .preloader__bg{transform:scaleY(1)}
    body.preloader-visible .preloader__progress{opacity:1}
    .preloader{overflow:hidden;position:fixed;top:0;left:0;width:100%;height:100%;z-index:5000;pointer-events:none;display:flex;justify-content:center;align-items:center}
    .preloader__bg{pointer-events:auto;height:100%;width:100%;background-color:var(--bg-dark-4);will-change:transform;transform-origin:bottom;transform:scaleY(0);transition:transform 0.4s ease-in-out}
    .preloader__progress{position:absolute;z-index:200;display:flex;justify-content:center;align-items:center;width:5.5rem;height:5.5rem;background-color:#fff;opacity:0;-webkit-mask-image:var(--preloader-image);-webkit-mask-size:contain;-webkit-mask-position:center;-webkit-mask-repeat:no-repeat;mask-image:var(--preloader-image);mask-size:contain;mask-position:center;mask-repeat:no-repeat}
    .preloader__progress__inner{position:absolute;top:0;left:0;width:100%;height:100%;background-color:var(--accent-color);transform-origin:bottom;transform:scaleY(0)}
    /* Animation helpers used by GSAP preloader */
    .origin-top{transform-origin:top!important}
    /* Hero/masthead baseline so no height jump when full CSS loads */
    .bg-image{background-size:cover;background-repeat:no-repeat;background-position:center center}
    .bg-black{background-color:#000}
    .sliderMain.-type-1{position:relative;overflow:hidden;width:100%;height:100vh}
  </style>

  <!-- Vendor CSS: kept synchronous — Bootstrap grid, Swiper, icon fonts.
       Only 78 KB; sets the structural layout needed immediately.      -->
  <!-- <link rel="stylesheet" href="/css/vendors.css"> -->
   <link rel="preload" href="/css/vendors.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
   <noscript><link rel="stylesheet" href="/css/vendors.css"></noscript>

  <!-- Main CSS: loaded ASYNC — the preloader hides all content while JS is
       loading, so there is zero FOUC risk. 235 KB saved from render-blocking. -->
  <link rel="preload" href="/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/css/main.css"></noscript>

  <!-- Non-critical CSS: modal styles & WhatsApp floating button — fully async -->
  <link rel="preload" href="/css/sm.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/css/sm.css"></noscript>

  <link rel="preload" href="/wh/venom-button.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/wh/venom-button.css"></noscript>

  <!-- Google Fonts: fully non-blocking via media="print" trick.
       font-display:swap is added in vendors.css so icons show immediately. -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=swap">
  </noscript>
