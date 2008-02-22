<?php 

/*
   Class: WelcomeController
      Enter description here...

   Author:
      Philippe Archambault <philippe.archambault@gmail.com>
*/
class WelcomeController extends Controller
{
    function index()
    {
        $this->display('welcome/index');
    }
}
