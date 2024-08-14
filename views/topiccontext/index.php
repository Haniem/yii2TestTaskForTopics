<?php

use app\models\Topiccontext;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TopiccontextSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Topiccontexts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topiccontext-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Topiccontext', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text:ntext',
            'subtopic_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Topiccontext $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
