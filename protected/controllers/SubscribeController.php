<?php

class SubscribeController extends Controller
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
				'actions'=>array('index','view', 'submit', 'unsubscribe'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionSubmit($id){
        $model = Subscribe::model()->findByPk($id);
        if($model->status==0 && $model->code==$_POST['verification']){
            $model->verification = $_POST['verification'];
            $model->status = 1;
            $model->save();
        }

        if($model->status==2 && $model->code==$_POST['verification']){
            $model->delete();
            $this->redirect('http://lozay.ru');
        }
        $this->redirect(array('view','id'=>$model->id));
    }


    public function actionUnsubscribe($id){
	    $model = Subscribe::model()->findByPk($id);
	    if($model->status == 1){
            $to      = $model->email;
            $subject = 'Подтверждение отписки';
            $message = 'Код подтверждения: '.$model->code;
            $headers = 'From: noreply@lozay.ru' . "\r\n" .
                'Reply-To: noreply@lozay.ru' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            $model->status = 2;
            $model->save();

            $this->redirect(array('view','id'=>$model->id));
        }
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Subscribe;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Subscribe']))
		{
			$model->attributes=$_POST['Subscribe'];

            $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
            $numChars = strlen($chars);
            $string = '';
            for ($i = 0; $i < 8; $i++) {
                $string .= substr($chars, rand(1, $numChars) - 1, 1);
            }
            $model->code = $string;

            $model->time = time();

            $model->status = 0;

			if($model->save()){
                $to      = $model->email;
                $subject = 'Подтверждение подписки';
                $message = 'Код подтверждения: '.$model->code;
                $headers = 'From: noreply@lozay.ru' . "\r\n" .
                    'Reply-To: noreply@lozay.ru' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);

                $this->redirect(array('view','id'=>$model->id));
            }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Subscribe']))
		{
			$model->attributes=$_POST['Subscribe'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Subscribe');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Subscribe('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Subscribe']))
			$model->attributes=$_GET['Subscribe'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Subscribe the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Subscribe::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Subscribe $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='subscribe-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
