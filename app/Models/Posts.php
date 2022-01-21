<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;

class Posts extends Model
{
    use HasFactory;
    use Attachable;
    //ce trait provient du paquet plateform admin-panel pour rendre possible l'upload

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    protected $fillable = ['title','slug','content','image','categorie_id'];
}
