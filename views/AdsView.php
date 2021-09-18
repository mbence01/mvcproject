<html>
    <head>
        <title>Advertisements</title>

        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div id="users-container">
            <hr>
            <p id="users-title">Advertisements</p>
            <hr>

            <div id="records">

            <?php

                $i = 0;

                // $this->data is defined in ViewLoader
                // The result array (which is from the database) is in $this->data 
                while($i < count($this->data)) {
                    echo "<div class='ads-record'>";
                    echo "  <p class='ads-ttl'><q>" . $this->data[$i]["title"] . "</q></p>";
                    echo "  <p class='ads-author'>Written by: " . $this->data[$i]["name"] . "</p>";
                    echo "</div>";

                    $i++;
                }

            ?>

            </div>

            <a href="index.php" class="main-btn">Back to the main page</a>
        </div>
    </body>
</html> 