<?php

use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Subtopic $model */

$this->title = 'TopicContext';
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['topics']];
$this->params['breadcrumbs'][] = ['label' => 'Subtopics', 'url' => ['subtopics', 'id' => $topic_id]];
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
            'text',
            'subtopic_id',
        ],
    ]); ?>

</div>
