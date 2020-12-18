<?php


namespace frontend\controllers;


use frontend\models\Category;
use Yii;
use frontend\models\TestForm;

class PostController extends AppController
{
    public $layout = 'basic';

    public function beforeAction($action)
    {
        if($action->id == 'index'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        if(Yii::$app->request->isAjax){
//           debug($_POST);
           debug(Yii::$app->request->post());
           return 'test';
        }
        $model = new TestForm();
        if( $model->load(Yii::$app->request->post())){
            if( $model->validate()){
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        $this->view->title = 'All articles';
        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {
//        $this->layout = 'basic';
        $this->view->title = 'One article';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);

        $cats = Category::find()->all();

        return $this->render('show', compact('cats'));
    }
}