<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class Job extends Model{
    use HasFactory;
   protected $table = 'job_listings';
   protected $fillable = ['employer_id','title', 'salary'];

   public function employer(): BelongsTo {
       return $this->belongsTo(Employer::class);
   }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->BelongsToMany(Tag::class, 'job_tags', 'job_listing_id', 'tag_id');
    }
}

