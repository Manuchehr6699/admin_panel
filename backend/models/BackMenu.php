<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "back_menu".
 *
 * @property int $nodeid
 * @property int $parentnodeid
 * @property string $nodeshortname
 * @property string $nodename
 * @property string $nodeurl
 * @property string $userstatus
 * @property int $nodeaccess
 * @property int $nodestatus
 * @property int $nodeorder
 * @property string $nodefile
 * @property string $nodeicon
 * @property string $ishasdivider
 * @property string $hasnotify
 * @property string $notifyscript
 * @property string $isforguest
 */
class BackMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'backend_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parentnodeid', 'nodeshortname', 'nodename', 'nodeurl', 'nodeaccess', 'nodestatus', 'nodeorder'], 'required'],
            [['parentnodeid', 'nodeaccess', 'nodestatus', 'nodeorder'], 'integer'],
            [['ishasdivider', 'hasnotify', 'isforguest'], 'string'],
            [['nodeshortname', 'nodeicon'], 'string', 'max' => 50],
            [['nodename'], 'string', 'max' => 100],
            [['nodeurl', 'nodefile', 'notifyscript'], 'string', 'max' => 255],
            [['userstatus'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nodeid' => 'Nodeid',
            'parentnodeid' => 'Parentnodeid',
            'nodeshortname' => 'Nodeshortname',
            'nodename' => 'Nodename',
            'nodeurl' => 'Nodeurl',
            'userstatus' => 'Userstatus',
            'nodeaccess' => 'Nodeaccess',
            'nodestatus' => 'Nodestatus',
            'nodeorder' => 'Nodeorder',
            'nodefile' => 'Nodefile',
            'nodeicon' => 'Nodeicon',
            'ishasdivider' => 'Ishasdivider',
            'hasnotify' => 'Hasnotify',
            'notifyscript' => 'Notifyscript',
            'isforguest' => 'Isforguest',
        ];
    }
}
