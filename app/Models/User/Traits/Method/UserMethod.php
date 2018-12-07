<?php

namespace App\Models\User\Traits\Method;

trait UserMethod {

    public function isAdmin(){

        if($this->name === config('access.users.admin_role') || $this->name === config('access.users.employee_role'))
        {
           return true;
        }
        return false;

    }
}

