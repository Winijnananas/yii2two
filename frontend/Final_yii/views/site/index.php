<?php
use app\models\Products;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$products = products::find()->where(['status'=>'1'])->all();
/*var_dump($products);*/
?>
<div class="site-index">
    <div class="mx-auto mt-3">
         <div class="shadow-lg p-3 mb-5 bg-white rounded text-center header" style="font-size:65px"><b><span class="text-success">WINIJ</span> SHOP<b></div>
    </div>
    
    <div class="row">
    <div class="carousel slide" id="carouselBestDeals" data-bs-touch="false" data-bs-interval="false">
        
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100 align-items-center g-2">
                    <?php foreach ($products as $index => $model){ ?>
                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                            <div class="card card-span h-100 text-white">
                                <img class="img-fluid h-100" src="<?=$model->image_url?>"/>
                                <div class="card-img-overlay ps-0"></div>
                                <div class="card-body ps-0 bg-200">
                                    <h5 class="fw-bold text-1000 text-truncate p-2"><?=$model->product_name?></h5>
                                    <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through p-2">$<?=($model->price+200)?></span><span class="text-primary" style="font-size:24px">$<?=$model->price?></span></div>
                                </div>
                                <!--<button></button>-->
                                <a class="stretched-link btn btn-info" href="#">buy it !</a>
                            </div>
                        </div>
                    <?php } ?>
                

                </div>
                <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                  </div>
                </div>
              </div>
    </div>
</div>
