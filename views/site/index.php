<?php


use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Topic App</h1>

        <p class="lead">Данный сайт представляет из себя приложение для просмотра тем.</p>

        <!-- <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p> -->
        <!-- < HTML > -->
        
        <?= Html::a('К темам', ['home/topics'], ['class' => 'btn btn-success']) ?>
</div>
