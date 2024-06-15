@extends('layouts.app')

@section('content')
<a href="https://wa.me/56977209322" class="whatsapp-button jello-horizontal" target="_blank">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon">
</a>

<div class="container-fromulario">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enviar Consulta') }}</div>
                <form action="{{ route('enviar.consulta') }}" method="POST">
                    @csrf
                    <div class="grid gap-8 mb-6 md:grid-cols-2">
                        <div class="form-group">
                            <label class="" for="nombre">{{ __('Nombre') }}</label>
                            <input id="nombre" type="text" class="form-control bg-gray-50 border-2 border-blue-300 text-black text-xl rounded-xl" name="nombre" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="telefono">{{ __('Número de Teléfono') }}</label>
                            <input id="telefono" type="tel" class="form-control bg-gray-50 border-2 border-blue-300 text-black text-xl rounded-xl" name="telefono" required>
                        </div>

                        <div class="form-group">
                            <label for="correo">{{ __('Correo') }}</label>
                            <input id="correo" type="email" class="form-control bg-gray-50 border-2 border-blue-300 text-black text-xl rounded-xl" name="correo" required>
                        </div>

                        <div class="form-group">
                            <label for="marca">{{ __('Marca y modelo') }}</label>
                            <input id="marca" type="text" class="form-control bg-gray-50 border-2 border-blue-300 text-black text-xl rounded-xl" name="marca" required>
                        </div>

                        <div class="form-group">
                            <label for="pieza">{{ __('Pieza que Necesitas') }}</label>
                            <input id="pieza" type="text" class="form-control bg-gray-50 border-2 border-blue-300 text-black text-xl rounded-xl" name="pieza" required>
                        </div>

                        <div class="form-group">
                            <label for="patron">{{ __('N° Motor') }}</label>
                            <input id="patron" type="text" class="form-control bg-gray-50 border-2 border-blue-300 text-black text-xl rounded-xl" name="patron" required>
                        </div>

                        <div class="form-group">
                            <label for="anio">{{ __('Año del Auto') }}</label>
                            <input id="anio" type="number" class="form-control bg-gray-50 border-2 border-blue-300 text-black text-xl rounded-xl" name="anio" required>
                        </div>

                        <div class="boton-formulario">
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-semibold rounded-lg px-6 py-2.5 text-center me-2 mb-2">
                                Enviar por Correo
                            </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
