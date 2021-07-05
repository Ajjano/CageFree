<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Petition extends Model
{
    protected $fillable = ['title', 'link'];
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

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
}
