<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake User Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        h2 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 15;
            font-weight: bolder;
        }
        div table thead tr th {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }
        body {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <div class=".container-md">
        <h2 class="text-center mb-4">Fake User Account</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password (SHA-256)</th>
                    <th>Account Created</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require 'vendor/autoload.php';

                    $faker = Faker\Factory::create('en_PH');

                    for ($i = 0; $i < 10; $i++) {
                        $fullName = $faker->name;
                        $email = $faker->email;
                        $username = explode('@', $email)[0];
                        $password = hash('sha256', $faker->password);
                        $uuid = $faker->uuid;
                        $createdAt = $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s');

                        echo "<tr>";
                        echo "<td>$uuid</td>";
                        echo "<td>$fullName</td>";
                        echo "<td>$email</td>";
                        echo "<td>$username</td>";
                        echo "<td class='password-cell'>$password</td>";
                        echo "<td>$createdAt</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>