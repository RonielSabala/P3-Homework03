<?php

namespace App\Controllers;

use App\Core\Template;
use App\Helpers\Utils;


class EditController
{
    public function handle(Template $template, $pdo)
    {
        if ($_POST) {
            // Datos de la factura
            $id = intval($_POST['id']);
            $nombre_cliente = $_POST['nombre_cliente'];
            $total = $_POST['total'];
            $comentario = $_POST['comentario'];

            // Crear una nueva factura
            $sql = "INSERT INTO facturas (nombre_cliente, total, comentario) VALUES (?, ?, ?)";
            $params = [$nombre_cliente, $total, $comentario];

            if (!Utils::executeSql($pdo, $sql, $params)) {
                exit;
            }

            $id = $pdo->lastInsertId();

            // Detalles de la factura
            $ids = $_POST['ids'];
            $cantidades = $_POST['cantidades'];
            $precios = $_POST['precios'];

            for ($i = 0; $i < count($ids); $i++) {
                $articulo_id = $ids[$i];
                $cantidad = $cantidades[$i];
                $precio = $precios[$i];

                // Crear detalle
                $sql = "INSERT INTO detalle_factura (factura_id, articulo_id, cantidad, precio_unitario) VALUES (?, ?, ?, ?)";
                $params = [$id, $articulo_id, $cantidad, $precio];
                if (!Utils::executeSql($pdo, $sql, $params)) {
                    exit;
                }
            }

            header('Location: /home.php');
            exit;
        }

        $articulos = Utils::getAll($pdo, "articulos");
        $template->apply('edit', [
            'id' => '',
            'fecha_emision' => '',
            'nombre_cliente' => '',
            'total' => 0,
            'comentario' => '',
            'articulos' => $articulos,
            'detalles' => '',
        ]);
    }
}
