<?php

class ShopConfigController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */


	/**
	
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', 
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  
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


	public function actionCreate()
	{
		$model=new ShopConfig;

		
		if(isset($_POST['ShopConfig']))
		{
			$model->attributes=$_POST['ShopConfig'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_shop));
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

		

		if(isset($_POST['ShopConfig']))
		{
			$model->attributes=$_POST['ShopConfig'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_shop));
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
	
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ShopConfig');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	
	 */
	public function actionAdmin()
	{
		$model=new ShopConfig('search');
		$model->unsetAttributes(); 
		if(isset($_GET['ShopConfig']))
			$model->attributes=$_GET['ShopConfig'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	
	 * @param integer $id the ID of the model to be loaded
	 * @return ShopConfig the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ShopConfig::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	
	 * @param ShopConfig $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='shop-config-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
