<?php

/**
 * This is the model class for table "equipos".
 *
 * The followings are the available columns in table 'equipos':
 * @property integer $id
 * @property integer $hora_diarias
 * @property integer $dias_mensual
 * @property double $potencia
 * @property integer $tipo_equipos_id
 * @property integer $areas_id
 * @property integer $sistemas_id
 *
 * The followings are the available model relations:
 * @property Areas $areas
 * @property Sistemas $sistemas
 * @property TipoEquipos $tipoEquipos
 */
class Equipos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Equipos the static model class
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
		return 'equipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_equipos_id, areas_id, sistemas_id', 'required'),
			array('hora_diarias, dias_mensual, tipo_equipos_id, areas_id, sistemas_id', 'numerical', 'integerOnly'=>true),
			array('potencia', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, hora_diarias, dias_mensual, potencia, tipo_equipos_id, areas_id, sistemas_id', 'safe', 'on'=>'search'),
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
			'areas' => array(self::BELONGS_TO, 'Areas', 'areas_id'),
			'sistemas' => array(self::BELONGS_TO, 'Sistemas', 'sistemas_id'),
			'tipo_Equipos' => array(self::BELONGS_TO, 'Tipo_Equipos', 'tipo_equipos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hora_diarias' => 'Hora Diarias',
			'dias_mensual' => 'Dias Mensual',
			'potencia' => 'Potencia',
			'tipo_equipos_id' => 'Tipo Equipos',
			'areas_id' => 'Areas',
			'sistemas_id' => 'Sistemas',
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
		$criteria->compare('hora_diarias',$this->hora_diarias);
		$criteria->compare('dias_mensual',$this->dias_mensual);
		$criteria->compare('potencia',$this->potencia);
		$criteria->compare('tipo_equipos_id',$this->tipo_equipos_id);
		$criteria->compare('areas_id',$this->areas_id);
		$criteria->compare('sistemas_id',$this->sistemas_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}