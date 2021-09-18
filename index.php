<?php
    set_include_path("/opt/lampp/htdocs/");

    $targetFile = "controllers/Controller.php"; // The Controller file's path
    $pageName = "main"; // If page var does not exist, "main" will be the pagename

    if(isset($_GET["page"])) { // $_GET["page"] doesn't exist means user's trying to access '/' -> the main page
        $pageName = $_GET["page"];
    }

    /**
     * If the file exists (and the class in the file), include it then call the class's constructor, which is going to generate the page. 
     * If the file does not exist, it redirects (actually includes the file) the user to the 404 page.
     */
    if(file_exists($targetFile)) {
        include_once($targetFile);

        if(class_exists("Controller")) {
            new Controller($pageName);
        } else {
            include_once("views/404.html");
        }
    } else {
        include_once("views/404.html");
    }
?>