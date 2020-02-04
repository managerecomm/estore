<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\SiteBaseController as ResourceBaseController;
use App\Http\Models\Site\Resource;
use Illuminate\Http\Request;

class ResourceController extends ResourceBaseController
{
    public function index()
    {
        $resources = Resource::where('id', '>', 0)->paginate(10);

        return view('site.resource.index', compact('resources'));
    }
}
