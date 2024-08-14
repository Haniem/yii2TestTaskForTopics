<?php

use app\models\Topic;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TopicSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Topics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <h1>Список доступных тем:</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute' => 'Ссылка',
                'format' => 'raw',  // Оставляем HTML нетронутым
                'value' => function($model) {
                    return Html::a('Просмотреть', ['subtopics', 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>



</div>
