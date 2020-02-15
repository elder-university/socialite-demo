<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    const PER_PAGE = 5;

    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function index()
    {
        return view('comments.index')->with([
            'comments' => $this->paginateComments()
        ]);
    }

    private function paginateComments()
    {
        return $this->comment->orderByDesc('created_at')->paginate(self::PER_PAGE);
    }
}
