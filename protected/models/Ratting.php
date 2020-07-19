<?php

/**
 
 * @property integer $id_ratting
 * @property integer $id_product
 * @property integer $ratting
 */
class Ratting extends RattingBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ratting';
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
