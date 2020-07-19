<?php

/**

 * @property integer $id_size
 * @property string $name
 */
class Size extends SizeBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_size';
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
         static function getAllSize($field='*'){
             $data = Yii::app()->db->createCommand()
                    ->select($field)
                    ->from('tbl_size')
                    ->queryAll();
            return $data;
        }
}
