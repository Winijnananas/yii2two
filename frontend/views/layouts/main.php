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
    <!-- <script src="../../theme/assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../theme/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../theme/assets/vendor/wow/wow.min.js"></script>
    <script src="../../theme/assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <link href="../assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="d-flex flex-column h-100">
  <?php $this->beginBody() ?>

  <header>
      <div class="mx-auto mt-3">
          <img src="../slide/banner3.jpg" class="img-fluid" alt="Responsive image">
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
              
          ];
          if (Yii::$app->user->isGuest) {
            // $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            // $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            // $menuItems[] = ['label' => 'Login', 'url' => ['/web/index']];
        } else {
            $menuItems[] = ['label' => 'Create', 'url' => ['/personal-info/create']];
            // $menuItems[] = ['label' => 'Update', 'url' => ['/personal-info/upadmin']];
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
  <br>
  <br>
  <br>
            
  <section class="">
    <!-- Footer -->
    <footer class="bg-secondary text-white text-center">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">About us</h5>

            <p>
            มหาวิทยาลัยวลัยลักษณ์ 222 ตำบลไทยบุรี อำเภอท่าศาลา จังหวัดนครศรีธรรมราช 80161.
            
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Number Contact</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">โทร : 0-7567-3000</a>
              </li>
              <li>
                <a href="#!" class="text-white">แฟกซ์ :0-7567-3708</a>
              </li>
              <li>
                <a href="#!" class="text-white">อีเมล : wu@wu.ac.th</a>
              </li>
              <li>
                <!-- <a href="https://ces.wu.ac.th/" class="text-white">https://ces.wu.ac.th/main/</a> -->
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Website</h5>

            <ul class="list-unstyled">
              <li>
                <a href="https://ces.wu.ac.th/" class="text-white">https://ces.wu.ac.th/main/</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Winijnan.com</a>
      </div>
    </footer>
  </section>
  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
