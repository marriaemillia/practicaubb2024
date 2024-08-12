<?php

namespace App\Models;

use App\Enums\CampType;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    use HasFactory;
    use HasTimestamps;
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'max_members',
        'equipment',
        'type'
    ];
    protected $casts = [
        "start_date" => "datetime",
        "end_date" => "datetime",
        "type" => CampType::class
    ];

    public function participants() {
        return $this->belongsToMany(User::class, "participants","user_id", "camp_id")->withPivot(["patrool_number"]);
    }

    public function volunteers() {
        return $this->belongsToMany(User::class, "volunteers","user_id", "camp_id")->using(Volunteer::class);
    }


}
