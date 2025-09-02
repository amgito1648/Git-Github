<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Ecommerce</title>
    <!-- Aquí puedes agregar tu archivo CSS o usar un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 p-4 text-white text-center">
        <h1 class="text-3xl font-semibold">Bienvenido a Mi Ecommerce</h1>
    </header>
    <main class="container mx-auto p-6">
        <section class="text-center">
            <h2 class="text-2xl font-bold">¡Explora nuestros productos!</h2>
            <p class="mt-4">Descubre lo mejor en tecnología, moda y más.</p>
        </section>
        
        <section class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Producto 1 -->
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('img/cod.jpg') }}" alt="Producto" class="w-full h-64 object-cover rounded-lg">
                <h3 class="text-xl font-semibold mt-2">Juegos</h3>
                <p class="text-gray-700 mt-1">Juegos.</p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Comprar</button>
            </div>
            <!-- Producto 2 -->
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="ruta-a-la-imagen-del-producto" alt="Producto" class="w-full h-64 object-cover rounded-lg">
                <h3 class="text-xl font-semibold mt-2">FIFA</h3>
                <p class="text-gray-700 mt-1">Juegazo.</p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Comprar</button>
            </div>
            <!-- Producto 3 -->
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="ruta-a-la-imagen-del-producto" alt="Producto" class="w-full h-64 object-cover rounded-lg">
                <h3 class="text-xl font-semibold mt-2">PES</h3>
                <p class="text-gray-700 mt-1">Descripción breve del producto.</p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Comprar</button>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 p-4 text-white text-center">
        <p>&copy; 2025 Mi Ecommerce. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
