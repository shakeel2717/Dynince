<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Blog\Category;

/**
 * Class CategoryEdited.
 */
class CategoryEdited
{
    use Dispatchable;
    use SerializesModels;

    /** @var Category */
    public $blogEtcCategory;

    public function __construct(Category $category)
    {
        $this->blogEtcCategory = $category;
    }
}
