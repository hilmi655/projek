<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'FAKULTAS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
 
        <?= Html::button('Create Fakultas', ['value'=>Url::to('index.php?r=departments/create'),'class'=>'btn btn-success','id'=>'modalButton']) ?>
    </p>
    <?php
        Modal::begin([
            'header'=>'<h4>Fakultas</h4>',
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

            //'department_id',
            'branchesBranch.branch_name',
            'department_name',
            'department_address',
            'department_created_date',
            'department_status',
            'companiesCompany.company_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
