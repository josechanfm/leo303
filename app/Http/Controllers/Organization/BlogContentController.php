<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogContent;
use Illuminate\Http\Request;

class BlogContentController extends Controller
{
    //

    public function destroy(BlogContent $content)
    {
        $content->delete();

        return redirect()->back();
    }
}
