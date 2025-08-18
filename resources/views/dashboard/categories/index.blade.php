@extends('layouts.dashboard')

@section('title', 'Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item activ">Categories</li>
@endsection

@section('content')

<div class="mb-5">
    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-sm btn-outline-primary mr-2">Create</a>
    <a href="{{ route('dashboard.categories.trash') }}" class="btn btn-sm btn-outline-dark">trash</a>
</div>

<x-alert type="success" />
@if (session()->has('info'))
<div class="alert alert-info">
   {{ session('info') }}
</div>
@endif

  <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
    <x-form.input name="name" palceholder="Name" class="mx-2" :value="request('name')" />
      <select name="status" class="form-control mx-2">
        <option value="">All</option>
        <option value="active" @selected(request('status') == 'active')>Active</option>
        <option value="archived" @selected(request('status' == 'archived'))>Archived</option>
      </select>
      <button class="btn btn-dark mx-2">Filter</button>
  </form>

<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>ID</th>
      <th>Name</th>
      <th>Parent</th>
      <th>products #</th>
      <th>Created At</th>
      <th>Status</th>
      <th>Image</th>
      <th colspan="2"></th>
    </tr>
  </thead>

  <tbody>
    @if ($categories->count())
      @foreach ($categories as $category)
    <tr>
      {{-- <td><img src="{{ asset('storage/'.$category->image) }}" alt="" srcset="" height="50"></td> --}}
      <td></td>
      <td>{{ $category->id }}</td>
      <td><a href="{{ route('dashboard.categories.show', $category->id) }}"> {{ $category->name  }} </a></td>
      <td>{{ $category->parent? $category->parent->name : 'Main category' }}</td>
      <td>{{ $category->products_number }}</td>
      <td>{{ $category->created_at }}</td>
      <td>{{ $category->status }}</td>
      <td><img src="{{ asset('uploads/' . $category->image) }}" alt="" height="32"></td>
      <td>
        <a href="{{ route('dashboard.categories.edit', $category->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
      </td>
      <td>
        <form action="{{ route('dashboard.categories.destroy', $category->id)}}" method="post">
          @csrf
          {{-- Form Method Spofing --}}
          <input type="hidden" name="_method" value="post">
          @method('delete')
          <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <td colspan="9">No categories defined.</td>
    </tr>
    @endif
  </tbody>
</table>
{{ $categories->withQueryString()->appends(['search' => 1])->links() }} {{-- withQueryString() للمحافظة على الفلتر عند التنقل بين الصفحات --}}
@endsection