<?php

/**
 * This is the model class for table "tbl_gender".
 *
 * The followings are the available columns in table 'tbl_gender':
 * @property integer $id_gender
 * @property integer $iso_code
 * @property string $name
 */
class GenderBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_gender';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('iso_code, name', 'required'),
			array('iso_code', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>32),
			
			array('id_gender, iso_code, name', 'safe', 'on'=>'search'),
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
			'id_gender' => 'Id Gender',
			'iso_code' => 'Iso Code',
			'name' => 'Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		

		$criteria=new CDbCriteria;

		$criteria->compare('id_gender',$this->id_gender);
		$criteria->compare('iso_code',$this->iso_code);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	
	 * @param string $className active record class name.
	 * @return GenderBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
