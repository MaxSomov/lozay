<?php

class DefaultController extends Controller
{
    public $layout = '//../modules/admin/views/layouts/main';

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
                'actions'=>array('index','view', 'log', 'clear'),
                'users'=>array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update', 'del'),
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

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionLog(){
        $this->render('log');
    }

    public function actionClear(){
        $fp = fopen(dirname(__FILE__).'/../../../runtime/application.log', 'w+');
        fclose($fp);
	    $this->redirect('log');
    }

}