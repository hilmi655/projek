<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\arrayHelper;
use backend\models\Companies;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Branches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companies_company_id')->widget(Select2::classname(), [
        'data' => arrayHelper::map(Companies::find()->all(),'company_id','company_name'),
        'language' => 'de',
        'options' => ['placeholder' => 'Select company ...'],
        'pluginOptions' => [
        'allowClear' => true
            ],
        ]);
    ?>
    <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_address')->textInput(['maxlength' => true]) ?>

   

    <?= $form->field($model, 'branch_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
