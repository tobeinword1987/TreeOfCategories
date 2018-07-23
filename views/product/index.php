<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);
    ?>

    <p>
        <?= Html::a('Create Product', ['create', 'category_id' => $category_id], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="tree table">
        <?php
        for ($i = 0; $i < count($data); $i++){
            echo '<tr>
        <td>'.$data[$i] -> name.'</td>
        <td>';?>
            <?= Html::a('View', ['view', 'id' => $data[$i] -> id, 'category_id' => $category_id], ['class' => 'btn btn-info']) ?>
            <?= Html::a('Update', ['update', 'id' => $data[$i] -> id, 'category_id' => $category_id], ['class' => 'btn btn-primary']) ?>
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
</div>
