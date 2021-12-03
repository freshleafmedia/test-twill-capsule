<?php

namespace Freshleafmedia\TestTwillCapsule\TestTwillCapsules\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use Freshleafmedia\TestTwillCapsule\TestTwillCapsules\Models\TestTwillCapsule;

class TestTwillCapsuleRepository extends ModuleRepository
{
    

    public function __construct(TestTwillCapsule $model)
    {
        $this->model = $model;
    }
}
