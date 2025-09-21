<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'salary'];
    protected $table = 'job_listings';

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
