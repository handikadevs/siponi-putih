<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    /**
     * The Attributes that aren't mass assignable.
     * 
     * @var array
     */
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'patient_id');
    }

    public function poly()
    {
        return $this->hasOne(Poly::class, 'id', 'poly_id');
    }
}
