<?php

class ContactModule extends CWebModule
{
    private $_assetsUrl;
// phương thức dùng để lấy url trong modules
    public function getAssetsUrl() {
        if ($this->_assetsUrl === null)
            $this->_assetsUrl = Yii::app()->getAssetManager()->publish(
                    Yii::getPathOfAlias('admin.assets'));
        return $this->_assetsUrl;
    }
	public function init()
	{
	
		$this->setImport(array(
			'contact.models.*',
			'contact.components.*',
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
