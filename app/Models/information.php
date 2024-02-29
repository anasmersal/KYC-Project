<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gender', 'date_of_birth', 'marital_status','nationality','job_title','residency_status','proofOfIdentity','pan','city','address','phoneNumber','email','dynamic_fields'];
}
