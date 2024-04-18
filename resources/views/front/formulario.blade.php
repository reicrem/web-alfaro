@extends('layouts.app')

@section('content')
<div class="container-fromulario">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Enviar Consulta') }}</div>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">{{ __('Nombre') }}</label>
                                <input id="nombre" type="text" class="form-control" name="nombre" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="telefono">{{ __('Número de Teléfono') }}</label>
                                <input id="telefono" type="tel" class="form-control" name="telefono" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">{{ __('Correo') }}</label>
                                <input id="telefono" type="tel" class="form-control" name="telefono" required>
                            </div>

                            <div class="form-group">
                                <label for="marca">{{ __('Marca de Auto') }}</label>
                                <input id="marca" type="text" class="form-control" name="marca" required>
                            </div>

                            <div class="form-group">
                                <label for="anio">{{ __('Año del Auto') }}</label>
                                <input id="anio" type="number" class="form-control" name="anio" required>
                            </div>

                            <div class="form-group">
                                <label for="pieza">{{ __('Pieza que Necesitas') }}</label>
                                <input id="pieza" type="text" class="form-control" name="pieza" required>
                            </div>

                            
                            <div class="boton-formulario">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Enviar Consulta') }}
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection