<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topiccontext".
 *
 * @property int $id
 * @property string $text
 * @property int $subtopic_id
 *
 * @property Subtopic $subtopic
 */
class Topiccontext extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'topiccontext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'text', 'subtopic_id'], 'required'],
            [['id', 'subtopic_id'], 'default', 'value' => null],
            [['id', 'subtopic_id'], 'integer'],
            [['text'], 'string'],
            [['id'], 'unique'],
            [['subtopic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subtopic::class, 'targetAttribute' => ['subtopic_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'subtopic_id' => 'Subtopic ID',
        ];
    }

    /**
     * Gets query for [[Subtopic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubtopic()
    {
        return $this->hasOne(Subtopic::class, ['id' => 'subtopic_id']);
    }
}
