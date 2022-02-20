<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // $guardedを定義してcreate()でデータを追加する際に、値を代入「させない」フィールドを設定します。（つまりそれ以外は代入が許可されます）
    protected $guarded = array('id', 'user_id');

    public static $rules = array(
        'nickname' => 'required',
    );
}
