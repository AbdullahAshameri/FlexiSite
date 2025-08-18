@extends('layouts.dashboard')

@section('title', 'Edit Footer')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Footer</li>
@endsection

@section('content')
    <x-alert type="success" />

    <form action="{{ route('dashboard.footer.update', $footer->id) }}" method="POST">
        @csrf
        @method('put')
        
        @include('dashboard.footer._form', [
            'button_label' => 'update'
        ])
    </form>
@endsection


