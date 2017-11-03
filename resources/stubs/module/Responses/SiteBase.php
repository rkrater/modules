<?php

namespace DummyNamespace\Responses;

use App\Responses\BaseAdminResponse;
use App\Responses\Items\Notification\Group\Section\Item;

abstract class SiteBase extends BaseAdminResponse
{
    public function __construct()
    {
        parent::__construct();

        $this->getSite()->setTitle("DummyName");
        $this->getBreadCrumbs()->item("DummyName");
        $this->getMenuMain()->item('Index', route('DummySlug.index'), 'icon-home');
    }

    protected function notifications()
    {
        $this->getNotifications()->group("DummyName", 'icon-home')->section("DummyName")->items([
            new Item("icon-home", "DummyName", route('DummySlug.index'))
        ]);
    }
}