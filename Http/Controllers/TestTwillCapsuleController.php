<?php

namespace App\Twill\Capsules\TestTwillCapsules\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class TestTwillCapsuleController extends BaseModuleController
{
    protected $moduleName = 'testTwillCapsules';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
