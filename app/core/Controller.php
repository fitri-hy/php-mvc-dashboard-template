<?php

class Controller
{
    protected function loadView($viewName)
    {
        $filePath = BASE_PATH . '/' . $viewName;
        if (file_exists($filePath)) {
            include $filePath;
        } else {
            echo "View not found: " . htmlspecialchars($filePath);
        }
    }
}
