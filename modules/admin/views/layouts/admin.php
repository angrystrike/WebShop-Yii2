<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>Админка | <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head><!--/head-->

    <body>
    <?php $this->beginBody() ?>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                   <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="<?= Url::home() ?>"> <?= Html::img("@web/images/home/logo.png")?></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php if (!Yii::$app->user->isGuest) : ?>
                                    <li><a href="<?= Url::to(['/site/logout']) ?>"><i class="fa fa-user"></i><?= Yii::$app->user->identity['username'] ?> (Выход) </a></li>
                                <?php endif; ?>
                                <li><a href="#" onclick="return getCart('<?= Url::base() ?>'); "><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="<?= Url::to(['/admin']) ?>" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Категории<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?= Url::to(['category/index']) ?>">Список категорий</a></li>
                                        <li><a href="<?= Url::to(['category/create']) ?>">Добавить категорию</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <form method="get" action="<?= Url::to(['category/search']) ?>">
                                <input type="text" placeholder="Search" name="q">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <div class="container">
        <?= $content; ?>
    </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Random copyright 2018</p>
                    <p class="pull-right">Designed by me</p>
                </div>
            </div>
        </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>