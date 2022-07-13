<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
?>
<div class="content-wrapper">
    <div class="container">
        <section class="content-header" style="margin-top: 2%">
            <!--<h1>-->
                <?php
//                if ($this->title !== null) {
//                    echo $this->title;
//                } else {
//                    echo \yii\helpers\Inflector::camel2words(\yii\helpers\Inflector::id2camel($this->context->module->id));
//                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
//                }
                ?>
            <!--</h1>-->
            <?php
//            echo Breadcrumbs::widget(
//                    [
//                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//                    ]
//            );
            ?>
        </section>

        <section class="content">           
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>
    </div>
</div>

<footer class="main-footer">
    
    <strong>Copyrights &copy; 2017-<?php echo date('Y'); ?> <a href="http://www.polinpdg.ac.id" target="_blank">Politeknik Negeri Padang</a></strong> 
</footer>
