<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    public function appointments() : hasMany
    {
        return $this->hasMany(DoctorAppointment::class);
    }
}
