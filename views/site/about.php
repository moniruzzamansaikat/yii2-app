<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>

<?php $this->beginBlock('styles'); ?>
    <style>
        body {
            background-color: skyblue;
        }
        
        .site-about {
            margin-top: 100px;
        }
    </style>
<?php $this->endBlock(); ?>


<?php $this->beginBlock('scripts'); ?>
    <script>
        console.log('About page');
    </script>
<?php $this->endBlock(); ?>