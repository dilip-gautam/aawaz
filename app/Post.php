<?php

namespace App;
Use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo('App\User','author_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getDateAttribute($value){
        return is_null($this->published_at) ? '': $this->published_at->diffForHumans();
    }

    public function getBodyHtmlAttribute($value){
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL;
    }

    public function getExcerptHtmlAttribute($value){
        return $this->excerpt ? Markdown::convertToHtml(e($this->excerpt)) : NULL;
    }

    public function getPublishedAttribute(){
        return $this->where('published_at','<=',Carbon::now());
        
    }

    public function scopenewest(){
        return $this->orderBy('published_at','desc');
    }

    public function scopepublished(){
        return $this->where('published_at','<=',Carbon::now());
        
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
