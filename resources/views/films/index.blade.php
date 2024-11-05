<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Comic Neue', cursive;
            background-color: #f0f0f0;
            margin: 0;
            color: black;
        }
        .container {
            max-width: 800px;
            width: 100%;
            background-color: white;
            color: black;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 3rem;
            margin-left: auto;
            margin-right: auto;
        }
        /* Animaciones */
        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .button {
            background-color: gray;
            color: white;
            font-weight: 600;
            padding: 0.5rem 2rem;
            border-radius: 9999px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, background-color 0.2s;
        }
        .button:hover {
            background-color: #4a4a4a;
            transform: translateY(-4px);
            animation: pulse 0.5s ease-in-out infinite alternate;
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<?php include '../resources/views/layout/navbar.blade.php';?>

<div class="container fade-in mx-auto">
    <h1 class="text-4xl font-bold mb-6 text-center">Visualitzador de pel·lícules</h1>
    <div class="text-center mb-6">
        <a href="/films/create" class="button">Afegeix una pel·lícula</a>
    </div>
    <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300 rounded-md">
        <thead>
        <tr class="bg-gray-200 text-gray-900 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Titol</th>
            <th class="py-3 px-6 text-left">Director</th>
            <th class="py-3 px-6 text-left">Any</th>
            <th class="py-3 px-6 text-left">Categoria</th>
            <th class="py-3 px-6 text-center">Accions</th>
        </tr>
        </thead>
        <tbody class="text-gray-900 text-sm font-light">
        <?php if (empty($films)): ?>
        <tr>
            <td colspan="5" class="py-3 px-6 text-center">No hi ha pel·lícules disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($films as $film): ?>
        <tr class="border-b border-gray-300 hover:bg-gray-100">
            <td class="py-3 px-6"><?= $film['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($film['name']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($film['director']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($film['year']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($film['category']) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/films/edit/<?= $film['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Editar</a>
                <a href="/films/delete/<?= $film['id'] ?>" class="text-red-500 hover:text-red-700">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
    </div>
</div>

</body>
</html>