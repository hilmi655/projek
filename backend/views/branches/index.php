<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BranchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'PERCABANGAN';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branches-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Create Cabang', ['value'=>Url::to('index.php?r=branches/create'),'class'=>'btn btn-success','id'=>'modalButton']) ?>
    </p>

    <?php
        Modal::begin([
            'header'=>'<h4>Percabangan</h4>',
            'id'=>'modal',
            'size'=>'modal-lg',
        ]);
        echo "<div id='modalContent'></div>";

        Modal::end();
    ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //searching gridview
            [
                'attribute'=>'companies_company_id',
                'value'=>'companiesCompany.company_name',
            ],
            //'companiesCompany.company_name',
            'branch_name',
            'branch_address',
            'branch_create_date',
            //'branch_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
