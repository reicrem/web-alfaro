@extends('layouts.app')

@section('content')

<div class="product-container">
    <div class="product-image-bateria">
        <img src="images/2267.png" alt="Producto" class="product-image img-thumbnail ">
    </div>
    <div class="product-details-bateria">
        <h2>Nombre del Producto</h2>
        <h4>Características del Producto</h4>
        <h5>Nuestra batería de alto rendimiento, con XX mAh, garantiza una potencia duradera para tus dispositivos electrónicos. Su diseño compacto y tecnología de carga rápida la hacen ideal para usarla en cualquier lugar. Además, cuenta con protección avanzada para un uso seguro y confiable en todo momento.</h5>
        
        <form action="#" method="POST">
            @csrf
            <div class="product-options">
                <h6>Precio: $XX.XX</h6>
                <label for="cantidad">Cantidad:</label>
                <select id="cantidad" name="cantidad">
                    @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
            </div>
        </form>
    </div>
</div>



@endsection