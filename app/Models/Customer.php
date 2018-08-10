<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    private static $tableName = 'customer';

    protected static function searchAll()
    {
        return DB::table(self::$tableName)->get();
    }

    protected static function searchByPhone($phone) {

    }

}
