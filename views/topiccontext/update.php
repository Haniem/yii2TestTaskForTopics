<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Topiccontext $model */

$this->title = 'Update Topiccontext: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Topiccontexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="topiccontext-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
