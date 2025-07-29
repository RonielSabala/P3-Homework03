<h2>Listado de facturas</h2>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Fecha de emisión</th>
            <th>Cliente</th>
            <th>Comentario</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($facturas as $factura) {
        ?>
            <tr>
                <td><?= htmlspecialchars($factura->id) ?></td>
                <td><?= htmlspecialchars($factura->fecha_emision) ?></td>
                <td><?= htmlspecialchars($factura->nombre_cliente) ?></td>
                <td><?= htmlspecialchars($factura->comentario) ?></td>
                <td><?= htmlspecialchars($factura->total) ?></td>
                <td></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>