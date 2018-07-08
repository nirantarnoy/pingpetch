<?php

namespace backend\controllers;

use Yii;
use backend\models\Portfolio;
use backend\models\PortfolioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * PortfolioController implements the CRUD actions for Portfolio model.
 */
class PortfolioController extends Controller
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
     * Lists all Portfolio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PortfolioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Portfolio model.
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
     * Creates a new Portfolio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Portfolio();
        $path = Yii::getAlias('@frontend') .'/web/img/';
        if ($model->load(Yii::$app->request->post())) {
            if ($model->load(Yii::$app->request->post())) {
                $uploaded = UploadedFile::getInstance($model,'photo');
                if(!empty($uploaded)){

                    $folder = 'screenshots';
                    $file = time().".".$uploaded->getExtension();


                    if($uploaded->saveAs($path.'/'.$folder.'/'.$file)){
                        $model->photo = $file;
                    }

                }
                if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Portfolio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $path = Yii::getAlias('@frontend') .'/web/img/';
        if ($model->load(Yii::$app->request->post())) {
            if ($model->load(Yii::$app->request->post())) {
                $uploaded = UploadedFile::getInstance($model,'photo');
                $old = Yii::$app->request->post('old_photo');
                if(!empty($uploaded)){

                    $folder = 'screenshots';
                    $file = time().".".$uploaded->getExtension();


                    if($uploaded->saveAs($path.'/'.$folder.'/'.$file)){
                        $model->photo = $file;
                    }

                }else{
                    $model->photo = $old;
                }

                if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Portfolio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Portfolio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Portfolio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Portfolio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
