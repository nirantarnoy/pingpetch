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
        $path = Yii::getAlias('@frontend') .'/web/img';
        $modelfile = new \backend\models\Modelfile();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->load(Yii::$app->request->post())) {
                $uploadeds = UploadedFile::getInstances($modelfile,'file');
               // echo count($uploadeds);return;
//                if(!empty($uploadeds)){
//                    foreach($uploadeds as $files){
//                        echo $files->name;
//                    }
//                }
//                return;
                if($model->save()){
                    $i = 0;
                    if(!empty($uploadeds)){
                        foreach($uploadeds as $files){
                            $i+=1;
                            $folder = 'screenshots';
                            //$file = $files->name.".".$files->getExtension();
                            $file = $files->name;

                            if($files->saveAs($path.'/'.$folder.'/'.$file)){
                               $model_gallery = new \backend\models\Portgallery();
                               $model_gallery->port_id = $model->id;
                               $model_gallery->name = $files->name;
                               $model_gallery->filename = $file;
                               $model_gallery->isprimary = $i==1?1:0;
                               $model_gallery->save();
                            }
                            if($i ==1){
                                //$model->photo = '';//$file;
                            }

                        }
                    }
                    return $this->redirect(['index']);
                }

            }
        }

        return $this->render('create', [
            'model' => $model,
            'modelfile'=>$modelfile,
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
        $modelfile = new \backend\models\Modelfile();
        $model_gallery = \backend\models\Portgallery::find()->where(['port_id'=>$id])->all();
        $path = Yii::getAlias('@frontend') .'/web/img';
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
                    return $this->redirect(['index']);
                }

            }
            if($model->save()){
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'modelfile'=>$modelfile,
            'model_gallery'=>$model_gallery,
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
        $model = \backend\models\Portgallery::find()->where(['port_id'=>$id])->all();
        $path = Yii::getAlias('@frontend') .'/web/img/screenshots';
        foreach ($model as $value){
            if(isset($path."/".$value->name)){
                unlink($path."/".$value->name);
            }

        }
        \backend\models\Portgallery::deleteAll(['port_id'=>$id]);

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
