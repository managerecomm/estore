<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\SiteBaseController as ResourceCategoryBaseController;
use App\Http\Models\Site\ResourceCategory;
use Illuminate\Http\Request;

class ResourceCategoryController extends ResourceCategoryBaseController
{

    public function index()
    {
        $categories = ResourceCategory::where('id', '>', 0)->paginate(3);

        return view('site.category.index', compact('categories'));
    }

}
