@extends('/layouts/template')
@section('title', 'WebGano')
@section('content')
    <div class="container">
        <h2 class="text-secondary">Registrar un nuevo producto</h2>
        <hr />
        <div class="d-flex justify-content-center">
            <div class="card col-md-10">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger mb-1" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label for="name" class="form-label fw-semibold">Nombre:</label>
                                <input type="text" class="form-control" name="name" id="name" required
                                    placeholder="Pizza...">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="company" class="form-label fw-semibold">Empresa:</label>
                                <input type="text" class="form-control" name="company" id="company" required
                                    placeholder="Vegan Factory...">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="price" class="form-label fw-semibold">Precio:</label>
                                <input type="number" class="form-control" name="price" id="price" required
                                    placeholder="300000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-8">
                                <label for="image" class="form-label fw-semibold">Imagen o Fotografía:</label>
                                <input type="url" class="form-control" name="image" id="image" required
                                    placeholder="Url de la imagen..."
                                    value="https://picsum.photos/150
                                ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="image" class="form-label fw-semibold">Descripción del producto:</label>
                                <textarea class="form-control" name="description" id="description" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-sm me-2">
                                Crear producto
                            </button>
                            <a href="/products" class="btn btn-danger btn-sm">Cancelar</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
