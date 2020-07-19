<?php

class AdminModule extends CWebModule
{
    private $_assetsUrl;

    public function getAssetsUrl() {
        if ($this->_assetsUrl === null)
            $this->_assetsUrl = Yii::app()->getAssetManager()->publish(
                    Yii::getPathOfAlias('admin.assets'));
        return $this->_assetsUrl;
    }

    public function init()
	{
           
              $this->layout='//layouts/admin';
		
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
                        'application.models.*',
                        'application.models.base.*',
		));
             
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			
			return true;
		}
		else
			return false;
	}
}
