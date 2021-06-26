<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Productos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infoproducts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Crear productos '), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_person',
            'category',
            'date',
           // 'status',
           [
            'attribute'=> 'status',
            'value' => function($data){
              return ($data->status==1) ? 'Activo': 'Inactivo';
            }
             
          ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
