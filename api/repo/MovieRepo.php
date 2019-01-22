<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 1/22/19
 * Time: 10:19 PM
 */

require_once __DIR__."/../core/Movie.php";

interface MovieRepo
{

    public function setConnection(mysqli $connection): void;

    public function addItem(Movie $movie): bool ;

    public function deleteItem(string $id): bool ;

    public function searchItem(string $id): array ;

    public function updateItem(Movie $movie): bool ;

    public function getAllItem(): array ;

}