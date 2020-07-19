<?php

/**
 * This is the model class for table "tbl_shop_config".
 *
 * The followings are the available columns in table 'tbl_shop_config':
 * @property integer $id_shop
 * @property string $address
 * @property string $telephone
 * @property string $email
 */
class ShopConfigBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_shop_config';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
	
		return array(
			array('address, telephone, email', 'required'),
			array('address, telephone, email', 'length', 'max'=>200),
		
			array('id_shop, address, telephone, email', 'safe', 'on'=>'search'),
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
			'id_shop' => 'Id Shop',
			'address' => 'Address',
			'telephone' => 'Telephone',
			'email' => 'Email',
		);
	}

	/**
	
	 * @return CActiveDataProvider the data provider that can return the models
	
	 */
	public function search()
	{
		

		$criteria->compare('id_shop',$this->id_shop);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 
	 * @param string $className active record class name.
	 * @return ShopConfigBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
