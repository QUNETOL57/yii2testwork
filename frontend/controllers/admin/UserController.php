<?php

namespace frontend\controllers\admin;
use frontend\controllers\AppController;


class UserController extends AppController
{
    function actionIndex(){
        return $this->render('index');
    }
}