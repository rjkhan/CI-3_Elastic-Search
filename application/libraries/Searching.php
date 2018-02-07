<?php
require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;
class Searching{

    public function __construct(){
        echo "call my class";
    }

   public function init()
   {
   	echo "init function\n";
   }

}
?>