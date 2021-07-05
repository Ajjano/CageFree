<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Content extends Model
{
    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = $image->getClientOriginalName();
        $image->storeAs('uploads', $filename);
        $this->main__image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->main__image != null)
        {
            Storage::delete('uploads/' . $this->main__image);
        }
    }

    public function getImage()
    {
        if($this->main__image == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/' . $this->main__image;

    }

    public function uploadImageAboutUs($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = $image->getClientOriginalName();
        $image->storeAs('uploads', $filename);
        $this->about_us__image = $filename;
        $this->save();
    }

    public function removeImageAboutUs()
    {
        if($this->about_us__image != null)
        {
            Storage::delete('uploads/' . $this->about_us__image);
        }
    }

    public function getImageAboutUs()
    {
        if($this->about_us__image == null)
        {
            return '/uploads/no-image.jpg';
        }

        return '/uploads/' . $this->about_us__image;

    }
}
