<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Blog\Post;

/**
 * Class BlogPostWillBeDeleted.
 */
class BlogPostWillBeDeleted
{
    use Dispatchable;
    use SerializesModels;

    /** @var Post */
    public $blogEtcPost;

    public function __construct(Post $post)
    {
        $this->blogEtcPost = $post;
    }
}
