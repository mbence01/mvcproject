<?php
    class Controller {
        /**
         * -Includes the ViewLoader and the specific Model file
         * -The Model file does an SQL query
         * -Store the data from model in a variable, then pass it to the ViewLoader
         * -Finally loads the view
         * If any of these files doesn't exist, the 404 page will be included.
         */
        public function __construct($page) {
            $modelName = ucfirst($page) . "Model";
            $modelPath = "models/" . $modelName . ".php";

            if(file_exists("controllers/ViewLoader.php")) {
                include_once("ViewLoader.php");

                if(file_exists($modelPath)) {
                    include_once($modelPath);
    
                    $viewLoader = new ViewLoader($page);
                    $model = new $modelName;

                    $model->doQuery();
        
                    $dataFromModel = $model->getData();
        
                    $viewLoader->setData($dataFromModel);
        
                    $viewLoader->loadView();
                } else {
                    include_once("views/404.html");
                }
            } else {
                include_once("views/404.html");
            }
        }
    }
?>