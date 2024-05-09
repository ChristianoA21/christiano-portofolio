<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?= base_url() ?>aset/img/logo.png" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url() ?>aset/css/style.css" />

    <title>Christiano - Portfolio</title>
    <script>
      var b = 0;

      function nightMode() {
        if (b == 0) {
          document.getElementById("black").style.backgroundColor = "#202124";
          b = 1;
          document.getElementById("myVideo").style.display = "none";
          document.getElementById("mode-1").style.display = "none";
          document.getElementById("mode-2").style.display = "none";
          document.getElementById("mode-3").style.display = "block";
          document.getElementById("mode-3").style.animationName = "fadein";
          document.getElementById("mode-3").style.animationDuration = ".3s";
          document.getElementById("menu-black").style.display = "none";
          document.getElementById("menu-white").style.display = "block";
        } else if (b == 1) {
          document.getElementById("myVideo").style.display = "block";
          document.getElementById("mode-3").style.display = "none";
          document.getElementById("mode-1").style.display = "none";
          document.getElementById("mode-2").style.display = "block";
          document.getElementById("mode-2").style.animationName = "fadein";
          document.getElementById("mode-2").style.animationDuration = ".3s";
          b = 2;
        } else {
          document.getElementById("black").style.backgroundColor = "#ffff";
          document.getElementById("black").style.backgroundImage = "none";
          b = 0;
          document.getElementById("myVideo").style.display = "none";
          document.getElementById("mode-1").style.display = "block";
          document.getElementById("mode-2").style.display = "none";
          document.getElementById("mode-3").style.display = "none";
          document.getElementById("mode-1").style.animationName = "fadein";
          document.getElementById("mode-1").style.animationDuration = ".3s";
          document.getElementById("menu-white").style.display = "none";
          document.getElementById("menu-black").style.display = "block";
        }
      }
    </script>
  </head>
  <body id="black">
    <video autoplay muted loop id="myVideo">
      <source src="./aset/video/videoplayback.mp4" type="video/mp4" />
      Your browser does not support HTML5 video.
    </video>

    <nav>
      <div class="nav">
        <button class="btn mode" id="mode" onclick="nightMode()">
          <img
            src="./aset/img/night-mode.png"
            alt="night-mode"
            class="mode-1"
            id="mode-1"
          /><img
            src="./aset/img/brightness.png"
            alt="light-mode"
            class="mode-2"
            id="mode-2"
          /><img
            src="./aset/img/snow.png"
            alt="snow-mode"
            class="mode-3"
            id="mode-3"
          />
        </button>
        <a>
          <img
            src="./aset/img/icons8-squared-menu-24 (1).png"
            alt="menubutton"
            class="menu-black"
            id="menu-black"
          />
          <img
            src="./aset/img/icons8-squared-menu-24.png"
            alt="menubutton"
            class="menu-white"
            id="menu-white"
          />
        </a>
        <a href="<?= base_url() ?>contact"
          ><button class="btn btn-primary">Contact</button></a
        >
      </div>
    </nav>
    <section class="position-relative">
      <div class="judul position-absolute top-50 start-50 translate-middle">
        <p>
          <span style="color: #4285f4; font-size: 80px">W</span
          ><span style="color: #ea4335">o</span
          ><span style="color: #fbbc05">r</span
          ><span style="color: #4285f4">l</span
          ><span style="color: #34a853">d</span>
        </p>
      </div>
      <div class="intro position-absolute top-50 start-50 translate-middle">
        <form action="">
          <input type="text" class="border" id="border" />
          <p class="lead"></p>
        </form>
      </div>
    </section>
    <div class="button-group">
      <a href="<?= base_url() ?>all">
        <button class="btn" onclick="">Cari</button>
      </a>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/EasePack.min.js"></script>
    <script src="aset/js/script.js"></script>
  </body>
</html>
