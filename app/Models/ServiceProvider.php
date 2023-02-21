<?php

namespace App\Models;

use App\Models\User;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class,'service_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
