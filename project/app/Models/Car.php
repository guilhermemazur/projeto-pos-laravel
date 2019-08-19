<?php

namespace App\Models;

use App\Scopes\Search as SearchScope;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use SoftDeletes, SearchScope;

    /**
     * The attributes that are used to search.
     *
     * @var array
     */
    protected $searchBy = [
        'model', 'year'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'year', 'car_brand_id'
    ];

    protected static $logAttributes = [
        'model', 'year'
    ];

    public function car_brand()
    {
        return $this->belongsTo('App\Models\CarBrand')->withDefault();
    }
}
