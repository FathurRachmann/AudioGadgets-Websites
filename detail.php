<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Ambil nilai ID dari URL
$id = $_GET['id'];

// Kueri ke database untuk mengambil data yang sesuai
$query = "SELECT * FROM dbaudio WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
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
            <div class="long-text">Detail</div>
          </a>
          <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="index.php" aria-current="page" class="nav-link w-nav-link w--current">Beranda</a>
            <a href="#Recom" class="nav-link w-nav-link">Rekomendasi</a>
            <a href="index.php#Trend" class="nav-link w-nav-link">Tentang</a>
            <div data-hover="false" data-delay="0" class="dropdown w-dropdown">
              
            <a href="#" class="close-x w-hidden-main w-hidden-medium w-hidden-small">×</a>
          </nav>
          <div class="p-5 bg-light mb-4">
    <h1 class=""> </h1><br>
    <!-- Breadcrumb -->
    <nav class="d-flex">
      <h6 class="mb-0">
        <a href="" class="text-reset">Beranda</a>
        <span>/</span>
        <a href="" class="text-reset">Detail</a>
        <span>/</span>
        <a href="" class="text-reset"><u><?php echo "" . $data['brand'] . ""?></u></a>
      </h6>
    </nav>
    <!-- Breadcrumb -->
  </div>
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
    <div class="main-section wf-section">
      <div class="w-container">
        <div class="section-heading">
          <h1 class="blog-post-title"><?php echo "" . $data['brand'] . ""?></h1>
          <div class="blog-date">October 6, 2015</div>
          <a href="/categories/manual" data-w-expand="category" style="color:#a872b7" class="blog-category"><?php echo "" . $data['tipe'] . ""?></a>
          <div class="full-divide"></div>
          <div class="w-dyn-list">
            <script type="text/x-wf-template" id="wf-template-0713f488-a5b1-4ed1-724d-349045212610">%3Cdiv%20role%3D%22listitem%22%20class%3D%22w-dyn-item%20w-dyn-repeater-item%22%3E%3Ca%20href%3D%22%23%22%20class%3D%22w-inline-block%20w-lightbox%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fuploads-ssl.webflow.com%2F63e700db68bea5557df25782%2F63e852e38c09971920b9d161_honda-cb150r-streetfire-dan-cbr150r1588.jpg%22%20loading%3D%22lazy%22%20alt%3D%22%22%20sizes%3D%22(max-width%3A%20479px)%2094vw%2C%20(max-width%3A%20767px)%2095vw%2C%20(max-width%3A%20991px)%20728px%2C%20940px%22%20srcset%3D%22https%3A%2F%2Fuploads-ssl.webflow.com%2F63e700db68bea5557df25782%2F63e852e38c09971920b9d161_honda-cb150r-streetfire-dan-cbr150r1588-p-500.jpg%20500w%2C%20https%3A%2F%2Fuploads-ssl.webflow.com%2F63e700db68bea5557df25782%2F63e852e38c09971920b9d161_honda-cb150r-streetfire-dan-cbr150r1588-p-800.jpg%20800w%2C%20https%3A%2F%2Fuploads-ssl.webflow.com%2F63e700db68bea5557df25782%2F63e852e38c09971920b9d161_honda-cb150r-streetfire-dan-cbr150r1588-p-1080.jpg%201080w%2C%20https%3A%2F%2Fuploads-ssl.webflow.com%2F63e700db68bea5557df25782%2F63e852e38c09971920b9d161_honda-cb150r-streetfire-dan-cbr150r1588.jpg%201200w%22%2F%3E%3Cscript%20type%3D%22application%2Fjson%22%20class%3D%22w-json%22%3E%7B%0A%20%20%22items%22%3A%20%5B%0A%20%20%20%20%7B%0A%20%20%20%20%20%20%22url%22%3A%20%22https%3A%2F%2Fuploads-ssl.webflow.com%2F63e700db68bea5557df25782%2F63e852e38c09971920b9d161_honda-cb150r-streetfire-dan-cbr150r1588.jpg%22%2C%0A%20%20%20%20%20%20%22type%22%3A%20%22image%22%0A%20%20%20%20%7D%0A%20%20%5D%2C%0A%20%20%22group%22%3A%20%22pics%22%0A%7D%3C%2Fscript%3E%3C%2Fa%3E%3C%2Fdiv%3E</script>
            <div role="list" class="w-dyn-items">
              <div role="listitem" class="w-dyn-item w-dyn-repeater-item">
                <a href="#" class="w-inline-block w-lightbox">
                  <img src="<?php echo "" . $data['img'] . ""?>" loading="lazy" alt="" sizes="(max-width: 479px) 94vw, (max-width: 767px) 95vw, (max-width: 991px) 728px, 940px" srcset="<?php echo "" . $data['img'] . ""?> 500w, h<?php echo "" . $data['img'] . ""?> 800w, <?php echo "" . $data['img'] . ""?> 1080w, <?php echo "" . $data['img'] . ""?> 1200w" />
                  <script type="application/json" class="w-json">
                    {
                      "items": [{
                        "url": "https://uploads-ssl.webflow.com/63e700db68bea5557df25782/63e852e38c09971920b9d161_honda-cb150r-streetfire-dan-cbr150r1588.jpg",
                        "type": "image"
                      }],
                      "group": "pics"
                    }
                  </script>
                </a>
              </div>
            </div>

            <div class="w-dyn-hide w-dyn-empty">
              <div>No items found.</div>
            </div>
          </div>
        </div>
        <div class="blog-post w-richtext">
          <h2>
            <strong>Review</strong>
          </h2>
          <p><?php echo "" . $data['Review'] . ""?></p>
          <h2>
            <strong>Why Is Readability Important To Writability?</strong>
          </h2>
          <p>Scarcely on striking packages by so property in delicate. Up or well must less rent read walk so be. Easy sold at do hour sing spot. Any meant has cease too the decay. Since party burst am it match. By or blushes between besides offices noisier as. Sending do brought winding compass in. Paid day till shed only fact age its end.</p>
          <p>Considered an invitation do introduced sufficient understood instrument it. Of decisively friendship in as collecting at. No affixed be husband ye females brother garrets proceed. Least child who seven happy yet balls young. Discovery sweetness principle discourse shameless bed one excellent. Sentiments of surrounded friendship dispatched connection is he. Me or produce besides hastily up as pleased.</p>
          <p>You vexed shy mirth now noise. Talked him people valley add use her depend letter. Allowance too applauded now way something recommend. Mrs age men and trees jokes fancy. Gay pretended engrossed eagerness continued ten. Admitting day him contained unfeeling attention mrs out.</p>
          <p>He moonlight difficult engrossed an it sportsmen. Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to. Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor.</p>
          <p>Why painful the sixteen how minuter looking nor. Subject but why ten earnest husband imagine sixteen brandon. Are occasional celebrated motionless unaffected. Evil make to no five they. Stuff at avoid Ten scarcely distance moreover handsome age although. As when have find fine or said no mile. He in dispatched in imprudence dissimilar be possession unreserved insensible. She evil face fine calm have now. Separate screened he outweigh of distance landlord. Confined so graceful building opinions whatever trifling in.</p>
          <h2>
            <strong>How To Create A Readable Blog?</strong>
          </h2>
          <p>Now for manners use has company believe parlors. Least nor party who wrote while did. Excuse formed as is agreed admire so on result parish. Put use set uncommonly announcing and travelling. Allowance sweetness direction to as necessary. Principle oh explained excellent do my suspected conveying in. Excellent you did therefore perfectly supposing described.</p>
          <p>Two assure edward whence the was. Who worthy yet ten boy denote wonder. Weeks views her sight old tears sorry. Additions can suspected its concealed put furnished. Met the why particular devonshire decisively considered partiality. Certain it waiting no entered is. Passed her indeed uneasy shy polite appear denied. Oh less girl no walk. At he spot with five of view.</p>
          <h3>
            <strong>A Little Project:</strong>
          </h3>
          <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing. Rapid it on hours hills it seven years. If polite he active county in spirit an. Mrs ham intention promotion engrossed assurance defective. Insisted out differed ham man endeavor expenses. At on he total their he songs. Related compact effects is on settled do.</p>
        </div>
        <div>
          <div class="full-divide"></div>
          <div class="author-wrapper">
            <a href="/authors/mat-vogels" data-w-expand="authors" class="author-link w-inline-block">
              <img data-w-expand="authors" src="https://uploads-ssl.webflow.com/63e700db68bea5557df25782/63e700db68bea5f0f6f257c7_128-14.jpg" alt="" class="author-photo" />
            </a>
            <a href="/authors/mat-vogels" data-w-expand="authors" class="author-name">Mat Vogels</a>
            <div class="smallest-divider"></div>
            <div data-w-expand="authors" class="author-bio w-richtext">
              <p>My name is Mat Vogels and I’m a freelance designer from Denver, Colorado. After graduating college with a degree in Finance, I started working at Webflow as a designer and my career was changed forever!</p>
            </div>
            <div>
              <a href="https://twitter.com/webflowapp" data-w-expand="authors" class="social-link w-inline-block">
                <img src="https://uploads-ssl.webflow.com/63e700db68bea50e2ef2576c/63e700db68bea50490f257a3_social-18.svg" alt="" />
              </a>
              <a data-w-expand="authors" href="http://instagram.com" class="social-link w-inline-block">
                <img src="https://uploads-ssl.webflow.com/63e700db68bea50e2ef2576c/63e700db68bea5b20af257a1_social-07.svg" alt="" />
              </a>
              <a href="https://www.facebook.com/webflow" data-w-expand="authors" class="social-link w-inline-block">
                <img src="https://uploads-ssl.webflow.com/63e700db68bea50e2ef2576c/63e700db68bea52fb4f257cd_social-03.svg" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-section gray">
      <div class="w-container">
        <div class="section-heading">
          <h2>Motor Serupa</h2>
          <div class="med-divider"></div>
        </div>
        <div class="w-dyn-list">
          <div role="list" class="w-clearfix w-dyn-items w-row">
            <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-3">
              <a href="/blog/this-is-my-new-post" data-w-id="38873f1b-fb6c-7ab7-bfe8-8929fbeb9146" aria-current="page" class="thumbnail-wrapper w-inline-block w--current">
                <div class="image-wrapper">
                  <div style="background-image:url(&quot;https://uploads-ssl.webflow.com/63e700db68bea5557df25782/63e700db68bea578d8f25832_photo-1443926818681-717d074a57af.jpg&quot;);-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="thumbnail-image"></div>
                  <div style="background-color:#a872b7" class="category-tag">Manual</div>
                </div>
                <div class="thumbnail-text">
                  <div class="blog-title">The Road Ahead</div>
                  <div class="preview-text">The road ahead might be paved - it might not be.</div>
                </div>
                <div class="thumb-details w-clearfix">
                  <img src="https://uploads-ssl.webflow.com/63e700db68bea5557df25782/63e700db68bea5f0f6f257c7_128-14.jpg" alt="" class="author-img" />
                  <div class="author-title">Mat Vogels</div>
                  <div class="thumbnail-date">10/6/2015</div>
                </div>
              </a>
            </div>
            <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-3">
              <a href="/blog/sunny-side-up" data-w-id="38873f1b-fb6c-7ab7-bfe8-8929fbeb9146" class="thumbnail-wrapper w-inline-block">
                <div class="image-wrapper">
                  <div style="background-image:url(&quot;https://uploads-ssl.webflow.com/63e700db68bea5557df25782/63e700db68bea5031ff2581c_photo-1431329842981-433c8635c2b9.jpg&quot;);-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="thumbnail-image"></div>
                  <div style="background-color:#a872b7" class="category-tag">Manual</div>
                </div>
                <div class="thumbnail-text">
                  <div class="blog-title">Sunny Side Up</div>
                  <div class="preview-text">No place is ever as bad as they tell you it’s going to be.</div>
                </div>
                <div class="thumb-details w-clearfix">
                  <img src="https://uploads-ssl.webflow.com/63e700db68bea5557df25782/63e700db68bea5f0f6f257c7_128-14.jpg" alt="" class="author-img" />
                  <div class="author-title">Mat Vogels</div>
                  <div class="thumbnail-date">9/25/2015</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-section dark wf-section">
      <div class="w-container">
        <div class="section-heading">
          <h2 class="white">Cari Motor Bekas</h2>
          <div class="med-divider"></div>
        </div>
        <div class="form-wrapper w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get" class="w-clearfix">
            <input type="text" class="field w-input" maxlength="256" name="Cari" data-name="Cari" placeholder="Cari motor yang diinginkan" id="Cari" required="" />
            <input type="submit" value="Cari" data-wait="Please wait..." class="submit-button w-button" />
          </form>
          <div class="success-message w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form</p>
          </div>
        </div>
      </div>
      <div class="footer-section">
        <div class="w-container">
          <div class="w-row">
            <div class="w-col w-col-4 w-col-small-4">
              <a href="/" class="footer-logo w-inline-block">
                <div class="long-text">MotorKita.</div>
              </a>
            </div>
            <div class="footer-links w-col w-col-8 w-col-small-8">
              <a href="/" class="footer-link">Saran dan kritik</a>
              <a href="/categories" class="footer-link">tentang kita</a>
              <a href="/about" class="footer-link">masuk</a>
              <a href="/contact" class="footer-link">daftar</a>
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