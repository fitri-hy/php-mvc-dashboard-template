<?php

require_once '../app/core/Controller.php';
require_once '../app/models/User.php';

class DashboardController extends Controller
{
    public function showDashboard()
    {
        include '../app/views/dashboard.php';
    }
}
