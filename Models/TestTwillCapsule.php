<?php

namespace App\Twill\Capsules\TestTwillCapsules\Models;


use A17\Twill\Models\Model;

class TestTwillCapsule extends Model 
{
    

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
}
