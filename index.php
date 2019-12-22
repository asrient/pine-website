<!doctype html>
<html>
    <title>Pine</title>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/styles/common.css" />
    <link rel="stylesheet" type="text/css" href="/styles/home.css" />
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/TweenMax.min.js"></script>
    <script src="/scripts/ScrollMagic.min.js"></script>
    <script src="/scripts/animation.gsap.js"></script>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "headline": "Power up your devices with our apps.",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
    </head>
    <body>
    <?php
    $selected='Home';
     include "parts/navbar.php";
        ?>
        <?php
     include "parts/home.html";
        ?>
        <?php
     include "parts/footer.html";
        ?>
    </body>
    <script type="text/javascript" src="/scripts/home.js"></script>
</html>
