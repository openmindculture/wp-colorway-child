<!DOCTYPE html><html <?php language_attributes(); ?>
<head>
  <meta charset="utf-8">
  <!-- ?php wp_head(); ? -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>KleiderOrdnung Berlin: nachhaltige Modeberatung von Tina Steinke</title>
  <meta name=language content="de">
  <link rel="canonical" href="https://kleiderordnung.berlin/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Henderson webfonts -->
  <!-- preload project font files -->
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/1be57243-bc0a-482e-a7f4-0c95f5fd6930.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/23c3a7e2-fd1b-4416-8d19-bf7e93f3c50c.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/1abe8255-18cb-4cb2-8d6c-f6973e71dda4.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Ivy Mode webfonts -->
  <!-- preload project font files -->
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/17af_vdef_emp_883a.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/17ae_vdef_emp_8839.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f" as="font" type="font/woff2" crossorigin>
  <!-- load licensed font styles from TypeNetwork / Fastly CDN server -->
  <!--
  <link href="https://fastly-cloud.typenetwork.com/projects/7215/fontface.css?64529db9" rel="stylesheet" type="text/css">
  -->
  <style>
    /** include critical CSS from KLEIDERORDNUNG_DIR . '/css/typography.css.php' */
    <?php include( KLEIDERORDNUNG_DIR . '/css/typography.css.php') ?>
  </style>

  <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri() ?>/style.css?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" type="text/css">
  <!-- defer loading of optional components as shown on web.dev -->
  <link rel="preload" media="screen" href="<?php echo get_template_directory_uri() ?>/css/animate.min.css?v=4.1.1" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" media="print" href="<?php echo get_template_directory_uri() ?>/css/print.css?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.min.css?v=4.1.1">
  </noscript>
  <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" type="text/javascript"></script>
  <meta name="description" content="Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin">
  <meta name="keywords" content="Slow Fashion,Circular Fashion,nachhaltige Mode, Nachhaltigkeit,Stilberatung,Stil,Beratung,Mode,Shopping,einkaufen,kombinieren,aussehen,aufräumen,aussortieren,Kleiderschrank,Check,Begleitung,Berlin">
  <!-- TODO check and adapt all header and social attribute values! -->
  <meta name="author" content="ingo" >
  <meta name="google-site-verification" content="google123todo">
  <meta name="robots" content="noindex,nofollow"><!-- temporary block on preview site TODO remove finally -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="true">
  <meta name="google" content="notranslate">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/kleider-ordnung-logo.png">
  <meta property="og:title" content="Kleiderordnung Berlin: nachhaltige Modeberatung von Tina Steinke">
  <meta property="og:description" content="Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin">
  <meta property="og:url" content="https://www.kleiderordnung-berlin.de/">
  <meta property="og:site_name" content="">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#f3ebde">
  <!-- TODO link rel="me" -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#f3ebde">
  <meta name="msapplication-TileColor" content="#f3ebde">
</head>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>

<div id="cmplz-cookiebanner-container"></div>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kleiderordnung' ); ?></a>
<header class="site-header has-inline-mobile-toggle" id="masthead" aria-label="Site" role="banner" itemtype="https://schema.org/WPHeader" itemscope>
  <div class="inside-header grid-container">
    <div class="site-logo">
      <a href="<?php echo get_template_directory_uri() ?>/" rel="home">
        <svg width="269" height="37" viewBox="0 0 269 37" fill="none">
          <title>kleiderordnung</title>
          <path d="M121.13 18.89C121.13 21.37 122.07 23.63 123.61 25.34C131.86 22.07 136.08 12.17 136.08 12.17C136.08 12.17 134.36 19.57 125.67 26.51C123.33 28.18 120.88 29.91 119.8 30.58V30.65H122.83C123.61 29.48 124.48 28.49 125.88 27.19C127.3 28.02 128.96 28.5 130.73 28.5C136.04 28.5 140.34 24.2 140.34 18.89V9.28H130.73C125.42 9.28 121.12 13.58 121.12 18.89H121.13ZM52.95 10.46V28.1H59.31V9.07H59.17L52.94 10.46H52.95ZM52.34 3.79L56.13 7.58L59.92 3.79L56.13 0L52.34 3.79ZM43.54 26.07C40.09 26.07 37.82 23.67 37.75 17.78H49.53C49.8 13.51 47.67 9.28 41.44 9.28C35.21 9.28 31.18 13.14 31.18 19.37C31.18 25.06 35.18 28.51 40.52 28.51C43.84 28.51 47.05 27.29 49.59 23.53L49.18 23.29C47.42 25.32 45.46 26.07 43.53 26.07H43.54ZM41.14 9.82C43.17 9.82 44.66 12.73 44.05 17.23H37.75C37.82 13.17 38.93 9.82 41.14 9.82ZM9.96 14.86L6.95 17.5L17.65 29.52H17.85V20.92L11.79 14.15C13.82 12.42 15.62 11.17 17.92 9.75V9.68H14.94C13.86 11.31 12.6 12.56 9.96 14.86ZM21.3 2.4V28.1H27.66V0.68H27.52L21.29 2.41L21.3 2.4ZM0 2.4V28.1H6.36V0.68H6.22L0 2.4ZM267.98 11.98L268.45 7.99C265.44 7.99 264.32 9.72 263.74 11.1C262.22 9.95 260.05 9.31 257.54 9.31C252.56 9.31 248.77 11.88 248.77 15.81C248.77 18.35 250.26 20.28 252.63 21.33L252.26 21.53C250.2 22.75 249.11 23.83 249.11 25.46C249.11 27.09 250.02 28.74 253.14 28.91L259.34 29.25C263.13 29.45 264.25 30.27 264.25 31.76C264.25 34.1 260.97 35.69 256.23 35.69C252.84 35.69 250.98 34.1 250.98 31.53C250.98 30.89 251.12 30.18 251.35 29.4H251.21L247.86 30.35C247.66 30.89 247.56 31.37 247.56 31.81C247.56 34.89 251.93 36.24 256.23 36.24C262.05 36.24 267.64 33.8 267.64 29.13C267.64 26.15 265.44 24.63 260.97 24.39L254.03 24.02C252.47 23.95 252.2 23.24 252.2 22.9C252.2 22.49 252.34 22.16 252.81 21.85L253.22 21.58C254.4 21.99 255.79 22.22 257.28 22.22C262.22 22.22 266.01 19.65 266.01 15.72C266.01 13.99 265.33 12.57 264.22 11.52C264.56 11.32 264.93 11.25 265.47 11.25C266.25 11.25 267.2 11.59 267.98 11.99V11.98ZM257.45 21.7C255.35 21.7 254.47 19.4 254.47 15.71C254.47 12.02 255.08 9.82 257.38 9.82C259.44 9.82 260.36 12.16 260.36 15.85C260.36 19.54 259.68 21.71 257.45 21.71V21.7ZM222.64 9.07H222.5L216.27 10.46V24.85C215.19 26.07 214.27 26.68 213.29 26.68C210.78 26.68 210.75 23.9 210.75 22.72V9.08H210.61L204.38 10.47V21.98C204.38 26.45 206.68 28.51 210.51 28.51C213.35 28.51 215.01 27.16 216.3 25.56L217.28 28.51L223.37 27.02L222.63 24.79V9.08L222.64 9.07ZM177.82 0.68H177.68L171.45 2.41V10.5C170.37 9.76 169.01 9.28 167.35 9.28C162.14 9.28 157.97 13.48 157.97 19.34C157.97 24.76 161.49 28.51 165.86 28.51C168.26 28.51 170.02 27.36 171.51 25.67L172.46 28.51L178.55 27.02L177.81 24.79V0.68H177.82ZM171.45 24.89C170.23 26.31 169.28 26.75 168.13 26.75C165.9 26.75 164.68 25.19 164.68 18.9C164.68 13.18 165.7 9.86 168.24 9.86C169.9 9.86 171.05 11.35 171.46 13.38V24.89H171.45ZM194.24 9.28C191.53 9.28 189.87 10.43 188.48 11.95V9.07H188.34L182.11 10.46V28.1H188.47V12.63C189.55 11.48 190.47 11.11 191.45 11.11C193.96 11.11 193.99 13.89 193.99 15.07V28.1H200.36V15.81C200.36 11.34 198.06 9.28 194.23 9.28H194.24ZM239.1 9.28C236.39 9.28 234.73 10.43 233.34 11.95V9.07H233.2L226.97 10.46V28.1H233.33V12.63C234.41 11.48 235.33 11.11 236.31 11.11C238.82 11.11 238.85 13.89 238.85 15.07V28.1H245.22V15.81C245.22 11.34 242.92 9.28 239.09 9.28H239.1ZM98.49 26.07C95.04 26.07 92.77 23.67 92.7 17.78H104.48C104.75 13.51 102.62 9.28 96.39 9.28C90.16 9.28 86.13 13.14 86.13 19.37C86.13 25.06 90.13 28.51 95.47 28.51C98.79 28.51 102 27.29 104.54 23.53L104.13 23.29C102.37 25.32 100.41 26.07 98.48 26.07H98.49ZM96.09 9.82C98.12 9.82 99.61 12.73 99 17.23H92.7C92.77 13.17 93.88 9.82 96.09 9.82ZM82.68 0.68H82.54L76.31 2.41V10.5C75.23 9.76 73.87 9.28 72.21 9.28C67 9.28 62.83 13.48 62.83 19.34C62.83 24.76 66.35 28.51 70.72 28.51C73.12 28.51 74.88 27.36 76.37 25.67L77.32 28.51L83.41 27.02L82.67 24.79V0.68H82.68ZM76.31 24.89C75.09 26.31 74.14 26.75 72.99 26.75C70.76 26.75 69.54 25.19 69.54 18.9C69.54 13.18 70.56 9.86 73.1 9.86C74.76 9.86 75.91 11.35 76.32 13.38V24.89H76.31ZM119.31 9.28C116.81 9.28 114.6 11.75 114.13 15.71H114.06V9.07H113.92L107.89 10.46V28.1H114.25V16.93C114.45 14.83 115.74 13.58 117.36 13.58C117.9 13.58 118.51 13.75 119.12 14.02L120.74 9.48C120.6 9.45 119.96 9.28 119.28 9.28H119.31ZM151 15.71H150.93V9.07H150.79L144.76 10.46V28.1H151.12V16.93C151.32 14.83 152.61 13.58 154.23 13.58C154.77 13.58 155.38 13.75 155.99 14.02L157.61 9.48C157.47 9.45 156.83 9.28 156.15 9.28C153.65 9.28 151.44 11.75 150.97 15.71H151Z" fill="#0014D1"/>
        </svg>
      </a>
    </div>
    <nav class="main-navigation mobile-menu-control-wrapper" id="mobile-menu-control-wrapper" aria-label="Mobile Toggle">
      <div class="menu-bar-items"></div>
      <button data-nav="site-navigation" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
      <span class="gp-icon icon-menu-bars"><svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z" /></svg><svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z" /></svg></span><span class="screen-reader-text">Menü</span>		</button>
    </nav>
    <nav class="main-navigation has-menu-bar-items sub-menu-right" id="site-navigation" aria-label="Primary"  itemtype="https://schema.org/SiteNavigationElement" itemscope>
      <div class="inside-navigation grid-container">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
          <span class="gp-icon icon-menu-bars"><svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z" /></svg><svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z" /></svg></span><span class="mobile-menu">Menü</span>				</button>
        <div id="primary-menu" class="main-nav">
          <ul id="menu-main-menu" class=" menu sf-menu"><li id="menu-item-1857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1857"><a href="https://hausordnung.open-mind-culture.org/angebot">Angebot</a></li>
            <li id="menu-item-1856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1856"><a href="https://hausordnung.open-mind-culture.org/mission">Mission</a></li>
            <li id="menu-item-1855" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1855"><a href="https://hausordnung.open-mind-culture.org/stories">Stories</a></li>
            <li id="menu-item-1854" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1854"><a href="https://hausordnung.open-mind-culture.org/news">News</a></li>
            <li id="menu-item-1853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1853"><a href="https://hausordnung.open-mind-culture.org/kontakt">Kontakt</a></li>
            <li id="menu-item-1859-de" class="lang-item lang-item-8 lang-item-de current-lang lang-item-first menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-1859-de">
              <a href="https://hausordnung.open-mind-culture.org/" hreflang="de-DE" lang="de-DE" title="Deutsch">DE</a>/<a href="https://hausordnung.open-mind-culture.org/en/kleiner-beispiel-content-english" hreflang="en-US" lang="en-US" title="English">EN</a>
            </li>
          </ul>
        </div>
        <div class="menu-bar-items"></div>
      </div>
    </nav>
  </div>
</header>
<!-- TODO remove all of the default WordPress utility classes to prevent compatibility issues with WP core -->


<main id="wp--skip-link--target">

  <!-- Hero Banner Key Visual Image, TODO: replace using SVG shapes and animated text on a circle -->
  <img
    src="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg" height="581" width="1160"
    srcset="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung@2x.jpg 2x"
    loading="eager"
    alt="Tina Steinke Photography"
  >

  <div class="wp-block-group has-global-padding is-layout-constrained">

    <h1 class="wp-block-post-title">Beispiel Content (src/index.php)</h1>
  </div>

  <div class="entry-content wp-block-post-content">
    <h2 class="wp-block-heading">Zwischenüberschrift</h2>

    <p>Beispiel Absatz und Bild: WordPress (Block) Class Names bei Bildern ...</p>

    <figure class="wp-block-image size-full"><img decoding="async" width="600" height="80" src="http://hausordnung.open-mind-culture.org/wp-content/uploads/coming-soon-600-padded.png" data-src="http://hausordnung.open-mind-culture.org/wp-content/uploads/coming-soon-600-padded.png" alt="Coming Soon" class="wp-image-1804 lazy loaded" data-srcset="https://hausordnung.open-mind-culture.org/wp-content/uploads/coming-soon-600-padded.png 600w, https://hausordnung.open-mind-culture.org/wp-content/uploads/coming-soon-600-padded-300x40.png 300w" data-sizes="(max-width: 600px) 100vw, 600px" sizes="(max-width: 600px) 100vw, 600px" srcset="https://hausordnung.open-mind-culture.org/wp-content/uploads/coming-soon-600-padded.png 600w, https://hausordnung.open-mind-culture.org/wp-content/uploads/coming-soon-600-padded-300x40.png 300w" data-was-processed="true"></figure>

    <p>In den folgenden Absätzen das Kontaktformular und einen Complianz-Code einfügen: auch hier WordPress / Plugin Class Names</p>

    <div class="columns__column-wrapper columns__column-wrapper--lg">

      <div class="columns__column columns__column-50">
        <!-- BEGIN vcard imprint contact information - TODO: update using rel=me etc. -->
        <article id=kontakt class=target-offset><address class="vcard contrast--varies contrast--more"><div><div class=fn itemprop=name>Martina Steinke</div><div class=street-address>Donaustr. 83, <span class=postal-code>12043</span> Berlin</div><div>Tel. <a class=telephone itemprop=telephone href=tel:+491636823820><span class=visually-spaced>0</span><span class="visually-spaced dot-after">163</span><span class=visually-spaced>682</span><span class=visually-spaced>382</span><span class=visually-spaced>0</span></a></div><div><a class=email itemprop=email itemscope href=mailto:martinasteinke@posteo.de>martinasteinke@posteo.de</a></div><div><a itemscope class=url rel=author href="https://www.kleiderordnung-berlin.de/">www.kleiderordnung-berlin.de</a></div><br><div>Mitglied bei <a href="https://fashionchangers.de/" target=_blank rel=noopener&quot;>Fashion Changers</a> und <span class="role jobtitle" itemprop=jobTitle>nachhaltige Modeberaterin</span> bei <a href=https://www.sustainable-stylists.com target=_blank rel=noopener>Sustainable Stylists</a>.</div></div><div class=social><a href="https://www.instagram.com/kleider.ordnung/" target=_blank rel=noopener title="kleider.ordnung auf Instagram"><svg x=0px y=0px width=25 height=25 viewbox="0 0 512 512"><path style=fill:currentColor d=M256,49.471c67.266,0,75.233.257,101.8,1.469,24.562,1.121,37.9,5.224,46.778,8.674a78.052,78.052,0,0,1,28.966,18.845,78.052,78.052,0,0,1,18.845,28.966c3.45,8.877,7.554,22.216,8.674,46.778,1.212,26.565,1.469,34.532,1.469,101.8s-0.257,75.233-1.469,101.8c-1.121,24.562-5.225,37.9-8.674,46.778a83.427,83.427,0,0,1-47.811,47.811c-8.877,3.45-22.216,7.554-46.778,8.674-26.56,1.212-34.527,1.469-101.8,1.469s-75.237-.257-101.8-1.469c-24.562-1.121-37.9-5.225-46.778-8.674a78.051,78.051,0,0,1-28.966-18.845,78.053,78.053,0,0,1-18.845-28.966c-3.45-8.877-7.554-22.216-8.674-46.778-1.212-26.564-1.469-34.532-1.469-101.8s0.257-75.233,1.469-101.8c1.121-24.562,5.224-37.9,8.674-46.778A78.052,78.052,0,0,1,78.458,78.458a78.053,78.053,0,0,1,28.966-18.845c8.877-3.45,22.216-7.554,46.778-8.674,26.565-1.212,34.532-1.469,101.8-1.469m0-45.391c-68.418,0-77,.29-103.866,1.516-26.815,1.224-45.127,5.482-61.151,11.71a123.488,123.488,0,0,0-44.62,29.057A123.488,123.488,0,0,0,17.3,90.982C11.077,107.007,6.819,125.319,5.6,152.134,4.369,179,4.079,187.582,4.079,256S4.369,333,5.6,359.866c1.224,26.815,5.482,45.127,11.71,61.151a123.489,123.489,0,0,0,29.057,44.62,123.486,123.486,0,0,0,44.62,29.057c16.025,6.228,34.337,10.486,61.151,11.71,26.87,1.226,35.449,1.516,103.866,1.516s77-.29,103.866-1.516c26.815-1.224,45.127-5.482,61.151-11.71a128.817,128.817,0,0,0,73.677-73.677c6.228-16.025,10.486-34.337,11.71-61.151,1.226-26.87,1.516-35.449,1.516-103.866s-0.29-77-1.516-103.866c-1.224-26.815-5.482-45.127-11.71-61.151a123.486,123.486,0,0,0-29.057-44.62A123.487,123.487,0,0,0,421.018,17.3C404.993,11.077,386.681,6.819,359.866,5.6,333,4.369,324.418,4.079,256,4.079h0Z></path><path style=fill:currentColor d=M256,126.635A129.365,129.365,0,1,0,385.365,256,129.365,129.365,0,0,0,256,126.635Zm0,213.338A83.973,83.973,0,1,1,339.974,256,83.974,83.974,0,0,1,256,339.973Z></path><circle style=fill:currentColor cx=390.476 cy=121.524 r=30.23></circle></svg></a> <a href=https://www.reflecta.network/changemaker/martina-steinke target=_blank rel=noopener title="reflecta network"><svg xmlns=http://www.w3.org/2000/svg width=36 height=32 viewbox="0 0 36 32"><g fill=none fill-rule=evenodd><g fill-rule=nonzero><g><path fill=currentColor d="M11.515 21.8v-6.794c0-.588.133-1.079.398-1.473.265-.394.648-.591 1.15-.591.53 0 .917.161 1.161.484.244.322.365.706.365 1.15v.494h2.623c.015-.086.033-.236.054-.451.022-.215.033-.43.033-.645 0-1.018-.27-1.835-.807-2.451-.537-.616-1.3-.925-2.29-.925-.616 0-1.15.122-1.601.366-.452.244-.796.509-1.032.795-.237.287-.384.51-.441.667l-.387-1.613H8.419V21.8h3.096zm12.144.215c.889 0 1.71-.154 2.462-.462.753-.308 1.358-.789 1.817-1.44.458-.653.688-1.46.688-2.42h-3.01c0 .717-.19 1.258-.57 1.624-.38.365-.9.548-1.559.548-.73 0-1.308-.24-1.73-.72-.423-.48-.635-1.079-.635-1.796v-.516h7.525V15.2c0-.946-.229-1.766-.688-2.461-.458-.695-1.068-1.226-1.827-1.591-.76-.366-1.584-.549-2.473-.549h-.344c-1.017 0-1.931.215-2.74.645-.81.43-1.452 1.054-1.925 1.871-.473.817-.71 1.777-.71 2.881v.623c0 1.118.233 2.082.7 2.892.465.81 1.106 1.43 1.923 1.86.817.43 1.735.645 2.752.645h.344zm1.806-6.902h-4.343c.058-.688.283-1.254.678-1.698.394-.444.906-.667 1.537-.667.745 0 1.286.212 1.623.635.337.423.505 1 .505 1.73z" transform="translate(-16 -12) translate(16 12)"></path><path fill=currentColor d="M9 0c.552 0 1 .448 1 1 0 .527-.408.96-.925.997L9 2H2v28h7c.527 0 .96.408.997.925L10 31c0 .527-.408.96-.925.997L9 32H1c-.527 0-.96-.408-.997-.925L0 31V1C0 .473.408.04.925.003L1 0h8z" transform="translate(-16 -12) translate(16 12)"></path><path fill=currentColor d="M34.5 0c.552 0 1 .448 1 1 0 .527-.408.96-.925.997L34.5 2h-7v28h7c.527 0 .96.408.997.925L35.5 31c0 .527-.408.96-.925.997L34.5 32h-8c-.527 0-.96-.408-.997-.925L25.5 31V1c0-.527.408-.96.925-.997L26.5 0h8z" transform="translate(-16 -12) translate(16 12) matrix(-1 0 0 1 61 0)"></path></g></g></g></svg></a> <a href=https://www.xing.com/profile/Martina_Steinke11 target=_blank rel=noopener title=XING><svg height=25 width=25 x=0px y=0px viewbox="0 0 400 400" style="enable-background:new 0 0 455.731 455.731"><g><rect x=0 y=0 style=fill:currentColor width=455.731 height=455.731></rect><g><polygon style=fill:#c3cfbb points="161.915,124.199 89.249,124.199 129.915,200.199 74.582,291.532 147.249,291.532 202.582,200.199"></polygon><polygon style=fill:#c3cfbb points="304.582,66.199 381.149,66.199 268.482,264.199 342.382,389.532 265.916,389.532 191.916,264.199"></polygon></g></g></svg></a></div></address></article>
        <!-- END vcard imprint contact information -->
      </div>

      <div class="columns__column columns__column-50">
        <!-- BEGIN generated markup by WPCF7 Contact Forms 7 - TODO: replace with plugin shortcode in production site -->
        <div class="wpcf7 js" id="wpcf7-f1816-p1033-o1" lang="de-DE" dir="ltr">
          <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
          <form action="/#wpcf7-f1816-p1033-o1" method="post" class="wpcf7-form init" aria-label="Kontaktformular" novalidate="novalidate" data-status="init">
            <div style="display: none;">
              <input type="hidden" name="_wpcf7" value="1816">
              <input type="hidden" name="_wpcf7_version" value="5.7.6">
              <input type="hidden" name="_wpcf7_locale" value="de_DE">
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1816-p1033-o1">
              <input type="hidden" name="_wpcf7_container_post" value="1033">
              <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <p><label> Dein Name<br>
              <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="your-name"></span> </label>
            </p>
            <p><label> Deine E-Mail-Adresse<br>
              <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email"></span> </label>
            </p>
            <p><label> Betreff<br>
              <span class="wpcf7-form-control-wrap" data-name="your-subject"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="your-subject"></span> </label>
            </p>
            <p><label> Deine Nachricht (optional)<br>
              <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="your-message"></textarea></span> </label>
            </p>
            <p><span class="wpcf7-form-control-wrap" data-name="anfrage-style-visit"><span class="wpcf7-form-control wpcf7-checkbox contact__checkbox contact__checkbox--style-visit" id="anfrage-style-visit"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="anfrage-style-visit[]" value="Style Visit"><span class="wpcf7-list-item-label">Style Visit</span></label></span></span></span>
            </p>
            <p><span class="wpcf7-form-control-wrap" data-name="anfrage-shopping-tour"><span class="wpcf7-form-control wpcf7-checkbox contact__checkbox contact__checkbox--shopping-tour" id="anfrage-shopping-tour"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="anfrage-shopping-tour[]" value="Shopping Tour"><span class="wpcf7-list-item-label">Shopping Tour</span></label></span></span></span>
            </p>
            <p><input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Absenden"><span class="wpcf7-spinner"></span>
            </p><div class="wpcf7-response-output" aria-hidden="true"></div>
          </form>
        </div>
        <!-- END generated markup by WPCF7 Contact Forms 7 -->
      </div>
    </div>

  </div>
</main>

<footer id="footer" role="contentinfo" class="site-footer">
  Footer Content
</footer>
</div>

</body>
</html>