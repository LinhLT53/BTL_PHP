<?php

class Gender extends GenderBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_gender';
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
