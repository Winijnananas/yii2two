<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */

#$this->title = $model->_id;

$this->title = $model->firstname." ".$model->lastname;
//$this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personal-info-view">

   <!-- <p>
        <?= Html::a('Update', ['update', '_id' => (string) $model->_id], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->
    

    

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<!------ Include the above in your HEAD tag ---------->

<head>

   
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--- css --->
  
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@600&display=swap');
    body{
        font-family: 'Noto Sans Thai', sans-serif;
        background-color: #BAB5D880;
            }
    .bg{
    background: #AC2DFF;
    }
    .emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #FF6240;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #7D32AD ;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
    
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
    font-family: 'Noto Sans Thai', sans-serif;
}
.profile-tab p{
    font-weight: 600;
    color: #7D32AD ;
    
}
</style>


<hr>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?=$model->image_url?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                        <br>
                        <label>Current Position :</label>
                        <p style=color:#7D32AD;><?=$model->current_position?></p>
                        <label>Expertise :</label>
                        <p style=color:#7D32AD;><?=$model->expertise?></p>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head">
                            <p class="text-right"> 
                                <?= Html::a('Update', ['update', '_id' => (string) $model->_id], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </p>
                            <h5>
                                <?=$model->firstname?> <?=$model->lastname?>
                            </h5>
                            <!--<h6>
                                Web Developer and Designer
                            </h6> -->
                            <!--<p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Educational Qualification</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="position-tab" data-toggle="tab" href="#position" role="tab" aria-controls="position" aria-selected="false">Position</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="expertise-tab" data-toggle="tab" href="#expertise" role="tab" aria-controls="expertise" aria-selected="false">Expertise</a>
                                </li> -->
                            </ul>
                           <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Full Name :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p><?=$model->firstname?>  <?=$model->lastname?></p>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Thai Name :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p><?=$model->fistnamethai?>  <?=$model->lastnamethai?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Email :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p><?=$model->email?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Phone :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p><?=$model->phone?></p>
                                        </div>
                                    </div>     
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <label>Educationqualification :</label>
                                    </div>
                                    <div class="row">
                                        <p><?=$model->education_qualification?></p>
                                    </div>
                                    <div class="row">
                                        <label>Graduating :</label>
                                    <div class="row">
                                            <p><?=$model->graduating?></p>
                                    </div>
                                    <div class="row">
                                        <label>University :</label>
                                    </div>
                                    <div class="row">
                                        <p><?=$model->university?></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Country :</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <p><?=$model->country?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="position" role="tabpanel" aria-labelledby="position-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Current Position :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <p><?=$model->current_position?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="expertise" role="tabpanel" aria-labelledby="expertise-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Expertise :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?=$model->expertise?></p>
                                        </div>
                                    </div>
                                </div> -->
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!--<input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>-->
                    </div>
                </div>
                
            </form>           
        </div>

