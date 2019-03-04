<?php

namespace Orm;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected  $primaryKey = "id";

    protected  $timestamps = true;

}
