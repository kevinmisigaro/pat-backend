<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id', 'response', 'response_document', 'commenter_id'
    ];

    public function commenter(){
        return $this->belongsTo(User::class,'commenter_id', 'id');
    }
}
