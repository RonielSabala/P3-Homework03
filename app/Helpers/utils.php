<?php

namespace App\Helpers;

use PDO;
use PDOException;

class Utils
{
    public static function getActiveClass(string $page): string
    {
        $current = defined('CURRENT_PAGE') ? CURRENT_PAGE : '';
        return 'custom-link nav-link' . ($current === $page ? ' active' : '');
    }

    public static function showAlert(string $message, string $type = 'success', string $returnRoute = 'home.php'): void
    {
        echo "
        <div class='text-center'>
            <div class='alert alert-$type'>$message</div>
            <a href='$returnRoute' class='btn btn-primary'>Volver</a>
        </div>
        ";
    }

    public static function getAll($pdo, $table)
    {
        $sql = "SELECT * FROM " . $table;
        try {
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            self::showAlert($e->getMessage(), 'danger');
            return null;
        }
    }
}
