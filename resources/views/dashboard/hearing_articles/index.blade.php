@extends('layouts.dashboard')

@section('title', 'Articles')

@section('content')

    @if(session('success'))
        <div class="alert alert-success mb-3">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('dashboard.hearing_articles.create') }}" class="btn btn-primary mb-3">Add New Article</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>
                        @if ($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" height="50" alt="Article Image">
                        @endif
                    </td>
                    <td>{{ $article->created_at ? $article->created_at->format('Y-m-d') : '' }}</td>
                    <td>
                        <a href="{{ route('dashboard.hearing_articles.edit', $article->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <form action="{{ route('dashboard.hearing_articles.destroy', $article->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are you sure you want to delete this article?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No articles found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $articles->links() }}

@endsection
