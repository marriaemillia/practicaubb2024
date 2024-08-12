<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    use HasTimestamps;
    protected $fillable = [
        'name'

    ];

   
    public function volunteers() {
        return $this->belongsToMany(User::class, "volunteers","user_id", "camp_id")->using(Volunteer::class);
    }


}
