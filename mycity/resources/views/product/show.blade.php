@extends('layouts.app')
@section('content')
    <div class="container w-50">
        <div class="card">

                <div class="card-header">
                    Dettaglio prodotto:<b class="fw-bold fs-5">  {{ $product->title }}</b>
                </div>


            <div class="card-body">

                <p class="card-text">il nostro prodotto <i class="fw-bold fs-6" style="color:blue">{{ $product->title }}</i> pubblicato il
                    {{ $product->publish_date }}
                    è ancora disponibile nello store.Il prezzo è di <b style="color: red" class="fs-6 fw-bold">{{number_format($product->price,2)  }} €.</b> </p>
            </div>

            <div class="card-footer">
                <a href="{{ url()->previous() }}" class="btn btn-dark">Indietro</a>
            </div>

        </div>
    </div>
@endsection
