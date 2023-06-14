<?php

use app\models\Mahasiswa004;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActionDataProvider $dataProvider */

?>
<div class="mahasiswa-004-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'profil004.foto_profil',

        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Mahasiswa004 $model, $key, $index, $column){
                return Url::toRoute([$action, 'id' => $model->id]);
            }
        ],
    ],
]); ?>

</div>