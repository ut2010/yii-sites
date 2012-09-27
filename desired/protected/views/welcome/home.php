<?php
/* @var $this WelcomeController */
?>

<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form-formlogin-form',
    'enableAjaxValidation'=>false,
)); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email'); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->textField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Вход'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<a href="">Забыли пароль?</a>
<br>
<a href="">Меня пригласили!</a>
<br>





<?php
/* @var $this DataFormController */
/* @var $model DataForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'data-form-data-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Поля отмеченные <span class="required">*</span> необходимо заполнить.</p>

    <?php echo $form->errorSummary($modelData); ?>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data1'); ?>
        <?php echo $form->textField($modelData,'data1'); ?>
        <?php echo $form->error($modelData,'data1'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data2'); ?>
        <?php echo $form->textField($modelData,'data2'); ?>
        <?php echo $form->error($modelData,'data2'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data3'); ?>
        <?php echo $form->textField($modelData,'data3'); ?>
        <?php echo $form->error($modelData,'data3'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data4'); ?>
        <?php echo $form->textField($modelData,'data4'); ?>
        <?php echo $form->error($modelData,'data4'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data5'); ?>
        <?php echo $form->textField($modelData,'data5'); ?>
        <?php echo $form->error($modelData,'data5'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data6'); ?>
        <?php echo $form->textField($modelData,'data6'); ?>
        <?php echo $form->error($modelData,'data6'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data7'); ?>
        <?php echo $form->textField($modelData,'data7'); ?>
        <?php echo $form->error($modelData,'data7'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'data8'); ?>
        <?php echo $form->textField($modelData,'data8'); ?>
        <?php echo $form->error($modelData,'data8'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($modelData,'email'); ?>
        <?php echo $form->textField($modelData,'email'); ?>
        <?php echo $form->error($modelData,'email'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->



<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
