<?php

namespace DummyNamespace\Responses;


class IndexResponse extends SiteBase
{
    public function toResponse($request)
    {
        return view('DummySlug::index', $this->data());
    }
}