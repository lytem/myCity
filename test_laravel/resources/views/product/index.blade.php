@extends('layouts.app')
@section('content')
    <div class="container">
        @include('components.validation')
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <div class="float-left"><h2>{{ __('Products list') }}</h2></div>
                    <div class="float-right">
                        <a href="{{ route('products.create') }}" class="btn btn-secondary"><i class="fa fa-plus"></i></a>

                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover">

                        <thead class="table table-dark">
                            <th>Title</th>
                            <th>Price</th>
                            <th>Publish Date</th>
                            <th>created at</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->publish_date }}</td>
                                   <td> {{ $item->created_at->diffForHumans() }}</td>
                                    <td class="text-right">
                                        {{-- edit --}}
                                        <a href="{{ route('products.edit', $item->id) }}" class="btn btn-secondary"><i
                                                class="fa fa-pencil"></i></a>

                                        {{-- delete --}}
                                        <form style="display:inline-block" action="{{ route('products.destroy',$item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
