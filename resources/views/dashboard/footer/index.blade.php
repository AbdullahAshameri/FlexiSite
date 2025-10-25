@extends('layouts.dashboard')

@section('title', 'Products')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item activ">Products</li>
@endsection

@section('content')

<div class="mb-5">
    <a href="{{ route('dashboard.products.create') }}" class="btn btn-sm btn-outline-primary mr-2">Create</a>
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
      <th>Category</th>
      <th>Store</th>
      <th>Status</th>
      <th>Created At</th>
      <th colspan="2"></th>
    </tr>
  </thead>

  <tbody>
    @if ($products->count())
      @foreach ($products as $product)
    <tr>
      {{-- <td><img src="{{ asset('storage/'.$product->image) }}" alt="" srcset="" height="50"></td> --}}
      <td></td>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->category->name }}</td>
      <td>{{ $product->store->name }}</td>
      <td>{{ $product->status }}</td>
      <td>{{ $product->created_at }}</td>
      <td><img src="{{ asset('uploads/' . $product->image) }}" alt="" height="32"></td>
      <td>
        <a href="{{ route('dashboard.products.edit', $product->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
      </td>
      <td>
        <form action="{{ route('dashboard.products.destroy', $product->id)}}" method="post">
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
      <td colspan="9">No products defined.</td>
    </tr>
    @endif
  </tbody>
</table>
{{ $products->withQueryString()->appends(['search' => 1])->links() }} {{-- withQueryString() للمحافظة على الفلتر عند التنقل بين الصفحات --}}
@endsection