<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 1/22/19
 * Time: 10:09 PM
 */

require_once __DIR__."/../core/Movie.php";

interface MovieBuness
{
    public function addItem(Movie $item): bool ;
    public function deleteItem(string $id): bool ;
    public function serchItem(string $id): array ;
    public function updateItem(Movie $item):bool ;
    public function getAllItem():array ;

}