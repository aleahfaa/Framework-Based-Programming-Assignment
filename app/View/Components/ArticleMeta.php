<?php
namespace App\View\Components;
use Illuminate\View\Component;
use Carbon\Carbon;
class ArticleMeta extends Component
{
    public $author;
    public $date;
    public $readTime;
    public $tags;
    public $compact;
    public function __construct($author = 'Iffa Amalia Sabrina', $date = null, $readTime = '3 min read', $tags = [], $compact = false)
    {
        $this->author = $author;
        $this->date = $date;
        $this->readTime = $readTime;
        $this->tags = is_array($tags) ? $tags : [$tags];
        $this->compact = $compact;
    }
    public function render()
    {
        return view('components.article-meta');
    }
    public function formattedDate()
    {
        if (!$this->date) return null;
        return Carbon::parse($this->date)->format('M j, Y');
    }
}