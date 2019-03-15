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

    public static function getTimefromTimeSlot($data) {
        $t = '';
        switch ($data) {
            case 'ts-0424-p1':
                $t = "Wednesday, April 24, 2019 9:00AM - 11:00AM";
                break;
            case 'ts-0424-p4':
                $t = "Wednesday, April 24, 2019 2:00PM - 4:00PM";
                break;
            case 'ts-0425-p1':
                $t = "Wednesday, April 25, 2019 9:00AM - 11:00AM";
                break;
            case 'ts-0425-p4':
                $t = "Wednesday, April 25, 2019 2:00PM - 5:00PM";
                break;
        }
        return $t;
    }

    public static function getVenuefromTimeSlot($data) {
        $t = '';
        switch ($data) {
            case 'ts-0424-p1':
            case 'ts-0425-p1':
                $t = "P1";
                break;
            case 'ts-0424-p4':
            case 'ts-0425-p4':
                $t = "P4";
                break;
        }
        return $t;
    }
}
