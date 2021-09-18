<html>
    <head>
        <title>Registered users</title>

        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div id="users-container">
            <hr>
            <p id="users-title">Currently registered users</p>
            <hr>

            <table id="users-table">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                </tr>

                <?php
                    $i = 0;

                    // $this->data is defined in ViewLoader
                    // The result array (which is from the database) is in $this->data 
                    while($i < count($this->data)) {
                        echo "<tr>";
                        echo "  <td>" . $this->data[$i]["id"] . "</td>";
                        echo "  <td>" . $this->data[$i]["name"] . "</td>";
                        echo "</tr>";

                        $i++;
                    }
                ?>
            </table>

            <a href="index.php" class="main-btn">Back to the main page</a>
        </div>
    </body>
</html> 