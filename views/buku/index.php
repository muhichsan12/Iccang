<?php
    use yii\grid\Gridview;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
        ['class' => SerialColumn::className()],
        'id',
        'kode_buku',
        'judul',
        'jml_item',
        ['class' => ActionColumn::className()]
        ]
    ])
?>