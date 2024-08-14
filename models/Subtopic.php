<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subtopic".
 *
 * @property int $id
 * @property string $name
 * @property int $topic_id
 *
 * @property Topic $topic
 * @property Topiccontext[] $topiccontexts
 */
class Subtopic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subtopic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'topic_id'], 'required'],
            [['id', 'topic_id'], 'default', 'value' => null],
            [['id', 'topic_id'], 'integer'],
            [['name'], 'string'],
            [['id'], 'unique'],
            [['topic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Topic::class, 'targetAttribute' => ['topic_id' => 'id']],
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
            'topic_id' => 'Topic ID',
        ];
    }

    /**
     * Gets query for [[Topic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTopic()
    {
        return $this->hasOne(Topic::class, ['id' => 'topic_id']);
    }

    /**
     * Gets query for [[Topiccontexts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTopiccontexts()
    {
        return $this->hasMany(Topiccontext::class, ['subtopic_id' => 'id']);
    }
}
