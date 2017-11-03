<?php
/**
 * @author Rob Krater <rkrater@wcboe.org>
 * Date: 11/3/2017 1:42 PM
 */

namespace DummyNamespace\Responses;


class IndexResponse extends SiteBase
{
    public function toResponse($request)
    {
        return view('DummySlug::index', $this->data());
    }
}