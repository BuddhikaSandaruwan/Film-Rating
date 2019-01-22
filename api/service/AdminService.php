<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 1/22/19
 * Time: 5:33 PM
 */

$movieBo=new MovieBunessImpl();
$mothod = $_SERVER["REQUEST_METHOD"];
switch ($mothod) {
    case "GET":

        break;
    case "POST":
        $id = $_POST['id'];
        $name = $_POST["name"];
        $imgUrl = $_POST['image'];
        $type = $_POST['type'];
        $videoUrl = $_POST['video'];
        $discription = $_POST['message'];

        $tempMovie = new Movie($id,$name,$imgUrl,$type,$videoUrl,$discription);
        $resp = $movieBo->addItem($tempMovie);
        echo $resp;
        echo $name;
        break;
}