<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 1/22/19
 * Time: 10:13 PM
 */

require_once __DIR__."/../MovieBuness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Movie.php";
require_once __DIR__."/../../repo/impl/MovieRepoImpl.php";



class MovieBunessImpl implements MovieBuness
{

    public function addItem(Movie $movie): bool
    {
        echo $movie->getName();
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new MovieRepoImpl();
        $customerRepo->setConnection($connection);

        return $customerRepo->addItem($movie);
    }

    public function deleteItem(string $id): bool
    {
        // TODO: Implement deleteItem() method.
    }

    public function serchItem(string $id): array
    {
        // TODO: Implement serchItem() method.
    }

    public function updateItem(Movie $movie): bool
    {
        // TODO: Implement updateItem() method.
    }

    public function getAllItem(): array
    {
        // TODO: Implement getAllItem() method.
    }
}