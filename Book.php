
<?php 
                require 'vendor/autoload.php';
                $faker = Faker\Factory::create('fil_PH');
                $genres = ["Fiction", "Mystery", "Science Fiction", "Fantasy", "Romance", "Thriller", "Historical", "Horror"];

                $books = [];

                for ($i = 1; $i <= 15; $i++) {
                    $books[] = [
                        'title' => $faker->sentence(3),
                        'author' => $faker->name,
                        'publication_year' => rand(1900, 2024),
                        'isbn' => $faker->isbn13,
                        'genre' => $genres[array_rand($genres)],
                        'summary' => $faker->paragraph,
                    ];
                };

                    
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
    h1{
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
    }
</style>
<body>
    <div>
        <h1>Books</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publication Year</th>
                    <th>ISBN</th>
                    <th>Genre</th>
                    <th>Summary</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['publication_year'] ?></td>
                        <td><?= $book['isbn'] ?></td>
                        <td><?= $book['genre'] ?></td>
                        <td><?= $book['summary'] ?></td>
                    </tr>
                <?php endforeach; ?>
            
            </tbody>
    </div>
</body>
</html>