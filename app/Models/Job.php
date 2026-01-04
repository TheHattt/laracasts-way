<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    // protected $guarded = [];
    protected $fillable = ['employer_id', 'title', 'salary'];

    public function employer()
    {
        /* Job belongs to employer -> means job has the FK */
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        /* many-to-many relationship */
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listings_id');
    }
}
