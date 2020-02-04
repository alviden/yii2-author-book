<?php
namespace app\api\v1\controllers;

use yii\rest\ActiveController;
use app\models\Book;

class BooksController extends ActiveController
{
    
    public $modelClass = Book::class;
    
    public function actions()
    {
        $actions = parent::actions();

        unset($actions['create'], $actions['index']);

        return $actions;
    }
    
    /**
     * @inheritdoc
     */
    protected function verbs()
    {
        return [
            'list' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'update' => ['POST'],
            'delete' => ['DELETE'],
        ];
    }
    
    public function actionList()
    {
        return Book::find()->all();
    }
}