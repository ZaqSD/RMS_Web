<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $fillable = [ 'farId', 'linId', 'ticNameOfPerson', 'ticStart', 'ticDestination', 'validated' ];

    
}
