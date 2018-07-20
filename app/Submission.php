<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = ['first_name', 'last_name', 'company', 'job_designation', 'email', 'phone', 'type'];

    protected $events = array(
        'hcm-08-09-2018'    => 'Ho Chi Minh',
        'hanoi-08-11-2018'  => 'Hanoi'
    );

    public static function checkExist($email, $type) {
        $result = self::where('email', $email)
            ->where('type', $type)
            ->first();
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
