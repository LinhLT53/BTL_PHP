<?php

class SizeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */


	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
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
		$model=new Size;

	

		if(isset($_POST['Size']))
		{
			$model->attributes=$_POST['Size'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_size));
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

		

		if(isset($_POST['Size']))
		{
			$model->attributes=$_POST['Size'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_size));
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


	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Size');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


	public function actionAdmin()
	{
		$model=new Size('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Size']))
			$model->attributes=$_GET['Size'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	
	 * @param integer $id the ID of the model to be loaded
	 * @return Size the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Size::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**

	 * @param Size $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='size-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
