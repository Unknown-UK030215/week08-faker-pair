<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faker User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
            h2{
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
            }
            thead tr th {
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }

            tbody tr td {
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
    </style>
</head>

<body>
    <div class=".container-md">
        <h2 class="text-center mb-4">Faker User Profile</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Birthdate</th>
                    <th>Job Title</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require 'vendor/autoload.php';

                $faker = Faker\Factory::create('fil_PH');
                

                for ($i = 1; $i < 20; $i++) {
                    echo "<tr>";
                    echo "<td>" . $faker->name() . "</td>";
                    echo "<td>" . $faker->email() . "</td>";
                    echo "<td>+63" . $faker->numerify("9## ### ####") . "</td>";
                    echo "<td>" . $faker->address() . "</td>";
                    echo "<td>" . $faker->date('Y-m-d') . "</td>";
                    echo "<td>" . $faker->jobTitle() . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>