<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id', 'reviewer_id', 'review_complete', 'marks'
    ];

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function reviewer(){
        return $this->belongsTo(User::class,'reviewer_id', 'id');
    }
}
