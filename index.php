<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">📚 Gestión de Biblioteca</h1>

        <nav class="flex justify-center space-x-4 mb-8">
            <!-- Rutas sin la barra diagonal inicial -->
            <a href="views/add_user.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">➕ Añadir Usuario</a>
            <a href="views/add_book.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">📘 Añadir Libro</a>
            <a href="views/borrow_book.php" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">📤 Prestar Libro</a>
            <a href="views/return_book.php" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">📥 Devolver Libro</a>
        </nav>

        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-2">👤 Usuarios Registrados</h2>
            <ul class="bg-white p-4 rounded shadow">
                <?php
                require_once 'infrastructure/Database.php';
                $db = Database::connect();
                $users = $db->query("SELECT * FROM users");
                foreach ($users as $user) {
                    echo "<li class='border-b py-1'>ID: <strong>{$user['id']}</strong> - {$user['name']}</li>";
                }
                ?>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-2">📚 Libros Disponibles</h2>
            <ul class="bg-white p-4 rounded shadow">
                <?php
                $books = $db->query("SELECT * FROM books");
                foreach ($books as $book) {
                    echo "<li class='border-b py-1'>ID: <strong>{$book['id']}</strong> - \"{$book['title']}\" ({$book['type']})</li>";
                }
                ?>
            </ul>
        </section>

        <section>
            <h2 class="text-xl font-semibold mb-2">📆 Préstamos Activos</h2>
            <ul class="bg-white p-4 rounded shadow">
                <?php
                $loans = $db->query("
                    SELECT loans.id, users.name AS user_name, books.title AS book_title, due_date
                    FROM loans
                    JOIN users ON loans.user_id = users.id
                    JOIN books ON loans.book_id = books.id
                    WHERE loans.returned = 0
                ");
                foreach ($loans as $loan) {
                    echo "<li class='border-b py-1'>ID: <strong>{$loan['id']}</strong> - <strong>{$loan['user_name']}</strong> tiene <em>\"{$loan['book_title']}\"</em> hasta el <strong>{$loan['due_date']}</strong></li>";
                }
                ?>
            </ul>
        </section>
    </div>
</body>
</html>
