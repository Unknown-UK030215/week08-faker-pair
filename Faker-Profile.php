<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <div>
        <h2></h2>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
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
                    echo "<td>" . htmlspecialchars($faker->name()) . "</td>";
                    echo "<td>" . htmlspecialchars($faker->email()) . "</td>";
                    echo "<td>+63" . $faker->numerify("9## ### ####") . "</td>";
                    echo "<td>" . htmlspecialchars($faker->address()) . "</td>";
                    echo "<td>" . htmlspecialchars($faker->date('Y-m-d')) . "</td>";
                    echo "<td>" . htmlspecialchars($faker->jobTitle()) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
    </div>
</body>
</html>