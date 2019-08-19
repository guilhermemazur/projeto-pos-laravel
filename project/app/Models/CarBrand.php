<?php

namespace App\Models;

use App\Scopes\Search as SearchScope;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use SoftDeletes, SearchScope;

    /**
     * The attributes that are used to search.
     *
     * @var array
     */
    protected $searchBy = [
        'brand',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand',
    ];

    protected static $logAttributes = [
        'brand',
    ];

    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }
}
