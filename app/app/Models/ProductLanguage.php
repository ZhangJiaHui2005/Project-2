<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLanguage extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'language_id', 'url', 'name', 'description', 'content', 'meta_title', 'meta_description', 'meta_keyword', 'canonical'];
    protected $table = 'product_language';
}
