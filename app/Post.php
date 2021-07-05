<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = $image->getClientOriginalName().Str::random(5);
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/' . $this->image);
        }
    }

    public function getImage()
    {
        if($this->image == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/' . $this->image;

    }

    public function getDate()
    {
        $date = Carbon::parse($this->updated_at)->locale('uk');
      return $date->isoFormat('D MMMM GGGG');
    }

    public function getDay()
    {
        $date = Carbon::parse($this->updated_at);
        return $date->isoFormat('D');
    }

    public function getMonth()
    {
        $date = Carbon::parse($this->updated_at)->locale('uk');
        return $date->getTranslatedMonthName('Do MMMM');

    }

    public function getYear()
    {
      $date = Carbon::parse($this->updated_at)->locale('uk');
       return $date->isoFormat('GGGG');

    }

    public function getShortDescription()
    {
        return substr($this->content, 0, strpos($this->content, '.')).'.';
    }

    public function getStatus()
    {
        if($this->status!=null){
            if($this->status==1)
                return 'Активний';
            else
                return 'Чернетка';
        }
        else return 'Чернетка';
    }

    public function setStatus($status)
    {
        if($status=='on')
            $this->status=1;
        elseif($status==null)
            $this->status=0;

        $this->save();

    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
}
