<?php

use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Subtopic $model */

$this->title = 'Subtopics';
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['topics']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtopics-index">
    
    <h1>Список подтем:</h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'topic_id',
            [
                'attribute' => 'Ссылка',
                'format' => 'raw',  
                'value' => function($model) use ($topic_id) {
                    return Html::a('Просмотреть', ['home/topics-context', 'id' => $model->id, 'topic_id' => $topic_id]);
                }
            ],
        ],
    ]); ?>

</div>
