<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

?>
<section id="advertisement">
    <div class="container">
        <?= Html::img("@web/images/shop/1.jpg")?>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <ul class="catalog category-products">
                        <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                    </ul>

                    <div class="shipping text-center"><!--shipping-->
                        <?= Html::img("@web/images/home/shipping.jpg")?>
                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php if(!empty($products)): ?>
                        <h2 class="title text-center">Вы искали: <?=  Html::encode($q) ?></h2>
                        <?php $i = 0; foreach($products as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <?= Html::img("@web/images/products/{$product->img}", ['alt' => $product->name])?>
                                            <h2>$<?= $product->price?></h2>
                                            <p><a href="<?= Url::to(['product/view', 'id' => $product->id]) ?>"><?= $product->name?></a></p>
                                            <a href="#" data-id="<?= $product->id ?>" class="btn btn-default add-to-cart cart" data-url=<?= Url::base() ?>>
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </a>
                                        </div>
                                        <?php if($product->new): ?>
                                            <?= Html::img("@web/images/home/new.png", ['alt' => 'Новинка', 'class' => 'new'])?>
                                        <?php endif?>
                                        <?php if($product->sale): ?>
                                            <?= Html::img("@web/images/home/sale.png", ['alt' => 'Распродажа', 'class' => 'new'])?>
                                        <?php endif?>
                                    </div>
                                </div>
                            </div>
                            <?php $i++?>
                            <?php if($i % 3 == 0): ?>
                                <div class="clearfix"></div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <?php
                        echo LinkPager::widget([
                            'pagination' => $pages,
                        ]);
                        ?>
                    <?php else :?>
                        <h2>Товаров не найдено</h2>
                    <?php endif;?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>