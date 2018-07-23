<?php

namespace app\controllers;

use app\models\Product;
use app\models\ProductSearch;
use Yii;
use app\models\Category;
use app\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $searchModel->search(Yii::$app->request->queryParams);
        $data = $searchModel -> outTree(0,0);

        return $this->render('index', [
            'data' => $data,
//            'searchModel' => $searchModel
        ]);
    }

    /**
     * Displays a single Category model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Category();
        $model->parent_id = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $category = $this->findModel($id);


        if (Category::find()->where(['parent_id' => $id])->count() == 0){
            if (Product::find()->where(['category_id' => $id])->count() > 0) {
                Yii::$app->session->setFlash('error', "This category has products. At first You have to remove products.");
            } else {
                $category -> delete();
            }
        } else
        {
            Yii::$app->session->setFlash('error', "This category has sub categories. At first You have to remove them");
        }

        return $this->redirect(['index']);
    }

    public function actionProduct($id)
    {
        $searchModel = new CategorySearch();
        $searchModel->search(Yii::$app->request->queryParams);
        $data = $searchModel -> outTree($id,0);
        $categories_id[] = $id;
        foreach($data as $category){
            $categories_id[] = $category -> id;
        }

//        select all products where category_id in [id and data's->id]
        $products = Product::find()
        ->andWhere(['IN', 'category_id', $categories_id])
        ->all();

        return $this->render('/product/index', [
            'data' => $products,
        ]);
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
