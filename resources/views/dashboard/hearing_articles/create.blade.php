@extends('layouts.dashboard')

@section('title', 'Add New Article')

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

<form action="{{ route('dashboard.hearing_articles.store') }}" method="POST" enctype="multipart/form-data" 
      onsubmit="this.querySelector('button[type=submit]').disabled = true;">
    @csrf
    @include('dashboard.hearing_articles._form', ['button_label' => 'Add'])
</form>

@endsection
