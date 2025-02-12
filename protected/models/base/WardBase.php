<?php

/**
 * This is the model class for table "tbl_ward".
 *
 * The followings are the available columns in table 'tbl_ward':
 * @property string $id_ward
 * @property string $name
 * @property string $type
 * @property string $location
 * @property string $id_district
 */
class WardBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ward';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('id_ward, name, type, location, id_district', 'required'),
			array('id_ward, id_district', 'length', 'max'=>5),
			array('name', 'length', 'max'=>100),
			array('type, location', 'length', 'max'=>30),
		
			array('id_ward, name, type, location, id_district', 'safe', 'on'=>'search'),
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
			'id_ward' => 'Id Ward',
			'name' => 'Name',
			'type' => 'Type',
			'location' => 'Location',
			'id_district' => 'Id District',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_ward',$this->id_ward,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('id_district',$this->id_district,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WardBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
