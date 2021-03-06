<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_author".
 *
 * @property int $id
 * @property string $name
 *
 * @property Book[] $books
 */
class Author extends \yii\db\ActiveRecord
{
    public $quantityBooks;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'quantityBooks' => 'Quantity Books',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }
    
    /**
     * Get a list of authors
     * @return array
     */
    public static function getList() {
        $all = self::find()->all();
        return yii\helpers\BaseArrayHelper::map($all, 'id', 'name');
    }
}
