<?php


namespace App\Http\Controllers;


use mysql_xdevapi\Exception;

class indexController extends controller
{
    public function home(){
        try {
            // Your code logic goes here
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        return view('index.home');
    }

    public function aboutUs(){
        try {
            // Your code logic goes here
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        return view('index.aboutUs');
    }

    public function contactUs(){
        try {
            // Your code logic goes here
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        return view('index.contactUs');
    }

}
