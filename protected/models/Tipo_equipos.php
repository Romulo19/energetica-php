<?php

/**
 * This is the model class for table "tipo_equipos".
 *
 * The followings are the available columns in table 'tipo_equipos':
 * @property integer $id
 * @property integer $sistemas_id
 * @property string $nombre
 *
 * The followings are the available model relations:
 * @property Componenetes[] $componenetes
 * @property Equipos[] $equiposes
 * @property Sistemas $sistemas
 */
class Tipo_equipos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tipo_equipos the static model class
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
		return 'tipo_equipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sistemas_id', 'required'),
			array('sistemas_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sistemas_id, nombre', 'safe', 'on'=>'search'),
			 array('nombre', 'required' ),
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
			'componenetes' => array(self::HAS_MANY, 'Componenetes', 'tipo_equipos_id'),
			'equiposes' => array(self::HAS_MANY, 'Equipos', 'tipo_equipos_id'),
			'sistemas' => array(self::BELONGS_TO, 'Sistemas', 'sistemas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sistemas_id' => 'Sistemas',
			'nombre' => 'Nombre',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('sistemas_id',$this->sistemas_id);
		$criteria->compare('nombre',$this->nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}