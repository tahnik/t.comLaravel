<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'body', 'datePublished', 'user_id'
    ];
    public function setDatePublishedAttribute($date){
        $this->attributes['datePublished'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
