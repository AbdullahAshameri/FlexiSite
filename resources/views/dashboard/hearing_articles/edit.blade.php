@extends('layouts.dashboard')

@section('title', 'Edit Article')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dashboard.hearing_articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" 
      onsubmit="this.querySelector('button[type=submit]').disabled = true;">
    @csrf
    @method('PUT')
    @include('dashboard.hearing_articles._form', ['button_label' => 'Update'])
</form>

@endsection
