<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



<!--<div class="container-fluid hidden-xs hidden-sm header">
    <div class="row">
        <div class="col-md-12 col-sm-2 logo-header">


            <div class="container-header demo">
                <div class="content1">
                    <div id="large-header" class="large-header col-md-12 hidden-xs hidden-sm">
                        <canvas id="demo-canvas"></canvas>
                        <h2 class="main-title"><span class="thin">My</span> NoteBook</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--- NAVIGATION -->

<!--<div class="container-fluid border-container nav">
    <div class="row">
        <div class="col-md-12 col-sm-2">




            <nav class="navbar navbar-default nav" role="navigation">
                <div class="container-fluid nav">
                    <!—Название сайта и кнопка раскрытия меню для мобильных-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!—Само меню-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php
                           $themeItem = $this->context->theme;
                           $subthemeItemOS = $this->context->subt_os;
                           $subthemeItemWeb = $this->context->subt_web;
                           $subthemeItemProgr = $this->context->subt_progr;
                           $subthemeItemNet = $this->context->subt_net;
                           $subthemeItemBios = $this->context->subt_bios;
                           $subthemeItemEng = $this->context->subt_eng;
                           $subthemeItemArch = $this->context->subt_arch;

                              ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo  $themeItem[0]; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-usr" role="menu">
                                    <li><a href="#"><?php echo $subthemeItemOS[0]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemOS[1]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemOS[2]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemOS[3]; ?></a></li>

                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $themeItem[1]; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><?php echo $subthemeItemNet[0]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemNet[1]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemNet[2]; ?></a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $themeItem[2]; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><?php echo $subthemeItemBios[0]; ?></a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $themeItem[3]; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><?php echo $subthemeItemEng[0]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemEng[1]; ?></a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $themeItem[4]; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><?php echo $subthemeItemArch[0]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemArch[1]; ?></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">И еще</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $themeItem[5]; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><?php echo $subthemeItemProgr[0]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemProgr[1]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemProgr[2]; ?></a></li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $themeItem[6]; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><?php echo $subthemeItemWeb[0]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemWeb[1]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemWeb[2]; ?></a></li>
                                    <li><a href="#"><?php echo $subthemeItemWeb[3]; ?></a></li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>




        </div>
    </div>
</div>

<!-- LEFT-NAVIGATION + CONTENT -->

<div class="container-fluid border-container cont-lnav">
    <div class="row">

        <!-- LEFT-NAVIGATION -->

        <div class="col-md-1 col-sm-6 border-container l-nav">
            <div class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">

                <div class="nav navmenu-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My profile <b class="caret"></b></a>
                        <ul class="dropdown-menu navmenu-nav l-nav-drop">
                            <li><a href="#">Подпункт 4.1</a></li>
                            <li><a href="#">Подпункт 4.2</a></li>
                            <li><a href="#">Подпункт 4.3</a></li>
                            <li><a href="#">Подпункт 4.4</a></li>
                            <li><a href="#">Подпункт 4.5</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ежедневник <b class="caret"></b></a>
                        <ul class="dropdown-menu navmenu-nav l-nav-drop">
                            <li><a href="#">Подпункт 4.1</a></li>
                            <li><a href="#">Подпункт 4.2</a></li>
                            <li><a href="#">Подпункт 4.3</a></li>
                            <li><a href="#">Подпункт 4.4</a></li>
                            <li><a href="#">Подпункт 4.5</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Календарь <b class="caret"></b></a>
                        <ul class="dropdown-menu navmenu-nav l-nav-drop">
                            <li><a href="#">Подпункт 4.1</a></li>
                            <li><a href="#">Подпункт 4.2</a></li>
                            <li><a href="#">Подпункт 4.3</a></li>
                            <li><a href="#">Подпункт 4.4</a></li>
                            <li><a href="#">Подпункт 4.5</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Создание тем <b class="caret"></b></a>
                        <ul class="dropdown-menu navmenu-nav l-nav-drop">
                            <li><a href="#">Подпункт 4.1</a></li>
                            <li><a href="#">Подпункт 4.2</a></li>
                            <li><a href="#">Подпункт 4.3</a></li>
                            <li><a href="#">Подпункт 4.4</a></li>
                            <li><a href="#">Подпункт 4.5</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Пункт 3 <b class="caret"></b></a>
                        <ul class="dropdown-menu navmenu-nav l-nav-drop">
                            <li><a href="#">Подпункт 4.1</a></li>
                            <li><a href="#">Подпункт 4.2</a></li>
                            <li><a href="#">Подпункт 4.3</a></li>
                            <li><a href="#">Подпункт 4.4</a></li>
                            <li><a href="#">Подпункт 4.5</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Пункт 3 <b class="caret"></b></a>
                        <ul class="dropdown-menu navmenu-nav l-nav-drop">
                            <li><a href="#">Подпункт 4.1</a></li>
                            <li><a href="#">Подпункт 4.2</a></li>
                            <li><a href="#">Подпункт 4.3</a></li>
                            <li><a href="#">Подпункт 4.4</a></li>
                            <li><a href="#">Подпункт 4.5</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Пункт 3 <b class="caret"></b></a>
                        <ul class="dropdown-menu navmenu-nav l-nav-drop">
                            <li><a href="#">Подпункт 4.1</a></li>
                            <li><a href="#">Подпункт 4.2</a></li>
                            <li><a href="#">Подпункт 4.3</a></li>
                            <li><a href="#">Подпункт 4.4</a></li>
                            <li><a href="#">Подпункт 4.5</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>


                </div>
            </div>
        </div>

        <!-- CONTENT -->

        <div class="col-md-11 col-sm-6 border-container content">
            <h3><?php //print_r(Yii::$app->params['theme']); ?></h3>

        </div>
    </div>
</div>

<!-- FOOTER -->

<div class="container-fluid border-container footer navbar-fixed-bottom">
    <div class="row">
        <div class="col-md-12 col-sm-6 ">
            <h3>footer</h3>
        </div>
    </div>
</div>

<?php
    $this->registerJsFile('https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js',
['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js',
        ['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js',
        ['depends' => [\yii\web\JqueryAsset::className()]]);

?>


<!--<div class="wrap">

    <?php/*
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>*/-->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

