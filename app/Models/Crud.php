<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    //

    protected $table = 'cruds';

    protected $fillable = ['nama', 'alamat'];

   /*** public function sales () {
        return $this->hasMany(Sale::class, 'product_id')
    }
        */
}
