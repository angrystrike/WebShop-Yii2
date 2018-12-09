<?php
/**
 * Created by PhpStorm.
 * User: DIMA
 * Date: 09.12.2018
 * Time: 20:07
 */

namespace app\controllers;
use app\models\Product;
use app\models\Category;
use Yii;

class CartController extends AppController
{
    public function actionAdd() {
        $id = Yii::$app->request->get('id');
        debug($id);
    }
}