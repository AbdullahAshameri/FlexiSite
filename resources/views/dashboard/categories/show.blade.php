@extends('layouts.dashboard')

@section('title', $category->name)

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item activ">Categories</li>
    <li class="breadcrumb-item activ">{{ $category->name }}</li>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th>Name</th>
            <th>Store</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Image</th>
            </tr>
        </thead>

        <tbody>
            @php
                 $products = $category->products()->with('store')->latest()->paginate(5);
            @endphp
            @forelse ($products as $product )                
            <tr>
            <td><img src="{{ asset('uploads/' . $product->image) }}" alt="" height="32"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->store->name }}</td>
            <td>{{ $product->status }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <a href="{{ route('dashboard.products.edit', $product->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
            </td>
            </tr>
            @empty
            <tr>
            <td colspan="6">No products defined.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
@endsection