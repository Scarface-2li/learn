<?php

namespace App\Models;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {

    use HasFactory, Notifiable;

    protected $table = 'job_listing';

    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
