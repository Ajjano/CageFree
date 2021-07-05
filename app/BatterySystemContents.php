<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BatterySystemContents extends Model
{
    public $timestamps = false;

    public static function add($fields)
    {
        $cart = new static;
        $cart->fill($fields);
        $cart->save();

        return $cart;
    }
    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = $image->getClientOriginalName().Str::random(5);
        $image->storeAs('uploads/battery', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function setStatus($status)
    {
//        dd($status);
        if($status=='on')
            $this->status=1;
        elseif($status==null)
            $this->status=0;

        $this->save();

    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/battery' . $this->image);
        }
    }

    public function getImage()
    {
        if($this->image == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/battery/' . $this->image;

    }
    public function getStatus()
    {
       if($this->status!=null){
           if($this->status==1)
               return 'Активна';
           else
               return 'Неактивна';
       }
       else return 'Неактивна';
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
}
