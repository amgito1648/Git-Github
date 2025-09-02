<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>

    <!-- Vinculamos Bootstrap para un diseño básico -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .product-image {
            width: 100%;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .price {
            font-size: 1.3rem;
            color: #28a745;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 12px 24px;
            font-size: 1.1rem;
            width: 100%;
            border-radius: 4px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .description {
            margin-top: 20px;
        }

        .product-details {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Título del producto -->
    <h1>FIFA 23</h1>

    <!-- Precio del producto -->
    <p class="price"><strong>Precio:</strong> $99.99</p>

    <!-- Descripción del producto -->
    <div class="description">
        <p><strong>Descripción:</strong></p>
        <p>JUEGAZO DEL AÑO no lo dejes pasar</p>
    </div>

    <!-- Imagen del producto -->
    <img src="https://via.placeholder.com/500x500" alt="FIFA 23" class="product-image">

    <!-- Botón para agregar al carrito -->
    <div class="product-details">
        <form action="#" method="POST">
            <button type="submit" class="btn btn-primary">Agregar al carrito</button>
        </form>
    </div>

</div>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
