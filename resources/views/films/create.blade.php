<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Nova Pel·lícula</h1>
    <form action="/films/store" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Titol:</label>
            <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Titol">
        </div>

        <div class="mb-4">
            <label for="director" class="block text-sm font-medium text-gray-700">Director:</label>
            <input type="text" name="director" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Nom del director">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Any de llançament:</label>
            <input type="number" name="year" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Any">
        </div>

        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Categoria:</label>
            <input type="text" name="category" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Afegeix una categoria">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add</button>
    </form>
</div>
</body>
</html>