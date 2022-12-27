@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <form action="{{ route('products.store') }}" method="post">
         @csrf
        <div class="card">

            <div class="card-header">
                <div class="float-left">
                   <h2>New Product</h2>
                </div>
                <div class="float-right"><button class="btn btn-success"><i class="fa fa-floppy-o"
                            aria-hidden="true"> Save</i></button></div>

            </div>

            <div class="card-body">

                    <div class="">
                        <label class="required mb-2">Title</label>

                        <input type="text" name="product[title]" value="{{ old('product.title') }}"
                            class="form-control @error('product.title') is-invalid @enderror" placeholder="Title" />
                         @error('product.title')
                      <span class="text-danger">{{ $errors->first('product.title') }}</span>
                  @enderror
                    </div>
                    <div class="mt-4">
                        <label class="required mb-2">Price</label>
                        <input type="number" name="product[price]" value="{{ old('product.price') }}" min="0" step="any"
                            class="form-control @error('product.price') is-invalid @enderror" placeholder="Price" />
                         @error('product.price')
                      <span class="text-danger">{{ $errors->first('product.price') }}</span>
                  @enderror
                    </div>
                    <div class="mt-4">
                        <label class="required mb-2">Publish Date</label>
                        <input type="date" name="product[publish_date]" value="{{ old('product.publish_date') }}"
                            class="form-control  @error('product.publish_date') is-invalid @enderror" placeholder="" />
                        @error('product.publish_date')
                      <span class="text-danger">{{ $errors->first('product.publish_date') }}</span>
                  @enderror
                    </div>

            </div>

            <div class="card-footer">
                <a href="{{ url()->previous() }}" class="btn btn-dark">Indietro</a>
                <a href="{{ route('products.index') }}" class="btn btn-primaty">Home</a>
            </div>




        </div>

    </form>
    </div>
@endsection
