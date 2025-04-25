<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prestar Libro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg p-6 rounded-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">📤 Prestar Libro</h2>
        <form method="POST" action="../router.php" class="space-y-4">
            <input type="hidden" name="action" value="borrow_book">
            <input type="number" name="user_id" placeholder="ID del usuario" class="w-full border border-gray-300 rounded px-3 py-2" required>
            <input type="number" name="book_id" placeholder="ID del libro" class="w-full border border-gray-300 rounded px-3 py-2" required>
            <input type="hidden" name="type" value="physical"> <!-- Puedes cambiarlo si necesitas -->
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Prestar</button>
        </form>

        <a href="../index.php" class="block mt-4 text-sm text-blue-600 hover:underline">← Volver al inicio</a>
    </div>
</body>
</html>
