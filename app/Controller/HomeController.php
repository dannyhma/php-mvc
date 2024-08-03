<?php

namespace Himaone\PhpMvc\Controller;

class HomeController
{
  function index(): void
  {
    $model = [
      "title" => "Home",
      "content" => "Belajar PHP MVC"
    ];
    echo "HomeController.index()";
  }
  function hello(): void
  {
    echo "HomeController.hello()";
  }
  function world(): void
  {
    echo "HomeController.world()";
  }
  function about(): void
  {
    echo "Author: Danny Himawan";
  }
  function login(): void
  {
    $request = [
      "username" => $_POST["username"],
      "password" => $_POST["password"],
    ];

    $user = [];

    $response = [
      "message" => "Login Success",
    ];
    //send response to view
  }
}
