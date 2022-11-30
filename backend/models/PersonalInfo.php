<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "personal_info".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $personal_id
 * @property mixed $contact
 * @property mixed $educational
 * @property mixed $positon
 * @property mixed $expertise
 */
class PersonalInfo extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['personal_info', 'personal_info'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'personal_id',
            'contact',
            'educational',
            'positon',
            'expertise',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personal_id', 'contact', 'educational', 'positon', 'expertise'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'personal_id' => 'Personal ID',
            'contact' => 'Contact',
            'educational' => 'Educational',
            'positon' => 'Positon',
            'expertise' => 'Expertise',
        ];
        
    }
    public function getTableSchema(){
        return false;
    }
    
}
