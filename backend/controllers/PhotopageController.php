<?php

namespace backend\controllers;

use backend\helpers\PhotoType;
use Yii;
use backend\models\Photopage;
use backend\models\PhotopageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;



/**
 * PhotopageController implements the CRUD actions for Photopage model.
 */
class PhotopageController extends Controller
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
     * Lists all Photopage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhotopageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Photopage model.
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
     * Creates a new Photopage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Photopage();
        $path = Yii::getAlias('@frontend') .'/themes/alstar/dist/img';
        $path2 = Yii::getAlias('@frontend') .'/web/img';
        //echo $path;return;
        if ($model->load(Yii::$app->request->post())) {
            $uploaded = UploadedFile::getInstance($model,'photo');
            if(!empty($uploaded)){
                $folder = '';
                if($model->photo_position ==1){
                    $folder = 'bgslides';

                    $maxx = Photopage::find()->max('photo');
                    $nums = explode('-',$maxx);
                    if(count($nums)>0 && count($maxx) > 0){
                        $file = "slide-".($nums[1]+1).".".$uploaded->getExtension();
                    }else{
                        $file = "slide-1".".".$uploaded->getExtension();
                    }

                }else if($model->photo_position ==2){
                    $folder = 'about';
                    $file = "about-1".".".$uploaded->getExtension();
                   // $uploaded->saveAs($path2.'/'.$folder.'/'.$file);
                }else if($model->photo_position ==3){
                    $folder = 'parallax';
                    $file = "slogan-1".".".$uploaded->getExtension();
                }




                if($model->photo_position == 2){
                    if(null!=($path2.'/'.$folder.'/'.$file))
                    {
                       // if(null!=($path2.'/'.$folder.'/'.$file)){
                          //  unlink($path2.'/'.$folder.'/'.$file);
                        //}

                    }

                    if($uploaded->saveAs($path2.'/'.$folder.'/'.$file)){
                        $model->photo = $file;
                    }
                }else{
                    if($uploaded->saveAs($path.'/'.$folder.'/'.$file)){
                        $model->photo = $file;
                    }
                }

            }
            if($model->save())
            {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Photopage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $path = Yii::getAlias('@frontend') .'/themes/alstar/dist/img';

        if ($model->load(Yii::$app->request->post())) {
            $uploaded = UploadedFile::getInstance($model,'photo');
            $old_photo = Yii::$app->request->post("old_photo");
           // echo $old_photo;return;
            if(!empty($uploaded)){
                $folder = '';
                if($model->photo_position ==1){
                    $folder = 'bgslides';

                    $maxx = Photopage::find()->max('photo');
                    $nums = explode('-',$maxx);
                    if(count($nums)>0 && count($maxx) > 0){
                        $file = "slide-".($nums[1]+1).".".$uploaded->getExtension();
                    }else{
                        $file = "slide-1".".".$uploaded->getExtension();
                    }

                }else if($model->photo_position ==2){
                    $folder = 'about';
                    $file = "about-1".".".$uploaded->getExtension();
                }



                if($uploaded->saveAs($path.'/'.$folder.'/'.$file)){
                    $model->photo = $file;
                }

            }else{
                $model->photo = $old_photo;
            }
            if($model->save())
            {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Photopage model.
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
     * Finds the Photopage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Photopage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Photopage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
