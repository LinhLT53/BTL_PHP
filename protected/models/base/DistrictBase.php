<?php

/**
 * This is the model class for table "tbl_district".
 *
 * The followings are the available columns in table 'tbl_district':
 * @property string $id_district
 * @property string $name
 * @property string $type
 * @property string $location
 * @property string $id_province
 */
class DistrictBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_district';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('id_district, name, type, location, id_province', 'required'),
			array('id_district, id_province', 'length', 'max'=>5),
			array('name', 'length', 'max'=>100),
			array('type, location', 'length', 'max'=>30),
			
			array('id_district, name, type, location, id_province', 'safe', 'on'=>'search'),
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
			'id_district' => 'Id District',
			'name' => 'Name',
			'type' => 'Type',
			'location' => 'Location',
			'id_province' => 'Id Province',
		);
	}

	/**
	
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
	

		$criteria=new CDbCriteria;

		$criteria->compare('id_district',$this->id_district,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('id_province',$this->id_province,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 
	 * @param string $className active record class name.
	 * @return DistrictBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
