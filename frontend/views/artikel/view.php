<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Artikel */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Artikels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'artikel',
            [
                'attribute' => 'poster',
                'format' => 'raw',
                'value'=> function($data){
                    if ($data->poster!=''){
                        return $data->getPoster(['width'=>'80px']);
                    }else {
                        return 'no image';
                    }
                }
            ],
            [
                'attribute' => 'video',
                'format' => 'raw',  // or html
                'value' => function  ($data)  {
                    if ($data->video!=''){
                        return 'video';
                    }else {
                        return 'no video';
                    }
              }
            ],
        ],
    ]) ?>
</div>
