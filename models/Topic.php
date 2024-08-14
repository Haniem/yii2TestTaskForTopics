<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topic".
 *
 * @property int $id
 * @property string $name
 *
 * @property Subtopic[] $subtopics
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['name'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Subtopics]].
     *
     * @return \yii\db\ActiveQuery
     */
}
