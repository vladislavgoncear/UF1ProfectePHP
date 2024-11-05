<?php

namespace App\Models;

use Core\App;

class Car
{
    protected static $table = 'cars';

    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO ' . static::$table . ' (make, model, year, category) VALUES (:make, :model, :year, :category)');
        $statement->bindValue(':make', $data['make']);
        $statement->bindValue(':model', $data['model']);
        $statement->bindValue(':year', $data['year']);
        $statement->bindValue(':category', $data['category']);
        $statement->execute();
    }

    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('UPDATE ' . static::$table . ' SET make = :make, model = :model, year = :year, category = :category WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->bindValue(':make', $data['make']);
        $statement->bindValue(':model', $data['model']);
        $statement->bindValue(':year', $data['year']);
        $statement->bindValue(':category', $data['category']);
        $statement->execute();
    }

    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}