<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Rubrics;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.rubrics.index.index';
    }

    public function execute(Request $request)
    {
        // METHOD POST
        if ($request->isMethod('post')) {

        }


        // METHOD GET
        if (view()->exists('admin.portfolio.add')) {

        }
    }
}
