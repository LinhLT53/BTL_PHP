<?php

class AboutController extends Controller
{
       public function init() {
            parent::init();
             $this->layout='//layouts/category';
        }
	public function actionIndex()
	{
		$this->render('index');
	}

	
}