@extends('/layouts/template')
@section('title', 'WebGano')
@section('content')

    <div class="container">
        <h2 class="text-secondary">Todos nuestros productos</h2>
        <hr />

        <div class="container-fluid">
            <div class="ps-2 mb-2">
                <a href="/products/create" class="btn btn-primary btn-sm">
                    Registrar nuevo producto
                </a>
            </div>
            <div class="col-12 d-flex flex-wrap mb-3">
                @foreach ($products as $product)
                    <div class="col-3">
                        <div class="card mb-2 mx-2">
                            <img src="{{ $product->image }}" height="160" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">
                                    {{ $product->company }}
                                </h6>
                                <p class="card-text small text-secondary">
                                    {{ $product->description }}
                                </p>
                                @if ($product->score == null)
                                    <b class="me-2 text-secondary">Sin calificaciones</b>
                                @else
                                    <b class="me-2">Calificación: ⭐{{ $product->score }}</b>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
