<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class preorder extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'preorders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_produk', 'id_po', 'tanggal_pembelian'];

    
}
