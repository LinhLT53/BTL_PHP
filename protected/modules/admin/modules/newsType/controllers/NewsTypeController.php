<?php

class NewsTypeController extends Controller
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
		$model=new NewsType;

		
		if(isset($_POST['NewsType']))
		{
			$model->attributes=$_POST['NewsType'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_news_type));
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

	

		if(isset($_POST['NewsType']))
		{
			$model->attributes=$_POST['NewsType'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_news_type));
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
           $model=new NewsType('search');
		$model->unsetAttributes();  
		if(isset($_GET['NewsType']))
			$model->attributes=$_GET['NewsType'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionAdmin()
	{
		$model=new NewsType('search');
		$model->unsetAttributes();  
		if(isset($_GET['NewsType']))
			$model->attributes=$_GET['NewsType'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 
	 * @param integer $id the ID of the model to be loaded
	 * @return NewsType the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=NewsType::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	
	 * @param NewsType $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-type-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
