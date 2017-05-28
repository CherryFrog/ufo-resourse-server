<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\SubCategories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.sub_categories.index.index';
    }

    public function execute($limit = 0, $offset = 0)
    {
        // METHOD GET
        // middleware $limit $offset

        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [

            ]);
        }
    }
}
