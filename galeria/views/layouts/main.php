<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap" style="background-color: #f0f0f0;"  >
<div class="row " style="background-color: #ffffff;">
<div class="col-md-4" ><img src="<?=Yii::getAlias('@web')?>/imglog/logo_blanco.jpg" alt="logo de la pagina" class=""  style="width:30% ;"></div>
<div class="col-md-8 " style="text-decoration: dotted; color:bisque; padding: 0;" ><h1>Tienda Online</h1></div> 


</div>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse ', //navbar-fixed-top
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            
            ['label' => 'Home', 'url' => ['/site/index']],
           // ['label' => 'About', 'url' => ['/site/about']],
           ['label' => 'Ingreso productos', 'url' => ['/infoproducts/index']],
           ['label' => 'galeria', 'url' => ['/infogallerys/index']],
           // ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
<!--<div class="col-4" ><img src="<?=Yii::getAlias('@web')?>/imglog/logo_blanco.jpg" alt="logo de la pagina" class="" style="border-radius: 50%; width: 50px" ></div> -->


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<footer class="footer" style="background-color: #ffa500;">
    <div class="container">
        <p class="pull-left" >&copy; Yorledys Moreno <?= date('Y') ?></p>
        

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
