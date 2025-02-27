<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faker User Profile</title>
</head>
<body>
    <div class=".container-md">
        <h2 class="text-center mb-4"></h2>
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
        </table>
        <tbody>
                <?php 
                require 'vendor/autoload.php';

                $faker = Faker\Factory::create('fil_PH');
                $num_profiles = 20;

                for ($i = 1; $i < $num_profiles; $i++) {
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
    </div>
</body>
</html>