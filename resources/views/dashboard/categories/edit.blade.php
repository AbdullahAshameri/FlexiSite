@extends('layouts.dashboard')

@section('title', 'Edit Category')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item activ">Categories</li>
    <li class="breadcrumb-item activ">Edit Category</li>
@endsection

@section('content')
<form action="{{ route('dashboard.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    
    @include('dashboard.categories._form', [
        'button_label' => 'Update'
    ])
</form>
@endsection