<?php

namespace Hamahang\FAQ\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use softDeletes;
    protected $table = 'faq_manager';
    public function user()
    {
        return $this->belongsTo(config('laravel_tagable.user_model'), 'created_by');
    }

    public function tags()
    {
        return $this->morphToMany('Hamahang\LTS\Models\Tag' , 'tagable','lts_tagables','tagable_id','tag_id')->withPivot('type')->withTimestamps() ;
    }

}
