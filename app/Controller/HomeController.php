<?php

namespace Himaone\PhpMvc\Controller;

class HomeController
{
  function index(): void
  {
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
}