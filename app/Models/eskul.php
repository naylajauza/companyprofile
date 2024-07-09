<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    public $fillable = ['eskul', 'deskripsi', 'cover'];
    public $visibe = ['eskul', 'deskripsi', 'cover'];

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/eskul/' . $this->cover))) {
            return unlink(public_path('images/eskul/' . $this->cover));
        }
    }

}
