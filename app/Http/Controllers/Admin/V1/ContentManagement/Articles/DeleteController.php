<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Articles;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.articles.delete.index';
    }

    public function execute(Request $request, $article_id)
    {
        // METHOD POST


        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [
                //
            ]);
        }
    }
}
