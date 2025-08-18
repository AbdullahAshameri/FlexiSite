<x-front-layout title="جميع المقالات">

    <section class="section blog-section blog-list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('Information That Matters') }}</h2>
                        <p>{{ __('Everything you need to know about hearing loss, tests, and tips to improve your hearing wellness') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="{{ route('blogs.show', $article->id) }}">
                                            <img src="{{ asset('storage/' . $article->image) }}"
                                                alt="{{ $article->title }}" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h4>
                                            <a href="{{ route('blogs.show', $article->id) }}">{{ $article->title }}</a>
                                        </h4>
                                        <p style="color: #555;">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 100) }}</p>
                                        <div class="button">
                                            {{-- <a href="{{ route('blogs.show', $article->id) }}" class="btn">Read
                                                More</a> --}}

                                            <a href="{{ route('blogs.show', $article->id) }}"
                                                class="service-link">
                                                Learn More
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="pagination left blog-grid-page">
                        {{ $articles->links() }}
                    </div> --}}
                    <div class="pagination left blog-grid-page">
                        <ul class="pagination-list">
                            {!! str_replace(['<ul class="pagination">', '</ul>'], ['', ''], $articles->links()->toHtml()) !!}
                        </ul>
                    </div>
                    {{-- <div class="pagination-info text-center mb-3">
                        {{ $articles->firstItem() }} - {{ $articles->lastItem() }} of {{ $articles->total() }}
                    </div>

                    <div class="pagination left blog-grid-page">
                        {{ $articles->links() }}
                    </div> --}}
                    {{-- <div class="pagination left blog-grid-page">
                        <!-- نص عدد العناصر -->
                        <div class="pagination-info text-center mb-3">
                            {{ $articles->firstItem() }} - {{ $articles->lastItem() }} of {{ $articles->total() }}
                        </div>

                        <!-- الباجينشن بنفس ستايلك -->
                        <ul class="pagination-list">
                            {!! str_replace(['<ul class="pagination">', '</ul>'], ['', ''], $articles->links()->toHtml()) !!}
                        </ul>
                    </div> --}}



                </div>
                {{-- <aside class="col-lg-4 col-md-12 col-12">
                    <!-- يمكن إضافة ويدجت حسب الحاجة -->
                </aside> --}}
            </div>
        </div>
    </section>
</x-front-layout>
