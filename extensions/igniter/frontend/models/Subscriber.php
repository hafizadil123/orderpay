<?php

namespace Igniter\Frontend\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'igniter_frontend_subscribers';

    protected $primaryKey = 'id';

    protected $fillable = ['email'];
}