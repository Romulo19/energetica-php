<?php

/**
 * This is the model class for table "iluminacion".
 *
 * The followings are the available columns in table 'iluminacion':
 * @property integer $id
 * @property integer $cantidad
 * @property integer $horas_operacion
 * @property integer $dias_mensual
 * @property double $iluminancia_pro
 * @property double $rendimien_lu
 * @property double $altura_colo
 * @property integer $tipo_Iluminacion_id
 *
 * The followings are the available model relations:
 * @property Areas[] $areases
 * @property TipoIluminacion $tipoIluminacion
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
			array('tipo_Iluminacion_id', 'required'),
			array('cantidad, horas_operacion, dias_mensual, tipo_Iluminacion_id', 'numerical', 'integerOnly'=>true),
			array('iluminancia_pro, rendimien_lu, altura_colo', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cantidad, horas_operacion, dias_mensual, iluminancia_pro, rendimien_lu, altura_colo, tipo_Iluminacion_id', 'safe', 'on'=>'search'),
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
			'areases' => array(self::HAS_MANY, 'Areas', 'iluminacion_id'),
			'tipoIluminacion' => array(self::BELONGS_TO, 'TipoIluminacion', 'tipo_Iluminacion_id'),
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
			'iluminancia_pro' => 'Iluminancia Pro',
			'rendimien_lu' => 'Rendimien Lu',
			'altura_colo' => 'Altura Colo',
			'tipo_Iluminacion_id' => 'Tipo Iluminacion',
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
		$criteria->compare('iluminancia_pro',$this->iluminancia_pro);
		$criteria->compare('rendimien_lu',$this->rendimien_lu);
		$criteria->compare('altura_colo',$this->altura_colo);
		$criteria->compare('tipo_Iluminacion_id',$this->tipo_Iluminacion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}