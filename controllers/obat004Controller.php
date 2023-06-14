<?php

namespace app\controllers;
use app\models\obat004;
use yii\data\ActiveDataProvider;

class obat004Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => obat004::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
