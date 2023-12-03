<?php
// Incluir el archivo de conexión a la base de datos
include('controlador/conectar_bd.php');
conectar_bd();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obtener datos del POST    
    $idRecaudo = $_POST['idRecaudoCons'];

    //Realizar Consulta
    $sql = "SELECT * FROM factura WHERE id_factura = '$idRecaudo'";
    $result = $conexion->query($sql);

    //Verificar resultado
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Guardar los campos en un array asociativo
        $facturaData = array(
            'idRecaudo' => $row['id_recaudo'],
            'clienteRecaudo' => $row['id_cliente_recaudo'],
            'idFacRecaudo' => $row['id_factura_recaudo'],
            'idMedPago' => $row['id_med_pago'],
            'valRecaudo' => $row['valor_racaudo'],
            'fechaRecaudo' => $row['fecha_factura']
        );

        // Convertir el array en una cadena JSON
        $jsonFactura = json_encode($facturaData);

        // Mostrar o enviar la cadena JSON según tus necesidades
        echo $jsonFactura;
    } else {
        echo json_encode(array('error' => 'No se encontraron resultados'));
    }
}
