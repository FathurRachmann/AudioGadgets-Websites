<?php
session_start();

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "test");

// Query untuk mengambil data kategori
$query = "SELECT * FROM dbaudio";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html data-wf-domain="motorkita-46184d319ba7d98c49b7996eb9618.webflow.io" data-wf-page="63f2bd0f057a0b1b0a9a76ef" data-wf-site="63f2bd0f057a0b33169a76ea" data-wf-status="1">
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
            <div class="long-text">Rekomendasi</div>
          </a>
          <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="index.php" aria-current="page" class="nav-link w-nav-link w--current">Beranda</a>
            <a href="#Recom" class="nav-link w-nav-link">Rekomendasi</a>
            <a href="index.php#Trend" class="nav-link w-nav-link">Trending</a>
            <div data-hover="false" data-delay="0" class="dropdown w-dropdown">
              
            <a href="#" class="close-x w-hidden-main w-hidden-medium w-hidden-small">×</a>
          </nav>
          <div class="menu-button w-hidden-main w-hidden-medium w-hidden-small w-clearfix w-nav-button">
            <div class="menu-icon w-icon-nav-menu"></div>
            <div class="menu-link">MENU</div>
          </div>
        </div>
      </div>
      <div class="inner-hero category wf-section">
        <div class="container">
          
          <div class="hero-subheading"></div>
        </div>
      </div>
      <div id="posts" class="main-section wf-section">
        <div class="w-container">
          <div class="w-form">

            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="post" class="form w-clearfix" action="rekomendasi.php#Hasil">
              <label for="Tipe" class="field-label-4">Cari apa?</label>
              <select id="Tipe" name="Tipe" data-name="Tipe" required="" class="w-select">
              <option value="">Pilih jenis perangkat</option>
                      <option value="IEM">IEM</option>
                      <option value="TWS">TWS</option>
                      <option value="Headphone">Headphone</option>
                      <option value="Wireless Headphone">Wireless Headphone</option>
              </select>
              <label for="Fungsi" class="field-label-6">Untuk Kebutuhan apa?</label>
              <select id="Fungsi" name="Fungsi" data-name="Fungsi" required="" class="w-select">
              <option value="">Pilih kebutuhan</option>
                      <option value="Daily">Daily</option>
                      <option value="Gaming">Gaming</option>
                      <option value="Editing">Editing</option>
                      <option value="Meetings">Meetings</option>
              </select>
              <label for="Fitur" class="field-label-7">Butuh Fitur apa?</label>
              <select id="Fitur" name="Fitur" data-name="Fitur" required="" class="w-select">
              <option value="">Pilih fitur</option>
                      <option value="0">Tidak ada</option>
                      <option value="1">ANC</option>
                      <option value="2">Transparency Mode</option>
                      <option value="3">ANC & Transparency Mode</option>
              </select>
              <label for="Koneksi" class="field-label-6">Kabel / Bluetooth</label>
              <select id="Koneksi" name="Koneksi" data-name="Koneksi" required="" class="w-select">
              <option value="">Pilih koneksi</option>
                      <option value="Bluetooth">Bluetooth</option>
                      <option value="Kabel">Kabel</option>
              </select>
              <input type="submit" value="Cari Rekomendasi" data-wait="Please wait..." class="submit-button-2 w-button" />
            </form>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="med-divider-copy"></div>
        <div id="Hasil" class="w-container">
            <h2 class="section-title">Hasil Rekomendasi Saat Ini</h2>
          </div>
          <div class="w-dyn-list">
            <div role="list" class="w-clearfix w-dyn-items w-row">
        <?php
            $form = isset($_POST['Form']) ? $_POST['Form'] : '';
            $tipe = isset($_POST['Tipe']) ? $_POST['Tipe'] : '';
            $fungsi = isset($_POST['Fungsi']) ? $_POST['Fungsi'] : '';
            $koneksi = isset($_POST['Koneksi']) ? $_POST['Koneksi'] : '';
            $fitur = isset($_POST['Fitur']) ? $_POST['Fitur'] : '';
            
            // menampilkan isi dari array
            $sql = "SELECT id, brand, tipe, harga, fitur, koneksi, fungsi, img, Review FROM dbaudio WHERE tipe='$tipe'";
            $sql = "SELECT id, brand, tipe, harga, fitur, koneksi, fungsi, img, Review  FROM dbaudio WHERE fitur='$fitur'";
            $sql = "SELECT id, brand, tipe, harga, fitur, koneksi, fungsi, img, Review  FROM dbaudio WHERE fungsi='$fungsi'";
            $sql = "SELECT id, brand, tipe, harga, fitur, koneksi, fungsi, img, Review  FROM dbaudio WHERE koneksi='$koneksi'";
            
            $result = mysqli_query($conn, $sql);
            
            // mengonversi hasil query menjadi array
            $data = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            // Menampilkan data produk
            
            //print_r($data);
            
            $w = array(1,2,3,4,5);
            
            // Normalisasi matriks keputusan
            foreach ($data as &$p) {
                $p['harga'] = ($p['harga'] - 1000000) / (10000000 - 100000);
                $p['fitur'] /= 9;
                $p['tipe'] = ($tipe);
            }  
            
            // Menghitung nilai akhir setiap data
            foreach ($data as &$p) {
                $p['nilai'] = ($w[2] * $p['fitur']) + ($w[1] * (($p['fungsi'] == $fungsi) ? 1 : 0)) + ($w[3] * (($p['koneksi'] == $koneksi) ? 1 : 0)) + ($w[0] * (1 - $p['harga'])) + ($w[4] * (($p['tipe'] == $tipe) ? 1 : 0));
            }

            // Mengurutkan data dari yang terbaik ke yang terburuk
            usort($data, function($a, $b) {
                return $b['nilai'] - $a['nilai'];
            });
            
            $counter = 0;
            $conn = mysqli_connect("localhost", "root", "", "test");

            // Query untuk mengambil data kategori
            $query = "SELECT harga FROM dbaudio";
            $result = mysqli_query($conn, $query);
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            foreach ($data as $key => $value) {
            ?>
              <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
                <a href="detail.php?id=<?php echo $value["id"] ?>" data-w-id="cf8f6867-3332-011e-41e5-d1c43ed27997" class="thumbnail-wrapper w-inline-block">
                  <div class="image-wrapper">
                    <div style="background-image:url('<?php echo $value["img"] ?>');-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="thumbnail-image"></div>
                    <div class="category-tag">Rekomendasi</div>
                  </div>
                  <div class="thumbnail-text">
                    <div class="blog-title"><?php echo $value["brand"] ?></div>
                    <div class="details w-clearfix">
                      <div class="preview-text-2"><?php echo $value["tipe"] ?></div>
                      <div class="thumbnail-date"><?php echo $value["koneksi"] ?></div>
                    </div>
                  </div>
                  <div class="details-1 w-clearfix">
                    <img src="https://media-public.canva.com/yoZ9c/MAEpGoyoZ9c/1/tl.png" alt="" class="author-img" />
                    <div class="author-title"></div>
                    <div class="thumbnail-date">March 3, 2023</div>
                  </div>
                </a>
              </div>
            <?php
            $counter++;//print_r($data);
            if ($counter == 6) {
                break;
            }

        }
        
          ?>

      
  </body>
</html>