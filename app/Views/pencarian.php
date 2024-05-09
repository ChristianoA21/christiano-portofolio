<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="aset/css/search.css">
    <link rel="icon" href="/aset/img/logo.png">

    <title>Christiano - Portfolio</title>
    <script>
      var x = 0;
      
      function showDiv(toggle) {
        if (x == 0) {
          document.getElementById(toggle).style.display = 'block'; 
          x = 1;
          document.getElementById("panah").style.display = 'none';
          document.getElementById("panah-2").style.display = 'inline';
          document.getElementById(toggle).style.paddingTop = '20px'; 
          document.getElementById(toggle).style.animation = 'ask 0.3s';
        } else {
          document.getElementById(toggle).style.display = 'none'; 
          x = 0;
          document.getElementById("panah").style.display = 'inline';
          document.getElementById("panah-2").style.display = 'none';
        }
      }
    </script>
  </head>
  <body>

    <?php echo view('partials/navbar'); ?>

    <div class="container content">
      <div class="row">
        <div class="col-md-8">
          <div class="profile">
            <h3 class="nama">Christiano Anugerah</h3>
            <p class="deskripsi">Pelajar</p>
            <img src="./aset/img/profile.jpg" alt="Profle" class="foto-1">
          </div>
        </div>
        <div class="col-md-4">
          <div class="info">
            <p>
              Christiano Anugerah adalah seorang lulusan dari SMKN 6 Kota Bekasi yang memiliki pengalaman selama kurang lebih dua tahun di bidang pengembangan situs web. Dalam perjalanannya, ia telah memperoleh pemahaman yang mendalam terhadap bahasa pemrograman front-end seperti HTML dan CSS. Saat ini, Christiano sedang <a href="./profilia.html">Lainnya</a>
            </p>
            <br>
            <p>
              Born: July 21 2006, <a href="https://www.google.com/search?q=jakarta&oq=jakarta&aqs=chrome.0.0i271j46i433i512j0i433i512j0i131i433i512l2j0i131i433j46i175i199i433i512l2j0i131i433j0i512.2322j0j7&sourceid=chrome&ie=UTF-8">Jakarta, Indonesian</a>
              <br>
              <br>
              Education: <a href="https://www.smkn6kotabekasi.sch.id/">SMKN 6 Kota Bekasi </a> (2021-2024)
              <br>
              <br>
              Height: 1.7 m
              <br>
              <br>
              Nationality: Indonesian
            </p>
            
          </div>
        </div>
      </div>
    </div>

      <div class="container utama">
        <div class="wiki">
          <div class="row">
            <div class="col-md-8 pertama">
              <h4 class="judul"><a href="<?= base_url() ?>profilia">Christiano - Profilia</a></h2>
              <p>Christiano Anugerah adalah seorang lulusan dari SMKN 6 Kota Bekasi yang memiliki pengalaman selama kurang lebih dua tahun di bidang pengembangan situs web.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container people">
        <h4>People Ask</h4>
        <div class="ask col-md-8">
          <button type="button" name="answer" onclick="showDiv('toggle')">Siapa itu Christiano Anugerah? <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16" id="panah">
            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
          </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-up" viewBox="0 0 16 16" id="panah-2" style="display: none;">
            <path fill-rule="evenodd" d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894l6-3z"/>
          </svg>
        </button>
          <div id="toggle" style="display:none">Christiano Anugerah adalah manusia biasa yang memiliki keinginan untuk bisa di andalkan dalam setiap kerja sama tim.</div>
        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./aset/js/square.js"></script>
    <script src="./aset/js/hidden.js"></script>

  </body>
</html>