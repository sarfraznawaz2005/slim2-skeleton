<?php
namespace PakChat\Controllers;

// base class
class Controller
{
    protected $app = null;

    public function __construct()
    {
        global $app;
        $this->app = $app;
    }
}