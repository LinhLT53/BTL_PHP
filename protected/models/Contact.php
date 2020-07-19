<?php

/**
 
 * @property integer $id_contact
 * @property string $title
 * @property string $email
 * @property string $content
 */
class Contact extends ContactBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_contact';
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
