<!-- Start Single Blog Article Card -->
<div class="single-blog">
    <div class="blog-img">
        <a href="{{ route('blogs.show', $article->id) }}">
            <img src="{{ $article->image_url }}" alt="{{ $article->title }}" />
        </a>
    </div>
    <div class="blog-content">
        <h4>
            <a href="{{ route('blogs.show', $article->id) }}">{{ $article->title }}</a>
        </h4>
        <p style="color: #555;">
            {{ $article->short_description ?? \Illuminate\Support\Str::limit(strip_tags($article->content), 100) }}
        </p>
        <div class="button">
            <a href="{{ route('blogs.show', $article->id) }}" class="service-link" style="color: #12948B">
                Learn More
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- End Single Blog Article Card -->
