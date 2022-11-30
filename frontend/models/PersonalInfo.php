<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "personalInfo".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $image_url
 * @property mixed $firstname
 * @property mixed $lastname
 * @property mixed $fistnamethai
 * @property mixed $lastnamethai
 * @property mixed $genderemail
 * @property mixed $phone
 * @property mixed $education_qualification
 * @property mixed $graduating
 * @property mixed $university
 * @property mixed $country
 * @property mixed $current_position
 * @property mixed $expertise
 */
class PersonalInfo extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return 'personal_info';
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'image_url',
            'firstname',
            'lastname',
            'fistnamethai',
            'lastnamethai',
            'email',
            'phone',
            'education_qualification',
            'graduating',
            'university',
            'country',
            'current_position',
            'expertise',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_url', 'firstname', 'lastname', 'fistnamethai', 'lastnamethai', 'email', 'phone', 'education_qualification', 'graduating', 'university', 'country', 'current_position', 'expertise'], 'safe']
        ];
    }
    public function getTableSchema(){
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'image_url' => 'Image Url',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'fistnamethai' => 'Fistnamethai',
            'lastnamethai' => 'Lastnamethai',
            'email' => 'Email',
            'phone' => 'Phone',
            'education_qualification' => 'Education Qualification',
            'graduating' => 'Graduating',
            'university' => 'University',
            'country' => 'Country',
            'current_position' => 'Current Position',
            'expertise' => 'Expertise',
        ];
    }
}
