<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?= Yii::$app->language ?>"> <!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic|Lora:400italic&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/frontend/web/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/frontend/web/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/frontend/web/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/frontend/web/img/favicon/apple-touch-icon-114x114.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1180, initial-scale=1, maximum-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <!-- Header -->
    <header class="main-header">
        <div class="center">
            <img class="main-logo" src="/frontend/web/img/logo.png" height="35" width="162" alt="Kaward — единый республиканский рейтинг студий и агентств Казахстана">
            <p class="description">Единый республиканский рейтинг студий и агентств Казахстана в сфере диджитал и интерактивных коммуникаций</p>
            <div class="login-form">Войти</div>
            <nav>
                <ul class="nav">
                    <li class="nav-item-1"><a href="#">О рейтинге</a></li>
                    <li class="nav-item-2"><a href="#">Как считаем?</a></li>
                    <li class="nav-item-3"><a href="#">Прессе и блогерам</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?= $content ?>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<script>

    // GO GO GO
    $('.offer-checking').change( function() {
        var button = $('button');
        if( button.prop('disabled') ) {
            button.attr('disabled', false);
            button.removeClass('disabled');
        } else {
            button.attr('disabled', true);
            button.addClass('disabled');
        }
    });

    // Add new input
    $('.phone-plus').click( function(){
        var phoneInputs = $('.add-phone-input input');
        var i;
        if ( phoneInputs.length <= 2 ) {
            if ( phoneInputs.length <= 1 ) {
                i = 2;
            } else {
                i = 3
            }
            $('.add-phone-input').append('<input type="text" id="signupform-office_phone_'+ i +'" class="default small added" name="SignupForm[office_phone_'+ i +']">');
            // Input mask
            var inputmask_a55dd1dc = {"mask":"+7 (999)-999-99-99"};
            $("#signupform-office_phone_2").inputmask(inputmask_a55dd1dc);
            $("#signupform-office_phone_3").inputmask(inputmask_a55dd1dc);
        }
    });

</script>
</body>
</html>
<?php $this->endPage() ?>
