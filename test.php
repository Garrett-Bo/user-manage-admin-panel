<?php

include("vendor/autoload.php");

// use Helpers\Auth;
// use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

use Faker\Factory as Faker;

// Auth::check();
// HTTP::redirect();

// $db = new MySQL;
// $db->connect();

// $table = new UsersTable;
// $table->insert();


$faker = Faker::create();
// echo $faker->name;

// $mysql = new MySQL;
// $db = $mysql->connect();

// $result = $db->query("SELECT * FROM roles");
// print_r($result->fetchAll());

$table = new UsersTable(new MySQL);
// $id = $table->insert([
//     "name" => "Alice",
//     "email" => "alice@gmail.com",
//     "phone" => "2374892",
//     "address" => "Address",
//     "password" => "password",
// ]);

// echo "$id"

// $user = $table->find('alice@gmail.com', 'password');
// print_r($user);

echo "Sample data: Starting... <br>";
for($i=0;$i<20;$i++) {
    $user = $table->insert([
        "name" => $faker->name,
        "email" => $faker->email,
        "phone" => $faker->phoneNumber,
        "address" => $faker->address,
        "password" => "password",
    ]);
}

echo  "Sample data: Done<br>";
