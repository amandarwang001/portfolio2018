<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <TITLE><?php echo $title; ?></TITLE>
    <meta name="description" content="<?php echo $meta_desc; ?>" />

    <!--CDN for bootstrap v4 alpha-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--CDN for bootstrap v4 alpha-->

    <link rel="stylesheet" href="<?= CSS_URL ?>style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="<?= IMAGE_URL ?>favicon.ico" type="image/x-icon">
    <script src="https://use.fontawesome.com/91741d7c8d.js"></script>
    <script src="<?= JS_URL ?>jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.12.0/moment.min.js"></script>
    <!--
    TODO: Create click to call in Google analytics.

    Sample click to call code

    <script type="text/javascript"
      src="//www.googleadservices.com/pagead/conversion_async.js">
    </script>
    <script type="text/javascript">
    (function(a,e,c,f,g,h,b,d){var k={ak:"843005325",cl:"_oHGCITwt3QQjfv8kQM",autoreplace:"407-123-4567"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
    </script> -->

    <!-- Example website schema
    <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "WebSite",
      "name": "Dijatek",
      "alternateName": "Dijatek Custom Web Solutions",
      "url": "https://dijatek.com/"
    }
    </script> -->

    <!-- Example Local Business Schema

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "",
      "image": "",
      "@id": "",
      "url": "",
      "telephone": "",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "",
        "addressLocality": "",
        "postalCode": "",
        "addressCountry": ""
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ,
        "opens": "",
        "closes": ""
      }
    }
    </script> -->

</head>
<body>
<div class="text-center hidden-md-up" id="callnowmobile">
    <a href="tel:4072737027"><strong class="consultation">CALL US TODAY</strong><br><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><strong>407.123.4567</strong></a>
</div>

<nav class="navbar navbar-toggleable-md navbar-light">
    <button class="navbar-toggler navbar-toggler-right my-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="../">
        <img src="<?=IMAGE_URL ?>logo.png" class="img-fluid" id="logo1">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../coding">CODING <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../about-us">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contact-us">CONTACT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./blog/">BLOG</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
            <li id="callnow" class="text-center">
                <div class="btn-nav">
                    <strong>CALL US TODAY<br><a href="tel:4079070839" class="navbar-btn"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 407.123.4567</strong></a>
                </div>
            </li>
        </ul>
    </div>
</nav>

