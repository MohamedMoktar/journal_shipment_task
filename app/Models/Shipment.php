<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'shipper',
        'image',
        'weight',
        'description',
        'status',
    ];

    protected $appends = ['price'];
  
    //defaultGroupBy
    protected $defaultGroupBy = ['shipper'];
    
    //$defaultFilters
    protected $defaultFilters = ['status'];
    

    public function getPriceAttribute()
    {
        $weight = $this->attributes['weight'];
       //initial value
        $price=0;

      //calculate price
        if ($weight >= 1 && $weight <= 10) {
            $price=10;
        } elseif ($weight > 10 && $weight <= 25) {
            $price= 100;
        } elseif ($weight > 25) {
            $price= 300;
        } 
        //if whight<0 
        else {
            $price= 0;
        }
        $this->attributes['price']=$price;
        return $price;
    }
}
