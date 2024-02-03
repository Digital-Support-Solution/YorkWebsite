<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorAppointment extends Model
{
    public function doctor() : belongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
