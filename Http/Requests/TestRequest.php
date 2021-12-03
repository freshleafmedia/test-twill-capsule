<?php

namespace Freshleafmedia\Test\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class TestRequest extends Request
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
