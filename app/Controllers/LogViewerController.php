<?php

namespace App\Controllers;
use App\Controllers\BaseController;


use App\Models\SystemModel;

class LogViewerController extends BaseController
{

    private $logViewer;

    public function __construct()
    {
        $this->logViewer = new \CILogViewer\CILogViewer();
    }

    public function index() {
        echo $this->logViewer->showLogs();

        return;}


}
