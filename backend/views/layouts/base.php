<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;

//use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;

//use yii\bootstrap4\Nav;
//use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <div class="wrap h-100 d-flex flex-column">
        <div class="wrap h-100 d-flex flex-column">

            <?php echo $this->render('_header') ?>
            <?= $content ?>
        </div>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
