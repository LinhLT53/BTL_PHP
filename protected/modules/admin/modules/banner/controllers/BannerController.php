<?php

//edit:Thao.15/10
class BannerController extends Controller {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
//	public function filters()
//	{
//		return array(
//			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
//		);
//	}

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', 
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', 
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', 
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', 
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     
     */
    public function actionCreate() {
        $model = new Banner;

       
        $path = Yii::getPathOfAlias('webroot') . '/uploads';
        // die($path);
        if (isset($_POST['Banner'])) {
            $model->attributes = $_POST['Banner'];
//            echo '<prE>';
//            print_r($model->attributes);
//            die;
            $image = CUploadedFile::getInstance($model, 'image');
            if ($image) {
                $tem = rand(0, 9999) . time() . $image;
                $image->saveAs($path . '/' . $tem);
                $model->image = 'uploads/' . $tem;
            }
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_banner));
        }


    

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

       
        $path = Yii::getPathOfAlias('webroot') . '/uploads';
        $old_image = $model->image;
        if (isset($_POST['Banner'])) {
            $model->attributes = $_POST['Banner'];
            $image = CUploadedFile::getInstance($model, 'image');
                        if(!empty($image->name)){
                        $tem=rand(0,9999).time().$image->name;
                        $image->saveAs($path.'/'.$tem);
                        $model->image = 'uploads/'.$tem;
                        }  else {
                           $model->image=$old_image; 
                          
                        }
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_banner));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
   
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

       
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    //kiem tra dang nhap truoc khi vao he thong quan ly admin
    public function actionIndex() {

        //phai dang nhap moi vao dc qly admin
        if (Yii::app()->session['username'] == NULL) {
            header('Content-type: application/json');
            echo CJSON::encode("You do not have access");
            Yii::app()->end();
        }
        $model = new Banner('search');
        $model->unsetAttributes(); 
        if (isset($_GET['Banner']))
            $model->attributes = $_GET['Banner'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

   
    public function actionAdmin() {
        $model = new Banner('search');
        $model->unsetAttributes();  
        if (isset($_GET['Banner']))
            $model->attributes = $_GET['Banner'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
   
     * @param integer $id the ID of the model to be loaded
     * @return Banner the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Banner::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
   
     * @param Banner $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'banner-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
