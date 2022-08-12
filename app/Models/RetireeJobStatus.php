<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetireeJobStatus extends Model
{
    use HasFactory;
    protected $fillable= ['id','user_id', 'applying_job', 'approved_job', 'rejected_job', 'feedbacks',];
}
