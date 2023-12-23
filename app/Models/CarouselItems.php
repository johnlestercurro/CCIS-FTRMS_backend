<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItems extends Model
{
    use HasFactory;
/**
     * The table associated with the Model.
     *
     * @var array
     */
    protected $table = '_faculty';

    /**
     * The primary key associated with the table.
     *
     * @var array
     */
    protected $primaryKey = 'faculty_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'faculty_name',
        'email',
        'date_hired',
        'user_id',

    
    ];
}
