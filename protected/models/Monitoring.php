<?php

/**
 * This is the model class for table "point".
 *
 * The followings are the available columns in table 'point':
 * @property string $id_poin
 * @property string $pointname
 * @property string $location
 * @property string $information
 * @property integer $status
 */
class Monitoring extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Point the static model class
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
		return 'point';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pointname, location, information, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('pointname, location, information', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_poin, pointname, location, information, status', 'safe', 'on'=>'search'),
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
		    'log'=>array(self::HAS_MANY, 'LogPoint', 'id_poin'),
			'lastlog'=>array(self::HAS_ONE, 'LogPoint', 'id_poin', 'order'=>'id DESC'),
		);
	}
	
	public function scopes()
	{
		return array(
			'active'=>array(
				  'condition'=>'status=1',
			),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_poin' => 'Id Poin',
			'pointname' => 'Pointname',
			'location' => 'Location',
			'information' => 'Information',
			'status' => 'Status',
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

		$criteria->compare('id_poin',$this->id_poin,true);
		$criteria->compare('pointname',$this->pointname,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('information',$this->information,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}