@component('mail::message')
    # New Article Alert

    Hello,

    A new article has been published on our website. Here are the details:

    **Title:** {{ $article->title }}
    {{-- **Introduction:** {{ $article->introduction }} --}}
    **Excerpt:** {!! $article->excerpt !!}
    **Author:** {{ $article->author }}

    Click the button below to read the full article.
    @component('mail::button', ['url' => config('app.url') . '/singleBlog/' . $article->id])
    Read Article
    @endcomponent


    Thank you for subscribing to our updates!

    Regards,
    Amani Bloggers
@endcomponent
