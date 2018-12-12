<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yp_works".
 *
 * @property int $id
 * @property int $uid 用户ID
 * @property string $content 内容
 * @property int $is_sensitive 是否包含敏感词 1是 2否
 * @property string $logo 封面图地址
 * @property int $logo_id 封面附件ID
 * @property int $attachs 附件数量
 * @property int $replies 回复数
 * @property int $views 浏览量
 * @property int $collects 作品收藏数量
 * @property int $likes 点赞数
 * @property int $rewards 打赏人数
 * @property string $longitude 经度
 * @property string $latitude 纬度
 * @property string $address 发布地点
 * @property int $last_replied 最后回复时间
 * @property int $type 话题类别，1图文，2视屏
 * @property int $is_top
 * @property int $status 1通过 2待审 3未通过
 * @property int $created_at
 * @property int $updated_at 修改时间
 */
class Works extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yp_works';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'is_sensitive', 'logo_id', 'attachs', 'replies', 'views', 'collects', 'likes', 'rewards', 'last_replied', 'type', 'is_top', 'status', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['longitude', 'latitude'], 'number'],
            [['logo', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'content' => 'Content',
            'is_sensitive' => 'Is Sensitive',
            'logo' => 'Logo',
            'logo_id' => 'Logo ID',
            'attachs' => 'Attachs',
            'replies' => 'Replies',
            'views' => 'Views',
            'collects' => 'Collects',
            'likes' => 'Likes',
            'rewards' => 'Rewards',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'address' => 'Address',
            'last_replied' => 'Last Replied',
            'type' => 'Type',
            'is_top' => 'Is Top',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
