<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyTable extends Model
{
    use HasFactory;

//    protected $table = TechnologyTable;

    protected $fillable = ['TechHeading','TechDesc','techImage_url'];
}
