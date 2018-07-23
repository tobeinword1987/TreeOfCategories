<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="ui internally celled grid">
            <div class="row">
                <div class="sixteen wide center aligned column" id="head">Curriculum Vitae</div>
            </div>
            <div class="row">
                <div class="three wide column rightPanel">
                    <?php echo Html::img('@web/img/photo.jpg', ['class' => 'ui medium circular image']); ?>
                </div>
                <div class="seven wide left aligned column">
                    <div class="name">Lyudmila</div>
                    <div class="surname">POPOVA</div>
                    <div class="subHeader">PHP developer</div>
                </div>
                <div class="six wide column">
                    <div class="ui list">
                        <div class="item">
                            <i class="marker icon"></i>
                            <div class="content">
                                Kiev, Ukraine
                            </div>
                        </div>
                        <div class="item">
                            <i class="mail icon"></i>
                            <div class="content">
                                <a href="mailto:tobeinword1987@gmail.com">tobeinword1987@gmail.com</a>
                            </div>
                        </div>
                        <div class="item">
                            <i class="github icon"></i>
                            <div class="content">
                                <a href="https://github.com/tobeinword1987/TreeOfCategories">github</a>
                            </div>
                        </div>
                        <div class="item">
                            <i class="facebook icon"></i>
                            <div class="content">
                                <a href="https://www.facebook.com/profile.php?id=100010791047793&hc_ref=ARR_DZ5NvMqU9_tQS3HfNAHDXFFbTtoyLc-sQClPBDzY1urVKwFCps6NkDWTBMeJ7qQ">facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="three wide right aligned column rightPanel">
                    <div class="section">Intro</div>
                    <div class="note">What about me</div>
                </div>
                <div class="thirteen wide column">
                    <p>
                        I like when my goals are reached and the job is done. You can meet difficults with it but they make you stronger and more skilled. Human is happy when he finds a pleasure in his job. Also I am associative and like friendly teams.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="three wide right aligned column rightPanel">
                    <div class="section">Skills</div>
                    <div class="note">My achievmnets</div>
                </div>
                <div class="thirteen wide column">
                    <div class="ui bulleted list">
                        <div class="item">Projecting of databases (MySql, Oracle)</div>
                        <div class="item">Development of information retrieval systems (IRS)</div>
                        <div class="item">Participation in open source projects</div>
                        <div class="item">Understanding of OOP</div>
                        <div class="item">Experience in scrum metodology -PHP5, PHP7</div>
                        <div class="item">PHP frameworks as yii2 and laravel </div>
                        <div class="item">Participation in open source projects</div>
                        <div class="item">basic experience in javascript, jquery, bootstrap</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="three wide right aligned column rightPanel">
                    <div class="section">Story of my life</div>
                    <div class="note">Just brief biography</div>
                </div>
                <div class="thirteen wide column">
                    <div class="ui bulleted list">
                        <div class="item">2004 - entered the Kiev Polytechnic Institute (KPI)</div>
                        <div class="item">2004 - met my lovely husband</div>
                        <div class="item">2006 - my beautiful daughter was born</div>
                        <div class="item">2010 - received a bachelor's degree</div>
                        <div class="item">2012 - graduated from university</div>
                        <div class="item">2012 - got job in DP Antonov (Industry and Manufacturing) till present time</div>
                        <div class="item">2016 - took part in development of the open source php project. Yii2 was used as php framework. You can see it if you'll follow next link: <a href="http://diglot.ru/">Diglot</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="three wide right aligned column rightPanel">
                    <div class="section">Interests</div>
                    <div class="note">I hope it will be fun</div>
                </div>
                <div class="thirteen wide column">
                    <p>
                        I'm interested in cycling or roller blading with my daughter. Also I like relax music and resting on the open air.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
