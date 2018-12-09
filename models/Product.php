<?php
/**
 * Created by PhpStorm.
 * User: DIMA
 * Date: 04.12.2018
 * Time: 19:04
 */

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName() {
        return 'product';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}