<?php

namespace App\Twill\Capsules\TestTwillCapsules\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\TestTwillCapsules\Models\TestTwillCapsule;

class TestTwillCapsuleRepository extends ModuleRepository
{
    

    public function __construct(TestTwillCapsule $model)
    {
        $this->model = $model;
    }
}
