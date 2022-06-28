@extends('layout')
@section('title', 'Products')
@section('content')

    <div class="container products">
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-4">
                    <div class="thumbnail" style="overflow: hidden;">
                        <img src="{{ $product->photo }}" width="100%" height="300" style="object-fit: contain;">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                            <a type="button" class="btn btn-warning" href="{{ route('products.edit', $product) }}">Edit</a>
                            <form method="POST" action="{{ route('products.destroy', $product) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create product</a>
    </div>

@endsection
