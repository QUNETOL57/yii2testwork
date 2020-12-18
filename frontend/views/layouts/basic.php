<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $this->title ?></title>
        <?php $this->registerCsrfMetaTags() ?>

        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="wrap">
            <div class="container">

                <ul class="nav nav-pills">
                    <li class="nav-item active">
                       <?= Html::a('Главная','/web/')?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('Статьи',['post/index'])?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('Статья',['post/show'])?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <?php if( isset($this->blocks['block1'])): ?>
                    <?php echo $this->blocks['block1'] ?>
                <?php endif;?>

                <?= $content ?>
            </div>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>