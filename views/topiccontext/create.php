<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Topiccontext $model */

$this->title = 'Create Topiccontext';
$this->params['breadcrumbs'][] = ['label' => 'Topiccontexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topiccontext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
