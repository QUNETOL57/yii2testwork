<?php


namespace frontend\controllers;



class MyController extends AppController
{
    public function actionIndex($id)
    {
        $hi = 'Hello World!!';
        $names = ['ivanov', 'petrov', 'sidorov'];
        if($id == null) $id = 'test';
//        return $this->render('index', ['names' => $names, 'hello' => $hi]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost()
    {
        return 'Blog Post';
    }
}