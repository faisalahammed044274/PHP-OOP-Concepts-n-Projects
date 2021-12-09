<?php

class Users{
    function fetchUser($id): bool{

        $result = false;

        echo "Query the Database : $id" . PHP_EOL;
        $result = true;
        echo "Display the records : $id" . PHP_EOL;

        return $result;

    }

    function deleteUser($id) {
        echo "Deleting the records for the User ID : $id" . PHP_EOL;
    }
}

$user1 = new Users();
$user1->fetchUser(101);
$user1->deleteUser(101);
$user1->fetchUser(102);
$user1->fetchUser(103);
$user1->deleteUser(102);


?>