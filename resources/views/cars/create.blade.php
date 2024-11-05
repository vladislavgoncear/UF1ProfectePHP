<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Add New Car</h1>
    <form action="/cars/store" method="POST">
        <div class="mb-4">
            <label for="make" class="block text-sm font-medium text-gray-700">Make:</label>
            <input type="text" name="make" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter car make">
        </div>

        <div class="mb-4">
            <label for="model" class="block text-sm font-medium text-gray-700">Model:</label>
            <input type="text" name="model" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter car model">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Year:</label>
            <input type="number" name="year" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter car year">
        </div>

        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Category:</label>
            <input type="text" name="category" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter car year">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Car</button>
    </form>
</div>
</body>
</html>