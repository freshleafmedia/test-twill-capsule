<?php

namespace Freshleafmedia\Test\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class TestController extends BaseModuleController
{
    protected $moduleName = 'testTwillCapsule';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
