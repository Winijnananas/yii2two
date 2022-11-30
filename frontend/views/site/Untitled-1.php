<style>
        body{
      background: -webkit-linear-gradient(left,#BAB5D8, #BAB5D8);
      }
    </style>
    <div class="mx-auto ">
        <img src="../slide/banner3.jpg" class="img-fluid" alt="Responsive image">
    </div>


    <?php
        NavBar::begin([
            'options' => [
                'class' => ' bg-light navbar-light ',
            ],
            'brandLabel' => '
                        <span class="col-md-12 text-primary">WU EXPERT</span>
                        <div class="row"/>',
            
        ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Search', 'url' => ['/personal-info/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'contact', 'url' => ['/site/contact']],
        
    ];
    
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        //$menuItems[] = ['label' => 'Cart', 'url' => ['/cart/index']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

'css/site.css',




<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../theme/assets/css/maicons.css">
    <link rel="stylesheet" href="../../theme/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../../theme/assets/css/theme.css">
    <script src="../../theme/assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../theme/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../theme/assets/vendor/wow/wow.min.js"></script>
    <script src="../../theme/assets/js/theme.js"></script>
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <div class="mx-auto mt-3">
        <img src="../assets/banner.jpg" class="img-fluid" alt="Responsive image">
    </div>
    <nav class="navbar navbar-expand-lg navbar-white bg-light sticky" data-offset="500">
    <div class="container">
    <a href="#" class="navbar-brand">WU<span class="text-primary">Expert</span></a>
    <?php
        NavBar::begin([
          'options' => [
            'class' => 'bg-light',
        ],
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'login', 'url' => ['/site/login']],
            
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $menuItems,
        ]);
        
        $menuItems2 = [
            ['label' => 'Search', 'url' => ['/personal-info/index']],
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $menuItems2,
        ]);
        NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
    </div>
</main>

<footer>
  <br>
  <br>
  <div class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
      <div class="container">
          <div class="row mb-5">
            <div class="col-lg-3 py-3">
              <h3>ExpertWU</h3>
              <p>Walailak University</p>

              <div class="social-media-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
                <a href="#"><span class="mai-logo-youtube"></span></a>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <h5>Company</h5>
              <ul class="footer-menu">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Help & Support</a></li>
              </ul>
            </div>
            <div class="col-lg-3 py-3">
              <h5>Contact Us</h5>
              <p>มหาวิทยาลัยวลัยลักษณ์ 222 ตำบลไทยบุรี อำเภอท่าศาลา จังหวัดนครศรีธรรมราช 80161.</p>
              <a href="#" class="footer-link">โทร.0-7567-3000</a>
              <a href="#" class="footer-link">แฟกซ์. 0-7567-3708</a>
              <a href="#" class="footer-link">อีเมล. wu@wu.ac.th</a>
            </div>
            <div class="col-lg-3 py-3">
              <h5>Newsletter</h5>
              <p>Get updates, news or events on your mail.</p>
              <form action="#">
                <input type="text" class="form-control" placeholder="Enter your email..">
                <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
              </form>
            </div>
          </div>

          <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
        </div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
