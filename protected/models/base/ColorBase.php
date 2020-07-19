<?php

/**
 
 * @property integer $id_color
 * @property string $name
 * @property string $code
 */
class ColorBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_color';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('name, code', 'required'),
			array('name, code', 'length', 'max'=>100),
			
			array('id_color, name, code', 'safe', 'on'=>'search'),
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
			'id_color' => 'Id Color',
			'name' => 'Name',
			'code' => 'Code',
		);
	}

	/**
	
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		
		$criteria=new CDbCriteria;

		$criteria->compare('id_color',$this->id_color);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	
	 * @param string $className active record class name.
	 * @return ColorBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
