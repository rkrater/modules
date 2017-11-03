<?php

namespace DummyNamespace\Responses;

use App\Responses\BaseAdminResponse;

abstract class SiteBase extends BaseAdminResponse
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function notifications()
    {

    }
}