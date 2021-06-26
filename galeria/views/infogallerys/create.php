<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Infogallerys */

$this->title = Yii::t('app', 'Crear imagen');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Imagenes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infogallerys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
