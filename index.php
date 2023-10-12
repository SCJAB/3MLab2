<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Food Benefits</title>
</head>
<body>

    <h1>Know you Health Food!</h1>

    <!-- Switch statement thaat will display the health benefits. Display an appropriate message for other entries. Using PHP -->

    <div>
        <div class="container_two">
        <?php
            $foods = array("Almond", "Oatmeal", "Broccoli", "Apple", "Avocados", "Chicken"); // List of foods
            $food = $foods[array_rand($foods)]; // Randomly select a food from the list

            switch ($food) {
                case "Almond":
                    $benefits = "<h2>Almond has magnesium, vitamin E, iron, calcium, and fiber.</h2>";
                    break;
                case "Oatmeal":
                    $benefits = "<h2>Oats contain complex carbohydrates, as well as water-soluble fiber.</h2>";
                    break;
                case "Broccoli":
                    $benefits = "<h2>Broccoli provides good amounts of fiber, calcium, potassium, folate, and phytonutrient.</h2>";
                    break;
                case "Apple":
                    $benefits = "<h2>Apples are an excellent source of antioxidants, which combat free radicals.</h2>";
                    break;
                case "Avocados":
                    $benefits = "<h2>Avocados provide healthful fats, as well as B vitamins, vitamin K, and vitamin E.</h2>";
                    break;
                case "Chicken":
                    $benefits = "<h2>Chicken is cost-effective meat that is an excellent source of protein.</h2>";
                    break;
                default:
                    $benefits = "<h2>No health benefits found for this food.</h2>";
                    break;
            }
            echo "<h2>Random Food: $food</h2>";
            echo "<h4>Benefits: $benefits</h4>";
            ?>
        </div>
    </div>
</body>
</html>