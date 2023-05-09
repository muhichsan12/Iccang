<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionView()
    {
        return $this->render('view');
    }

    public function actionUpdate()
    {
        return $this->render('Update');
    }

    public function actionPilihMatakuliah()
    {
        return $this->render('pilih-matakuliah');
    }
    
}
