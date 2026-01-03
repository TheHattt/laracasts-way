<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Job extends  Model
{
    use HasFactory;
 protected  $table = 'job_listings';

 protected  $fillable = ['title', 'salary'];

 public function employer()
 {
     /*Job belongs to employer -> means job has the FK */
    return $this->belongsTo(Employer::class);
 }

}
