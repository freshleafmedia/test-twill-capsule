<?php

namespace Freshleafmedia\Test\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use Freshleafmedia\Test\Models\Test;

class TestRepository extends ModuleRepository
{
    

    public function __construct(Test $model)
    {
        $this->model = $model;
    }
}
