<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'mct_number', 'document', 'payed','theme_id', 'country_id','phone','title',
        'dob','gender', 'application_reason','affiliation','additional_affiliation','coauthor'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function theme(){
        return $this->belongsTo(Theme::class);
    }

    public function document(){
        return $this->hasOne(Document::class,'applicant_id', 'id');
    }

}
