<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('New root', ['create', 'id' => 0], ['class' => 'btn btn-success']) ?>
    </p>

<table class="tree table">
    <?php
    for ($i = 0; $i < count($data); $i++){
        $class = ($data[$i] -> parent_id == 0)?'':$data[$i] -> parent_id;
        echo '<tr class="treegrid-'.$data[$i] -> id.' treegrid-parent-'.$class.'">
        <td>'.Html::a($data[$i] -> name, ['/product/', 'id' => $data[$i] -> id]).'</td>
        <td>';?>
            <?= Html::a('Add sub', ['create', 'id' => $data[$i] -> id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('View', ['view', 'id' => $data[$i] -> id], ['class' => 'btn btn-info']) ?>
            <?= Html::a('Update', ['update', 'id' => $data[$i] -> id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $data[$i] -> id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
    <?php
        echo "</td></tr>";
    }

    ?>
</table>

<!--    <table class="tree table">-->
<!--        <tr class="treegrid-1 treegrid-parent-">-->
<!--            <td>Root node</td><td>Additional info</td>-->
<!--        </tr>-->
<!--        <tr class="treegrid-2 treegrid-parent-1">-->
<!--            <td>Node 1-1</td><td>Additional info</td>-->
<!--        </tr>-->
<!--        <tr class="treegrid-3 treegrid-parent-1">-->
<!--            <td>Node 1-2</td><td>Additional info</td>-->
<!--        </tr>-->
<!--        <tr class="treegrid-4 treegrid-parent-3">-->
<!--            <td>Node 1-2-1</td><td>Additional info</td>-->
<!--        </tr>-->
<!--    </table>-->

</div>
