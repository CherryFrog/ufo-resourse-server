<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Articles;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.articles.index.index';
    }

    public function execute($limit = 0, $offset = 0)
    {
        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [

            ]);
        }
    }
}
