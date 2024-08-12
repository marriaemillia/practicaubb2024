<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Volunteer extends Pivot {

    public function department () {
        return $this->belongsTo(Department::class, "department_id", "id");
    }
}