<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Blog\Comment;

/**
 * Class CommentWillBeDeleted.
 */
class CommentWillBeDeleted
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /** @var Comment */
    public $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }
}
