<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>

    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            width: 80%;
            max-width: 800px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .product-image {
            width: 100%;
            max-width: 400px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .price {
            color: #28a745;
            font-size: 1.5rem;
            margin-top: 15px;
        }

        .description {
            margin-top: 20px;
            font-size: 1.1rem;
            color: #666;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Estilos del carrito */
        #cart-section {
            display: none;
            margin-top: 40px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table td, .cart-table th {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .cart-table th {
            background-color: #007bff;
            color: white;
        }

        .cart-table td {
            font-size: 1.1rem;
        }

        .cart-buttons {
            display: flex;
            justify-content: space-between;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .cart-item-name {
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Detalles del Producto</h1>

    <!-- Producto -->
    <h2 id="product-name">Nombre del Producto</h2>
    <p class="price" id="product-price">Precio: $99.99</p>

    <!-- Descripción del producto -->
    <div class="description">
        <p><strong>Descripción:</strong></p>
        <p id="product-description">Este es un producto increíble que hará tu vida mucho más fácil. ¡No te lo puedes perder!</p>
    </div>

    <!-- Imagen del producto -->
    <img src="https://via.placeholder.com/500x500" alt="Nombre del producto" class="product-image" id="product-image">

    <!-- Botón para agregar al carrito -->
    <button type="button" class="btn" id="add-to-cart">Agregar al carrito</button>

    <!-- Carrito de compras -->
    <div id="cart-section">
        <h3>Carrito de Compras</h3>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="cart-items"></tbody>
        </table>

        <div class="cart-buttons">
            <button type="button" class="btn btn-danger" id="clear-cart">Vaciar carrito</button>
            <button type="button" class="btn btn-success" id="checkout">Proceder al pago</button>
        </div>
    </div>
</div>

<script>
    // Datos del producto
    const product = {
        id: 1,
        name: "Nombre del Producto",
        price: 99.99,
        description: "Este es un producto increíble que hará tu vida mucho más fácil. ¡No te lo puedes perder!",
        image: "https://via.placeholder.com/500x500"
    };

    // Carrito vacío
    let cart = [];

    // Elementos del DOM
    const addToCartButton = document.getElementById('add-to-cart');
    const cartSection = document.getElementById('cart-section');
    const cartItems = document.getElementById('cart-items');
    const clearCartButton = document.getElementById('clear-cart');
    const checkoutButton = document.getElementById('checkout');

    // Agregar producto al carrito
    function addToCart() {
        const productInCart = cart.find(item => item.id === product.id);

        if (productInCart) {
            productInCart.quantity += 1;
        } else {
            cart.push({
                ...product,
                quantity: 1
            });
        }

        renderCart();
    }

    // Eliminar un producto del carrito
    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        renderCart();
    }

    // Renderizar el carrito en la tabla
    function renderCart() {
        if (cart.length > 0) {
            cartSection.style.display = 'block'; // Mostrar el carrito

            cartItems.innerHTML = '';

            let total = 0;

            cart.forEach(item => {
                total += item.price * item.quantity;
                cartItems.innerHTML += `
                    <tr>
                        <td class="cart-item-name">${item.name}</td>
                        <td>$${item.price.toFixed(2)}</td>
                        <td>${item.quantity}</td>
                        <td>$${(item.price * item.quantity).toFixed(2)}</td>
                        <td><button type="button" class="btn btn-danger" onclick="removeFromCart(${item.id})">Eliminar</button></td>
                    </tr>
                `;
            });

            cartItems.innerHTML += `
                <tr>
                    <td colspan="3" style="text-align: right;">Total:</td>
                    <td>$${total.toFixed(2)}</td>
                    <td></td>
                </tr>
            `;
        } else {
            cartSection.style.display = 'none'; // Ocultar el carrito si está vacío
        }
    }

    // Vaciar el carrito
    function clearCart() {
        cart = [];
        renderCart();
    }

    // Proceder al pago (aquí solo muestra una alerta)
    function checkout() {
        alert("¡Gracias por tu compra! Procediendo al pago...");
    }

    // Event listeners
    addToCartButton.addEventListener('click', addToCart);
    clearCartButton.addEventListener('click', clearCart);
    checkoutButton.addEventListener('click', checkout);
</script>

</body>
</html>
