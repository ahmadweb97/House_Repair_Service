<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $table = "service_categories";

    public function services()
    {
        return $this->hasMany(Service::class);
    }

}
