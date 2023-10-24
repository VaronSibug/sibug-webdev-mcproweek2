<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKDU</title>
    <link rel="stylesheet" href="styles.css">
</head>
<Form method="POST" action="index.html">

<body>
    
       <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo "<div class='summary'>";
            echo "<h2>📝 Order Summary</h2>";

            $chicken_price = [
                "none" => 0,
                "chicken nakaupo" => 50,
                "chicken nakatayo" => 25,
                "chicken nakasplit" => 20,
                "chicken nakahilata" => 30,
                "chicken nakadapa" => 35,
            ];
            $burger_price = [
                "none" => 0,
                "burger ng kalabaw" => 50,
                "burger ni juswa" => 100,
                "burger ng anghel"=> 65,
                "burger spesyal"=> 120,
            ];

            $drinks_price = [
                "none"=> 0,
                "koke" => 20,
                "esprit" => 20,
                "tubeg" => 10,
                "kape"=> 15,
                "kukeflut"=> 50,
            ];
        
           

            $frais_prices = [
                "none"=> 0,
                "cheese frais" => 20,
                "bbq frais" => 21,
                "sweetnsour"=>25,
            ];

          
       
           
            $chicken_type = $_POST["chicken"];
            $burger_type = $_POST["BURGER"];
            $drinks_type = $_POST["drinks"];
            $frais_type = $_POST["frais"];

       

        $total_price = $chicken_price[$chicken_type] + $burger_price[$burger_type] + $drinks_price[$drinks_type] + $frais_prices[$frais_type];  

           






         echo "<table>";

            
            echo "<tr><td>Name</td><td>" . htmlspecialchars($_POST["name"]) . "</td></tr>";

            
            echo "<tr><td>CHICKEN</td><td>" . htmlspecialchars($_POST["chicken"]) . " (₱" . number_format($chicken_price[$chicken_type], 2) . ")</td></tr>";
          
            
            echo "<tr><td>BURGER</td><td>" . htmlspecialchars($_POST["BURGER"]) . " (₱" . number_format($burger_price[$burger_type], 2) . ")</td></tr>";

            echo "<tr><td>DRINKS</td><td>" . htmlspecialchars($_POST["drinks"]) . " (₱" . number_format($drinks_price[$drinks_type], 2) . ")</td></tr>";

            echo "<tr><td>FRAIS</td><td>" . htmlspecialchars($_POST["frais"]) . " (₱" . number_format($frais_prices[$frais_type], 2) . ")</td></tr>";



            echo "<tr><td>Total Price</td><td>₱" . number_format($total_price, 2) . "</td></tr>";
            echo "<tr><td>Special Instructions</td><td>" . htmlspecialchars($_POST["instructions"]) . "</td></tr>";

           
            echo "</table>";

           
        
            if ($total_price > 250 && $total_price < 350) {
                echo "<p>Password for the CR: coffee123</p>";
            } elseif ($total_price >= 350) {
                echo "<p>Password for Wi-Fi: mocha456</p>";
            }

            echo "</div>";
        }

        ?>
     <button id="back"> back</button>  
    </Form>
   <form method="POST" action="gb.html">
    
   <Button id="Done">Done</Button>
    </Form>
        
    </div>
</body>

</html>