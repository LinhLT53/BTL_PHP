<?php

/**

 * @property integer $id_comment
 * @property integer $id_user
 * @property integer $id_news_detail
 * @property string $content
 * @property string $date_add
 */
class CommentBase extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tbl_comment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
       
        return array(
            array('content', 'required'),
            array('id_user, id_news_detail', 'numerical', 'integerOnly'=>true),
            array('date_add', 'safe'),
            
            array('id_comment, id_user, id_news_detail, content, date_add', 'safe', 'on'=>'search'),
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
            'id_comment' => 'Id Comment',
            'id_user' => 'Id User',
            'id_news_detail' => 'Id News Detail',
            'content' => 'Content',
            'date_add' => 'Date Add',
        );
    }

    /**
    
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
       

        $criteria=new CDbCriteria;

        $criteria->compare('id_comment',$this->id_comment);
        $criteria->compare('id_user',$this->id_user);
        $criteria->compare('id_news_detail',$this->id_news_detail);
        $criteria->compare('content',$this->content,true);
        $criteria->compare('date_add',$this->date_add,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     
     * @param string $className active record class name.
     * @return CommentBase the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}