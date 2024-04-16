@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('images/page-header.jpg') }}')">
        <div class="container">
        @foreach ($titulos as $titulo)
    <h1 class="page-title">{{ $titulo }}</h1>
        @endforeach

        </div>
    </div>

    <div class="mb-4"></div>

    <div class="page-content">
        <div class="container">
            <div class="products">
                <div class="row">
                   
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">{{ __('Enviar Consulta') }}</div>
                            <div class="card-body">
                                <form action="{{ route('enviar_consulta') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="marca">Marca de auto</label>
                                        <input type="text" class="form-control" id="marca" name="marca"
                                            placeholder="Ingresa la marca de tu auto">
                                    </div>
                                    <div class="form-group">
                                        <label for="pregunta">Pregunta</label>
                                        <textarea class="form-control" id="pregunta" name="pregunta" rows="3"
                                            placeholder="Escribe tu pregunta"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar Consulta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Fin del formulario -->
                    @foreach ($categorias as $categoria)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                        <!-- Aquí va tu contenido actual de productos -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
