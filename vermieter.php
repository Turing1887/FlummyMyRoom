<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FlummyMyRoom</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--<link rel="stylesheet" href="css/normalize.css">-->
        <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" href="img/faviconFl.ico" type="image/x-icon">
<link rel="icon" href="img/faviconFl.ico" type="image/x-icon">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <section class="menuVermieter">
          <!-- <img src="img/Flummimyroom_Logo.png" class="flummylogo"> -->
          <nav class="menu-content">
            <div class="exit-btn" id="exitBtn">X</div>
            <ul>
              <li id="calendar-btn" class="calendar-btn" style="background-image: url('img/event-txt.png');"></li>
              <li id="flummi-btn" style="background-image: url('img/flummi-txt.png');"></li>
              <li id="qm-btn" class="qm-btn" style="background-image: url('img/calc-txt.png');"></li>
              <li class="contact" style="background-image: url('img/contact-txt.png');"></li>
            </ul>
          </nav>
        </section>
<!-- class="editor-btn" -->
        <section class="calculator" style="display:none;">
            <input type="number" id="qm-val"></input>
            <button id="calc-btn">Go!</button>

        </section>

        <!--<script src="js/plugins.js"></script>-->
        <script src="js/main.js"></script>
    </body>
</html>
