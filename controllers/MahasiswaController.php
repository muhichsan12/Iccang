<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionVerifikasiNim()
    {
        return $this->render('verifikasi-nim');
    }
}
