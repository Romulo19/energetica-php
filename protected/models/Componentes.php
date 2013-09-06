<?php

/**
 * This is the model class for table "componenetes".
 *
 * The followings are the available columns in table 'componenetes':
 * @property integer $id
 * @property string $variable
 * @property string $valor
 * @property integer $tipo_equipos_id
 *
 * The followings are the available model relations:
 * @property TipoEquipos $tipoEquipos
 */
class Componentes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Componentes the static model class
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
		return 'componenetes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_equipos_id', 'required'),
			array('tipo_equipos_id', 'numerical', 'integerOnly'=>true),
			array('variable, valor', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, variable, valor, tipo_equipos_id', 'safe', 'on'=>'search'),
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
			'tipoEquipos' => array(self::BELONGS_TO, 'TipoEquipos', 'tipo_equipos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'variable' => 'Variable',
			'valor' => 'Valor',
			'tipo_equipos_id' => 'Tipo Equipos',
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
		$criteria->compare('variable',$this->variable,true);
		$criteria->compare('valor',$this->valor,true);
		$criteria->compare('tipo_equipos_id',$this->tipo_equipos_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}