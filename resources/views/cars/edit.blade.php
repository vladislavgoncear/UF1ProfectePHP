<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Edit Car</h1>
    <form action="/cars/update/<?= $car->id ?>" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($car->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        <div class="mb-4">
            <label for="make" class="block text-gray-700">Make:</label>
            <input type="text" name="make" value="<?= htmlspecialchars($car->make) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="model" class="block text-gray-700">Model:</label>
            <input type="text" name="model" value="<?= htmlspecialchars($car->model) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="year" class="block text-gray-700">Year:</label>
            <input type="number" name="year" value="<?= htmlspecialchars($car->year) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700">Category:</label>
            <input type="text" name="category" value="<?= htmlspecialchars($car->category) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
    </form>
    <a href="/cars" class="text-gray-500 hover:underline mt-4 block">Return</a>
</div>
</body>
</html>