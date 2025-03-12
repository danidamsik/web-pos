<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'product_name',
        'category_id',
        'price',
        'stocks',
        'barcode',
        'image'
    ];

    public function categoriesDetail()
    {
        return $this->hasMany('App\Models\products', 'category_id', 'category_id');
    }

    // public function workUnitDetail()
    // {
    //     return $this->belongsTo('App\Models\SIAKAD\Reference\Staffing\WorkUnit', 'work_unit_id', 'work_unit_id');
    // }

    // public function workRelationDetail()
    // {
    //     return $this->belongsTo('App\Models\SIAKAD\Reference\Staffing\WorkRelation', 'work_relation_id', 'work_relation_id');
    // }

    // public function activeStatusDetail()
    // {
    //     return $this->belongsTo('App\Models\SIAKAD\Reference\Staffing\ActiveStatus', 'active_status_id', 'active_status_id');
    // }
}
