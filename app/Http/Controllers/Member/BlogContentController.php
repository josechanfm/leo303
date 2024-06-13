<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogContent;
use App\Models\Blog;
use Inertia\Inertia;

class BlogContentController extends Controller
{
    //
    public function store(Blog $blog, Request $request)
    {
        $data = $request->all();
        $data['reply_id'] = 0;
        $data['blog_id'] = $blog->id;
        $data['user_id'] = session('member')->user_id;
        // dd($data);…
        BlogContent::create($data);
        return redirect()->back();
    }

    public function show(Blog $blog, BlogContent $content)
    {
        return Inertia::render('Member/BlogContent', [
            'blog' => $blog,
            'content' => $content,
        ]);
    }

    public function replyContent(Blog $blog, Request $request)
    {
        $data = $request->all();
        $data['blog_id'] = $blog->id;
        $data['user_id'] = session('member')->user_id;

        BlogContent::create($data);
        return redirect()->back();
    }
}
