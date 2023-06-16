<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'dob',
      'religion',
      'permanent_address',
      'present_address',
      'nric',
      'pic',
      'first_name2',
      'last_name2',
      'dob2',
      'religion2',
      'permanent_address2',
      'present_address2',
      'nric2',
      'pic2',
      'name',
      'address',
      'name2',
      'address2',
      'marriage_date',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $casts = [
      'marriage_date' => 'date',
      'dob' => 'date',
      'dob2' => 'date',
    ];
}
