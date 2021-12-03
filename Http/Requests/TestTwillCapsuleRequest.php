<?php

namespace App\Twill\Capsules\TestTwillCapsules\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class TestTwillCapsuleRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}
