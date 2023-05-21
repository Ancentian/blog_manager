<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Article;

class AllSubscribers extends Mailable
{
    use Queueable, SerializesModels;

    public $emails;
    public $article;

    public function __construct(array $emails, Article $article)
    {
        $this->emails = $emails;
        $this->article = $article;
    }

    public function build()
    {
        return $this->subject("New Article Alert!!")
            ->markdown('emails.allSubscribers')
            ->with('article', $this->article);
    }
}
