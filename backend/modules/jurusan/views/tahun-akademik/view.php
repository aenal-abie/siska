<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\jurusan\models\TahunAkademik */

$this->title = $model->kode_tahun_akademik;
$this->params['breadcrumbs'][] = ['label' => 'Tahun Akademiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-akademik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_tahun_akademik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_tahun_akademik], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_tahun_akademik',
            'tahun_akademik',
            'semester',
            'status',
            'tanggal_mulai',
            'tanggal_berakhir',
            'created_by',
            'updated_by',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
