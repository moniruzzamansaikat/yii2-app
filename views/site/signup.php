<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\SignupForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login text-center">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'signup-form',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n{error}",
                            'labelOptions' => ['class' => 'col-lg-12 col-form-label text-start'],
                            'inputOptions' => ['class' => 'col-lg-12 form-control'],
                            'errorOptions' => ['class' => 'col-lg-12 invalid-feedback text-start'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'password_repeat')->passwordInput() ?>

                    <div class="form-group text-start">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
