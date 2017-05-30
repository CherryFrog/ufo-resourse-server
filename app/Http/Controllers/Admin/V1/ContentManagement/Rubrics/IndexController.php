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
        // Выбрать 20 записией которые выводит
        // Выбрать total которое вообще можно вывести

        // rubric/1/articles
        // category/1/articles
        // sub-category/1/articles

        // rubric/1/categories
        
        // rubric/1/sub-categories
        // category/1/sub-categories


        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [
                //
            ]);
        }
    }
}
