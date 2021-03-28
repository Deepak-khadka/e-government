<?php

namespace Neputer\Entities;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{

    protected $table = 'district';

    protected $fillable = [
               'name','area','province','range','order'
       ];

    public function municipalities()
    {
        $this->hasMany(Municipality::class);
    }

}
