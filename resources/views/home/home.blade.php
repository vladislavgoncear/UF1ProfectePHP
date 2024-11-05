<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de Gestió</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Comic Neue', cursive;
            overflow-x: hidden;
            background-color: white; /* Fondo gris claro de la página */
            margin: 0;
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 3rem;
            background-color: white; /* Fondo blanco en el centro */
            color: black; /* Texto en negro */
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
        .float:hover {
            animation: float 0.7s ease-in-out infinite alternate;
        }
        @keyframes float {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-8px);
            }
        }
        /* Botones */
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
            transform: translateY(-4px); /* Eleva el botón */
            animation: pulse 0.5s ease-in-out infinite alternate; /* Añade el efecto de pulsación */
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

<main class="fade-in">
    <!-- Hero Section -->
    <section class="text-center">
        <h1 class="text-6xl font-bold mb-6 text-black drop-shadow-md">Benvingut a Gestor App</h1>
        <p class="text-2xl mb-10 text-gray-700">Porta el control de les teves pel·lícules i coches en un sol clic!</p>
        <div class="space-x-4">
            <a href="/films" class="button float">Pel·lícules</a>
            <a href="/cars" class="button float">Cotxes</a>
        </div>
    </section>
</main>

<!-- Footer -->
<?php include '../resources/views/layout/footer.blade.php';?>

</body>
</html>
