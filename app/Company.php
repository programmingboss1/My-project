<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table ='employers';
    protected $fillable = ['CompanyName','CompanyOwner','Location','Phone','Email','Description'];
}
