<?php
/**
 * Created by PhpStorm.
 * User: DIMA
 * Date: 07.12.2018
 * Time: 15:50
 */

namespace app\controllers;
use app\models\Product;
use Yii;
use yii\web\HttpException;

class ProductController extends AppController
{
    public function actionView() {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if(empty($product)) {
            throw new HttpException(404, 'Такого товара нет');
        }
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('Web shop | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }
}