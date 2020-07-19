<?php

class AdsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */


	/**
	 
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // cho phép xem
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // cho phép tạo và cập nhật
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // cho phép admin xoa
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // 
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 
	 */
	public function actionCreate()
	{
		$model=new Ads;

		
                    $path = Yii::getPathOfAlias('webroot').'/uploads';      
		if(isset($_POST['Ads']))
		{
			$model->attributes=$_POST['Ads']; 
                        $image = CUploadedFile::getInstance($model, 'image');
                        if($image){
                        $tem=rand(0,9999).time().$image->name;
                        $image->saveAs($path.'/'.$tem);
                        $model->image = 'uploads/'.$tem;
                        }
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_ads));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
                
		    $old_img = $model->image;
                    $path = Yii::getPathOfAlias('webroot').'/uploads';
        if (isset($_POST['Ads'])) {
            $model->attributes = $_POST['Ads'];
            $image = CUploadedFile::getInstance($model, 'image');
            if(!empty($image->name)){
                 $tem=rand(0,9999).time().$image->name;
                        $image->saveAs($path.'/'.$tem);
                        $model->image = 'uploads/'.$tem;
            }else{
                $model->image = $old_img;
            }
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_ads));
        }

		
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

             if( Yii::app()->session['username']==NULL){
                header('Content-type: application/json');
                echo CJSON::encode("You do not have access");
                Yii::app()->end();
            }
           $model=new Ads('search');
		$model->unsetAttributes();  
		if(isset($_GET['Ads']))
			$model->attributes=$_GET['Ads'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	
	 */
	public function actionAdmin()
	{
		$model=new Ads('search');
		$model->unsetAttributes();
		if(isset($_GET['Ads']))
			$model->attributes=$_GET['Ads'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	
	 * @param integer $id the ID of the model to be loaded
	 * @return Ads the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ads::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 
	 * @param Ads $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ads-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
