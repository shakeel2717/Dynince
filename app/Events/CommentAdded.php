<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Blog\Comment;
use App\Models\Blog\Post;

/**
 * Class CommentAdded.
 */
class CommentAdded
{
    use Dispatchable;
    use SerializesModels;

    /** @var Post */
    public $blogEtcPost;
    /** @var Comment */
    public $newComment;

    public function __construct(Post $post, Comment $newComment)
    {
        $this->blogEtcPost = $post;
        $this->newComment = $newComment;
    }
}
