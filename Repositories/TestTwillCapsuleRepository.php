<?php

namespace Freshleafmedia\TestTwillCapsule\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use Freshleafmedia\TestTwillCapsule\Models\TestTwillCapsule;

class TestTwillCapsuleRepository extends ModuleRepository
{
    

    public function __construct(TestTwillCapsule $model)
    {
        $this->model = $model;
    }
}
