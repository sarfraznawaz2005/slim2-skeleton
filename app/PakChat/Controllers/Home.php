<?php
namespace PakChat\Controllers;

use PakChat\Models\User;

class Home extends Controller
{
    private $title = 'Welcome!';

    public function index()
    {
        $data['title'] = $this->title;

        $this->app->logger->info("Home Controller");

        $this->app->render('home.twig', $data);
        //print_r(User::all());
    }
}