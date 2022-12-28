@extends('layouts.app')
@section('content')
    <div class="container">
        @include('components.validation')
        <div class="card">

                <div class="card-header">
                    <div class="float-left"><h2>{{ __('Products list') }}</h2></div>
                    <div class="float-right">
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>

                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover">

                        <thead class="table table-secondary">
                            <th class="col-4">Title</th>
                            <th class="col-2">Price</th>
                            <th class="col-2">Publish Date</th>
                            <th class="col-2">Created at</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->getFullTitleAttributes() }}</td>
                                    <td>{{number_format($item->price,2)  }} € </td>
                                    <td>{{ $item->publish_date }}</td>
                                   <td> <span class="badge badge-success">{{ $item->created_at->diffForHumans() }}</span></td>
                                    <td class="text-right">
                                        {{-- Show --}}
                                        <a href="{{ route('products.show', $item->id) }}" class="btn btn-primary"><i
                                            class="fa fa-eye"></i></a>

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


                <div class="card-footer">
                    {!! $items->links() !!}
                </div>

        </div>
    </div>
@endsection
