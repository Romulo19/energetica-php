<?php

class AreasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'reporte'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
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
		//$equiposSis = Equipos::model()->findAll('areas_id = :idArea', array(':idArea'=>$id));
		$equiposSis = Equipos::model()->findAllBySql('SELECT DISTINCT sistemas_id FROM equipos WHERE areas_id ='.$id);
		$this->render('view',array(
			'model'=>$this->loadModel($id), 'equiposSis'=>$equiposSis,
		));
	}

	public function actionReporte($id)
	{		
		$equiposSis = Equipos::model()->findAllBySql('SELECT DISTINCT sistemas_id FROM equipos WHERE areas_id ='.$id);
		$this->render('reporte',array(
			'model'=>$this->loadModel($id), 'equiposSis'=>$equiposSis,
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($idE)
	{
		$model=new Areas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Areas']))
		{
			$model->attributes=$_POST['Areas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model, 'idE'=>$idE,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id, $idE)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Areas']))
		{
			$model->attributes=$_POST['Areas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,'idE'=>$idE,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$area=$this->loadModel($id);
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(array('edificaciones/view','id'=>$area->edificaciones_id));

	}

	/**
	 * Lists all models.
	 */
	/*
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Areas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	*/
	/**
	 * Manages all models.
	 */
	/*
	public function actionAdmin()
	{
		$model=new Areas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Areas']))
			$model->attributes=$_GET['Areas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}*/

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Areas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Areas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Areas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='areas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
