<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarRegister extends Model
{
    protected $fillable = ['first_name', 'last_name', 'company_email', 'country', 'organization', 'job_title'];
    protected $table = "webinar_register";

    public static function checkExist($company_email) {
        $result = self::where('company_email', $company_email)
            ->first();
        if ($result) {
            return true;
        }
        return false;
    }
}
