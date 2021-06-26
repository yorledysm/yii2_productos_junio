<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<h1 style="font-weight: bold; padding-bottom:5%; color:#FFA500;   "  >Nuestra tienda virtual </h1>
   <!-- <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>-->
    
   <div class="slider" style="padding-bottom:5%">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>



    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?=Yii::getAlias('@web')?>/imglog/1.jpeg" alt="" >
        </div>
        <div class="item">
            <img  src="<?=Yii::getAlias('@web')?>/imglog/7.jpeg" alt="">
        </div>
        <div class="item">
            <img  src="<?=Yii::getAlias('@web')?>/imglog/15.jpg" alt="">
        </div>
        <div class="item">
            <img  src="<?=Yii::getAlias('@web')?>/imglog/16.jpg" alt="">
        </div>
        <div class="item">
            <img  src="<?=Yii::getAlias('@web')?>/imglog/17.jpg" alt="">
        </div>
        <div class="item">
            <img  src="<?=Yii::getAlias('@web')?>/imglog/18.jpg" alt="">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
   
   </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4" >
                <h2 class="" style="color:  #000000; padding: 2%; font-weight: bold">Lo mas nuevo</h2>
<div class="col-4" ><img src="<?=Yii::getAlias('@web')?>/imglog/9.jpeg" alt="logo de la pagina" class="" style=" width:100%; overflow: hidden; padding-bottom:5%"  ></div> 
                

                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

              <!--  <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p> -->
            </div>
            <div class="col-lg-4">
                <h2 style="padding: 2%; color:  #000000; font-weight: bold">Lo mas vendiddo</h2>
                <div class="col-4" ><img src="<?=Yii::getAlias('@web')?>/imglog/18.jpg" alt="logo de la pagina" class="" style=" width:100%;padding-bottom:5%" ></div> 
              

                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

           <!--     <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p> -->
            </div>
            <div class="col-lg-4">
                <h2 style="padding: 2%; color:  #000000;font-weight: bold">Sale</h2>
                <div class="col-4" ><img src="<?=Yii::getAlias('@web')?>/imglog/14.jpeg" alt="logo de la pagina" class="" style=" width:100%;padding-bottom:5%" ></div> 

                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

              <!--  <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p> -->
            </div>
        </div>

    </div>
</div>
