<?php

/**
 * This is the model class for table "areas".
 *
 * The followings are the available columns in table 'areas':
 * @property integer $id
 * @property string $nombre
 * @property string $dimensiones
 * @property double $carga_termica
 * @property string $co2
 * @property integer $edificaciones_id
 * @property integer $tipo_actividad_id
 *
 * The followings are the available model relations:
 * @property Edificaciones $edificaciones
 * @property TipoActividad $tipoActividad
 * @property Equipos[] $equiposes
 * @property Iluminacion[] $iluminacions
 */
class Areas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Areas the static model class
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
		return 'areas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('edificaciones_id, tipo_actividad_id', 'required'),
			array('edificaciones_id, tipo_actividad_id', 'numerical', 'integerOnly'=>true),
			array('carga_termica', 'numerical'),
			array('nombre, dimensiones, co2', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, dimensiones, carga_termica, co2, edificaciones_id, tipo_actividad_id', 'safe', 'on'=>'search'),
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
			'edificaciones' => array(self::BELONGS_TO, 'Edificaciones', 'edificaciones_id'),
			'tipo_Actividad' => array(self::BELONGS_TO, 'Tipo_Actividad', 'tipo_actividad_id'),
			'equipos' => array(self::HAS_MANY, 'Equipos', 'areas_id'),
			'iluminacions' => array(self::HAS_MANY, 'Iluminacion', 'areas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'dimensiones' => 'Dimensiones',
			'carga_termica' => 'Carga Termica',
			'co2' => 'Co2',
			'edificaciones_id' => 'Edificaciones',
			'tipo_actividad_id' => 'Tipo Actividad',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('dimensiones',$this->dimensiones,true);
		$criteria->compare('carga_termica',$this->carga_termica);
		$criteria->compare('co2',$this->co2,true);
		$criteria->compare('edificaciones_id',$this->edificaciones_id);
		$criteria->compare('tipo_actividad_id',$this->tipo_actividad_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}