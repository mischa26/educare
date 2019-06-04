<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Division extends Model
{
    //
    // public static function insertData($data)
    // {
    //     $value = DB::table('divisions')->where('divisionname', $data['divisionname'])->get();
    //     if ($value->count()==0)
    //     {
    //         DB::table('divisions')->insert($data)
    //     }
    // }
    // public $table = 'divisions';
    protected $fillable=['divisionname'];
    // public $primaryKey = 'divid';
    // public $incrementing = true;
}
