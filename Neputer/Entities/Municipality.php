<?php

namespace Neputer\Entities;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{

    protected $table = 'municipalities';

    protected $fillable = [
           'municipality','district_id','province_id'
       ];

    public function district()
    {
        $this->belongsTo(District::class);
    }
}
