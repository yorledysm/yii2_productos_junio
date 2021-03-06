<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Infogallerys */

$this->title = Yii::t('app', 'Actulizar imagenes: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Infogallerys'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actulizar');
?>
<div class="infogallerys-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
