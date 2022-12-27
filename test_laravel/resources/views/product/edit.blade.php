@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card">

                <div class="card-header">
                    <div class="float-left">
                        <h4>Edit: {{ $product->title }}</h4>
                    </div>
                    <div class="float-right"><button class="btn btn-success"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i></button></div>

                </div>

                <div class="card-body">

                    <div class="">
                        <label class="required mb-2">Title</label>

                        <input type="text" name="product[title]" value="{{ $product->title }}"
                            class="form-control @error('product.title') is-invalid @enderror" placeholder="Title" />
                        @error('product.title')
                            <span class="text-danger">{{ $errors->first('product.title') }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label class="required mb-2">Price</label>
                        <input type="text" name="product[price]" value="{{ $product->price }}"
                            class="form-control  @error('product.price') is-invalid @enderror" placeholder="Price" />
                        @error('product.price')
                            <span class="text-danger">{{ $errors->first('product.price') }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label class="required mb-2">Publish Date</label>
                        <input type="date" name="product[publish_date]" value="{{ $product->publish_date }}"
                            class="form-control mb-4 mb-lg-0  @error('product.publish_date') is-invalid @enderror" placeholder="Publish Date" />
                        @error('product.publish_date')
                            <span class="text-danger">{{ $errors->first('product.publish_date') }}</span>
                        @enderror
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Indietro</a>
                </div>

            </div>
        </form>

    </div>
@endsection
