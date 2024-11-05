<!-- resources/views/layouts/navbar.blade.php -->
<nav class="bg-white p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex space-x-4">
            <!-- Enllaç a la pàgina principal -->
            <a href="/" class="text-black font-semibold">Pàgina Principal</a>
        </div>
        <div class="flex space-x-4">
            <!-- Enllaç al CRUD de pel·lícules -->
            <a href="/films" class="text-black">Pel·lícules</a>

            <!-- Enllaç al CRUD de cotxes -->
            <a href="/cars" class="text-black">Cotxes</a>
        </div>
    </div>
</nav>
