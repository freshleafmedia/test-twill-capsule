<?php

namespace Freshleafmedia\TestTwillCapsule\TestTwillCapsules\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class TestTwillCapsuleController extends BaseModuleController
{
    protected $moduleName = 'testTwillCapsules';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
