<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DieAttach extends Model
{
    protected $table = "die_attach";
    protected $guarded = [];

    public static function checkExist($company_email) {
        $result = self::where('company_email', $company_email)
            ->first();
        if ($result) {
            return true;
        }
        return false;
    }
}
