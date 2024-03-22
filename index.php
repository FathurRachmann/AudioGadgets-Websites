<?php
session_start();
?>
<!DOCTYPE html>
<html data-wf-domain="motorkita.webflow.io" data-wf-page="63e700db68bea5c2fff2576f" data-wf-site="63e700db68bea50e2ef2576c" data-wf-status="1">
  <head>
    <meta charset="utf-8" />
    <title>Tugas Akhir</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["Lora:regular,italic,700", "Oxygen:300,regular,700"]
        }
      });
    </script>
    <!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script>
		<![endif]-->
    <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
    <link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon" />
  </head>
  <body>
    <div>
      <div data-collapse="tiny" data-animation="over-right" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
        <div class="w-container">
          <a href="/" aria-current="page" class="logo w-nav-brand w--current">
            <div class="long-text">Tugas Akhir.</div>
          </a>
          <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="index.php" aria-current="page" class="nav-link w-nav-link w--current">Beranda</a>
            <a href="#Recom" class="nav-link w-nav-link">Rekomendasi</a>
            <a href="#Trend" class="nav-link w-nav-link">Tentang</a>
            <div data-hover="false" data-delay="0" class="dropdown w-dropdown">
              
            <a href="#" class="close-x w-hidden-main w-hidden-medium w-hidden-small">×</a>
          </nav>
          <div class="menu-button w-hidden-main w-hidden-medium w-hidden-small w-clearfix w-nav-button">
            <div class="menu-icon w-icon-nav-menu"></div>
            <div class="menu-link">MENU</div>
          </div>
        </div>
      </div>
      <div class="hero-section wf-section">
        <div class="hero-content w-container">
          <div style="-webkit-transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="hero-heading">Audiophile</div>
          <div style="opacity:0;-webkit-transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="hero-subheading">suara yang indah menjadikan hidup lebih baik.</div>
          <a href="#Trend" style="opacity:0" class="button w-button">Jelajahi Sekarang</a>
        </div>
      </div>

      <div id="posts" class="main-section bottom-padding wf-section">
        <div id="Recom" class="w-container">

          <div class="inner-hero category wf-section">
        <div class="container">
          <h1 class="hero-header" >Rekomendasi</h1>
          <div class="hero-subheading"></div>
        </div>
    </div>
    </div>

      <div id="posts" class="main-section wf-section">
        <div class="w-container">
          <div class="w-form">

            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="post" class="form w-clearfix" action="rekomendasi.php#Hasil">
              <label for="Tipe" class="field-label-4">Tipe</label>
              <select id="Tipe" name="Tipe" data-name="Tipe" required="" class="w-select">
              <option value="">Pilih</option>
                      <option value="IEM">IEM</option>
                      <option value="TWS">TWS</option>
                      <option value="Headphone">Headphone</option>
                      <option value="Wireless Headphone">Wireless Headphone</option>
              </select>
              <label for="Fungsi" class="field-label-6">Fungsi</label>
              <select id="Fungsi" name="Fungsi" data-name="Fungsi" required="" class="w-select">
              <option value="">Pilih</option>
                      <option value="Daily">Daily</option>
                      <option value="Gaming">Gaming</option>
                      <option value="Editing">Editing</option>
                      <option value="Meetings">Meetings</option>
              </select>
              <label for="Fitur" class="field-label-7">Fitur</label>
              <select id="Fitur" name="Fitur" data-name="Fitur" required="" class="w-select">
              <option value="">Pilih</option>
                      <option value="0">Tidak ada</option>
                      <option value="1">ANC</option>
                      <option value="2">Transparency Mode</option>
                      <option value="3">ANC & Transparency Mode</option>
              </select>
              <label for="Koneksi" class="field-label-6">Ukuran Koneksi</label>
              <select id="Koneksi" name="Koneksi" data-name="Koneksi" required="" class="w-select">
              <option value="">Pilih</option>
                      <option value="Bluetooth">Bluetooth</option>
                      <option value="Kabel">Kabel</option>
              </select>
              <input type="submit" value="Cari Rekomendasi" data-wait="Please wait..." class="submit-button-2 w-button" />
              <div class="full-divider"></div>
            </form>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        </div>
        </div>

        <?php
            if (isset($_SESSION['Hasil'])) {
        ?>      

            <div class="med-divider-copy"></div>
            <h2 class="section-title">Motor yang mungkin sesuai dengan rekomendasi</h2>
          </div>
          <div class="w-dyn-list">
            <div role="list" class="w-clearfix w-dyn-items w-row">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

$query = "SELECT * FROM dbaudio";
$result = mysqli_query($conn, $query);
print_r($data);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
              <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
                <a href="rekomendasi.php" data-w-id="cf8f6867-3332-011e-41e5-d1c43ed27997" class="thumbnail-wrapper w-inline-block">
                  <div class="image-wrapper">
                    <div style="background-image:url('<?php echo $row["img"] ?>');-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="thumbnail-image"></div>
                    <div class="category-tag"><?php echo $row["tipe"] ?></div>
                  </div>
                  <div class="thumbnail-text">
                    <div class="blog-title"><?php echo $row["brand"] ?></div>
                    <div class="details w-clearfix">
                      <div class="preview-text-2"><?php echo $row["fitur"] ?></div>
                      <div class="thumbnail-date"><?php echo $row["harga"] ?></div>
                    </div>
                  </div>
                  <div class="details-1 w-clearfix">
                    <img src="https://media-public.canva.com/yoZ9c/MAEpGoyoZ9c/1/tl.png" alt="" class="author-img" />
                    <div class="author-title"><?php echo $row["Authors"] ?></div>
                    <div class="thumbnail-date">March 3, 2023</div>
                  </div>
                </a>
              </div>
            <?php
                }
            } else {
                echo "<div>0 results</div>";
            }
            header('Location: rekomendasi.php');
            $conn->close();
            ?>
            </div>
          </div>
        </div>
      </div>
          <?php
            session_destroy(); // Stop the session
            }
          ?>

        <div class="w-container">
          <div class="section-heading">
          <div id="Trend" class="w-container">

          </div>
          <div class="w-dyn-list">
            <div role="list" class="w-clearfix w-dyn-items w-row">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM dbaudio";
            $result = mysqli_query($conn, $sql);


            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
              
              <?php
                  }
              } else {
                  echo "<div>0 results</div>";
              }
              $conn->close();
              ?>
              
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      
      <div class="main-section dark wf-section">
        <div class="w-container">
          <div class="section-heading">
          </div>
          <div class="form-wrapper w-form">
          </div>
        </div>
        <div class="footer-section">
          <div class="w-container">
            <div class="w-row">
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63e700db68bea50e2ef2576c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="style/style.js" type="text/javascript"></script>
    <!--[if lte IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script>
		<![endif]-->
  </body>
</html>