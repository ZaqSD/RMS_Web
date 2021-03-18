<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationTimetable extends Model
{
    use HasFactory;

    protected $table = 'stationTimetable';

    public $fillable = [
    'linId',
    'timStaName',
    'timTimeOnArrival',
    'timTimeOnDeparture',
    'timPlatform'
    ];

    public function lines()
    {
        return $this->hasMany(Route::class);
    }
}
