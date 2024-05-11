<?php
namespace App\Models;

use PDO;
use Core\Config\Database;
class User extends Model
{
    public function __construct()
    {
        $this->table='users';
        parent::__construct();
        $this->createTable();
    }
    public function test()
    {
        echo 'test?';
    }
}