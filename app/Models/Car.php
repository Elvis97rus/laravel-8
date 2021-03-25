<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

//    protected $timestamps = true;
//    protected $dateFormat = 'h:m:s';

    protected $fillable = ['name', 'founded', 'description'];
    protected $hidden = ['password', 'remember_token', 'id'];

    protected $visible = ['name', 'founded', 'description'];

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    //define has many relation
    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //foreign key on CarModel table
            'model_id' // foreign key on Engine table
        );
    }

    //define a has one through relation
    public function productionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    public function products()
    {
        return $this->belongsToMany(
            Product::class
        );
    }
}
