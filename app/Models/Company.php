<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'companyName',
        'phoneNumber',
        'contactPerson',
        'businessType',
        'businessmanType',
        'websiteStatus',
        'comments',
        'isCalled',
        'createdAt'
    ];

    public $timestamps = false; // we use createdAt instead
}
