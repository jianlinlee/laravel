<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{

    protected static function getMobileSmsCode($phone,$smscode)
    {
        return 1;
    }
}
