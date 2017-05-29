<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Rubrics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
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

            return response()->json([

            ], 200);
        }

        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [
                'limit' => $limit,
                'offset' => $offset,
            ]);
        }
    }
}
