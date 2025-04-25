<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Libro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg p-6 rounded-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">📘 Añadir Libro</h2>
        <form method="POST" action="../router.php" class="space-y-4">
            <input type="hidden" name="action" value="add_book">
            <input type="text" name="title" placeholder="Título del libro" class="w-full border border-gray-300 rounded px-3 py-2" required>
        <select name="type" class="w-full border border-gray-300 rounded px-3 py-2" required>
            <option value="">Selecciona el tipo</option>
            <option value="physical">Físico</option>
            <option value="digital">Digital</option>
        </select>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Guardar</button>
        </form>
        <a href="../index.php" class="block mt-4 text-sm text-blue-600 hover:underline">← Volver al inicio</a>
    </div>
</body>
</html>
