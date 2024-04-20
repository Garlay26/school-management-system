<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $guarded = [];

    public function calculateProfit($value){
        $profit = ($value * 2) + 1;
        $a = 2 + 1 * 2;
        $b = (136 * 25) / 100;
        return $profit;
    }
}
