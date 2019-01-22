<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 1/22/19
 * Time: 10:22 PM
 */

require_once __DIR__ . "/../MovieRepo.php";
require_once __DIR__ . "/../../core/Movie.php";

class MovieRepoImpl implements MovieRepo
{

    private $connection;

    /**
     * ItemRepoImpl constructor.
     */
    public function __construct()
    {
        $connection=(new DBConnection())->getDBConnection();
        $this->connection = $connection;
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }


    public function addItem(Movie $movie): bool
    {
        echo $movie->getName();
        $resp=$this->connection->query(
            "INSERT INTO Movie VALUES(
                '{$movie->getId()}',
                '{$movie->getName()}',
                '{$movie->getImg()}',
                '{$movie->getType()}',
                '{$movie->getVideo()}',
                '{$movie->getDiscription()}')");
        if($resp){
            echo "Movie Add..!";
        }else{
            echo "Movie Not Add..!";
        }

        echo mysqli_error($this->connection);

        return $resp;
    }

    public function deleteItem(string $id): bool
    {
        // TODO: Implement deleteItem() method.
    }

    public function searchItem(string $id): array
    {
        // TODO: Implement searchItem() method.
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