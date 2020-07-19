<?php

/**
 * This is the model class for table "tbl_province".
 *
 * The followings are the available columns in table 'tbl_province':
 * @property string $id_province
 * @property string $name
 * @property string $type
 */
class ProvinceBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_province';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('id_province, name, type', 'required'),
			array('id_province', 'length', 'max'=>5),
			array('name', 'length', 'max'=>100),
			array('type', 'length', 'max'=>30),
			
			array('id_province, name, type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_province' => 'Id Province',
			'name' => 'Name',
			'type' => 'Type',
		);
	}

	/**
	
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		

		$criteria=new CDbCriteria;

		$criteria->compare('id_province',$this->id_province,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 
	 * @param string $className active record class name.
	 * @return ProvinceBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
