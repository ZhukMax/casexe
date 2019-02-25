<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Gift Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Gift extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'gift';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['code'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['code', 'type', 'value', 'status'], 'required']
        ];
    }
}
