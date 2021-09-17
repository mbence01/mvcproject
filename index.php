<?php
    $targetFile = "/controllers/";
    $pageName = "main";

    if(isset($_GET["page"])) { // $_GET["page"] doesn't exist means user's trying to access '/' -> the main page
        $pageName = $_GET["page"];
    }

    $targetFile .= $pageName . ".php"; // Target controller file name

    /**
     * If the file exists (and the class in the file), include it then call the class's constructor, which is going to generate the page. 
     * If the file does not exist, it redirects the user to the 404 page.
     */
    if(file_exists($targetFile)) {
        require_once($targetFile);

        $className = ucfirst($pageName) . "Controller"; // The classname in target file

        if(class_exists($className)) {
            new $className;
        } else {
            header("Location: views/404.html");
        }
    } else {
        header("Location: views/404.html");
    }
?>