<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AelPettyCash */

$this->title = 'Update Petty Cash';
$this->params['breadcrumbs'][] = ['label' => 'Ael Petty Cashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-content-wrapper">
    <div class="page-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
