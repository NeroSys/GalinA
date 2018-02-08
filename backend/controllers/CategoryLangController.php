<?php

namespace backend\controllers;

use Yii;
use common\models\CategoryLang;
use backend\models\CategoryLangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryLangController implements the CRUD actions for CategoryLang model.
 */
class CategoryLangController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all CategoryLang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategoryLangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CategoryLang model.
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
     * Creates a new CategoryLang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($item_id)
    {
        $model = new CategoryLang();
        $model->item_id = $item_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/category/view', 'id' => $model->item_id]);
        }

        return $this->render('create', [
            'model' => $model,
            'item_id' => $item_id
        ]);
    }

    /**
     * Updates an existing CategoryLang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/category/view', 'id' => $model->item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CategoryLang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $item_id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['/category/view', 'id' => $item_id]);
    }

    /**
     * Finds the CategoryLang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CategoryLang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $query = CategoryLang::find();
        if(!empty($id)) $query->where(['id' => $id]);

        $model = $query->one();

        if ($model !== null) {

            return $model;

        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
