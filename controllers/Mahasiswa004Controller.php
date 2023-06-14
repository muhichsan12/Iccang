<?php

namespace app\controllers;

use app\models\Mahasiswa004;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class Mahasiswa004Controller extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa004::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id){
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}
