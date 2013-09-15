<?php

/**
 * This is the model class for table "iluminacion".
 *
 * The followings are the available columns in table 'iluminacion':
 * @property integer $id
 * @property integer $cantidad
 * @property integer $horas_operacion
 * @property integer $dias_mensual
 * @property double $iluminancia_promedio
 * @property double $rendimiento_luminico
 * @property double $altura_de_colocacion
 * @property integer $tipo_Iluminacion_id
 * @property integer $areas_id
 *
 * The followings are the available model relations:
 * @property TipoIluminacion $tipoIluminacion
 * @property Areas $areas
 */
class Iluminacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Iluminacion the static model class
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
		return 'iluminacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_Iluminacion_id, areas_id', 'required'),
			array('cantidad, horas_operacion, dias_mensual, tipo_Iluminacion_id, areas_id', 'numerical', 'integerOnly'=>true),
			array('iluminancia_promedio, rendimiento_luminico, altura_de_colocacion', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cantidad, horas_operacion, dias_mensual, iluminancia_promedio, rendimiento_luminico, altura_de_colocacion, tipo_Iluminacion_id, areas_id', 'safe', 'on'=>'search'),
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
			'tipo_Iluminacion' => array(self::BELONGS_TO, 'Tipo_Iluminacion', 'tipo_Iluminacion_id'),
			'areas' => array(self::BELONGS_TO, 'Areas', 'areas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cantidad' => 'Cantidad',
			'horas_operacion' => 'Horas Operacion',
			'dias_mensual' => 'Dias Mensual',
			'iluminancia_promedio' => 'Iluminancia Promedio',
			'rendimiento_luminico' => 'Rendimiento Luminico',
			'altura_de_colocacion' => 'Altura De Colocacion',
			'tipo_Iluminacion_id' => 'Tipo Iluminacion',
			'areas_id' => 'Areas',
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
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('horas_operacion',$this->horas_operacion);
		$criteria->compare('dias_mensual',$this->dias_mensual);
		$criteria->compare('iluminancia_promedio',$this->iluminancia_promedio);
		$criteria->compare('rendimiento_luminico',$this->rendimiento_luminico);
		$criteria->compare('altura_de_colocacion',$this->altura_de_colocacion);
		$criteria->compare('tipo_Iluminacion_id',$this->tipo_Iluminacion_id);
		$criteria->compare('areas_id',$this->areas_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}