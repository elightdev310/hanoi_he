<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = ['first_name', 'last_name', 'company', 'job_designation', 'email', 'phone', 'type'];

    protected $events = array(
        'hcm-08-09-2018'    => 'HCM Eblast',
        'hanoi-08-11-2018'  => 'Hanoi Eblast'
    );

    public static function checkExist($email, $type) {
        $result = self::where('email', $email)
            ->where('type', $type)
            ->firstOrFail();
        if ($result) {
            return true;
        }
        return false;
    }

    public function getEventTypeName() {
        if (isset($this->events[$this->type])) {
            return $this->events[$this->type];
        }
        return '';
    }
}
