<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <?= $this->render('header'); ?>

        <?= $this->render('sidebar'); ?>

        <?= $this->render('content',compact('content')); ?>


    </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
