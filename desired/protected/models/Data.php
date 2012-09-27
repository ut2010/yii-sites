<?php

/**
 * This is the model class for table "data".
 *
 * The followings are the available columns in table 'data':
 * @property integer $id_user
 * @property integer $data1
 * @property integer $data2
 * @property integer $data3
 * @property integer $data4
 * @property integer $data5
 * @property integer $data6
 * @property integer $data7
 * @property integer $data8
 */
class Data extends CActiveRecord
{
	public $id_user = 1;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Data the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, data1, data2, data3, data4, data5, data6, data7, data8', 'required'),
			array('id_user, data1, data2, data3, data4, data5, data6, data7, data8', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_user, data1, data2, data3, data4, data5, data6, data7, data8', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'data1' => 'Data1',
			'data2' => 'Data2',
			'data3' => 'Data3',
			'data4' => 'Data4',
			'data5' => 'Data5',
			'data6' => 'Data6',
			'data7' => 'Data7',
			'data8' => 'Data8',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('data1',$this->data1);
		$criteria->compare('data2',$this->data2);
		$criteria->compare('data3',$this->data3);
		$criteria->compare('data4',$this->data4);
		$criteria->compare('data5',$this->data5);
		$criteria->compare('data6',$this->data6);
		$criteria->compare('data7',$this->data7);
		$criteria->compare('data8',$this->data8);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}