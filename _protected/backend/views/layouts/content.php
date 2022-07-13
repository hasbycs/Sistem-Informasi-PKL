<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h3><?= $this->blocks['content-header'] ?></h3>
        <?php } else { ?>
            <h3>
                <?php
                if ($this->title !== null) {
                    echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h3>
        <?php } ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>                                 
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div>
    <strong>Copyright &copy; 2014-<?php echo date('Y')?> <a href="http://polinpdg.ac.id">Politeknik Negeri Padang</a></strong>
</footer>
