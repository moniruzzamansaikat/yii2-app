<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general_settings".
 *
 * @property int $id
 * @property string|null $site_title
 * @property string|null $base_color
 * @property string|null $site_email
 * @property string|null $site_phone
 * @property string|null $site_address
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class GeneralSetting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'general_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_address'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['site_title', 'site_email'], 'string', 'max' => 255],
            [['base_color'], 'string', 'max' => 7],
            [['site_phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_title' => 'Site Title',
            'base_color' => 'Base Color',
            'site_email' => 'Site Email',
            'site_phone' => 'Site Phone',
            'site_address' => 'Site Address',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
