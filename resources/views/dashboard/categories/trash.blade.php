@extends('layouts.dashboard')

@section('title', 'Trashed Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">Categories</li>
    <li class="breadcrumb-item activ">Trash</li>
@endsection

@section('content')

<div class="mb-5">
    <a href="{{ route('dashboard.categories.index') }}" class="btn btn-sm btn-outline-primary">Back</a>
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
      <th>Deleted At</th>
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
      <td>{{ $category->name }}</td>
      {{-- <td>{{ $category->parent_id }}</td> --}}
      {{-- <td>{{ $category->parent ? $category->parent->name : '-' }}</td> --}}
      <td>{{ $category->deleted_at }}</td>
      <td>{{ $category->status }}</td>
      <td><img src="{{ asset('uploads/' . $category->image) }}" alt="" height="32"></td>
      <td>
          <form action="{{ route('dashboard.categories.restore', $category->id)}}" method="post">
            @csrf
            @method('put')
            <button type="submit" class="btn btn-sm btn-outline-info">Restore</button>
          </form>
      </td>
      <td>
        <form action="{{ route('dashboard.categories.force-delete', $category->id)}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <td colspan="7">No categories defined.</td>
    </tr>
    @endif
  </tbody>
</table>
{{ $categories->withQueryString()->appends(['search' => 1])->links() }} {{-- withQueryString() للمحافظة على الفلتر عند التنقل بين الصفحات --}}
@endsection