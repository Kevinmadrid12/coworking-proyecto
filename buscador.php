<?php
include("../model/conected.php");

$search = $_GET['search'];

if (!empty($search)) {
    $query = "SELECT c.coworking_space_id, c.space_name, c.descripcion, c.Precio, c.location_id
                FROM coworking_space c WHERE c.descripcion LIKE '%$search%' OR c.space_name LIKE '%$search%'";
} else {
    $query = "SELECT c.coworking_space_id, c.space_name, c.descripcion, c.Precio, c.location_id
                FROM coworking_space c";
}


$result = mysqli_query($conn, $query);

$html = "";
while ($fila = mysqli_fetch_assoc($result)) {
    $html .= "<tr>
                <td>{$fila['coworking_space_id']}</td>
                <td>{$fila['space_name']}</td>
                <td>{$fila['descripcion']}</td>
                <td>{$fila['Precio']}</td>
                <td>{$fila['location_id']}</td>
                <td>
                    <button type='button' class='btn btn-warning'>
                        <i class='fa fa-edit'></i>
                    </button>
                    <button type='button' class='btn btn-danger'>
                        <i class='fa fa-trash'></i>
                    </button>
                </td>
              </tr>";
}


echo $html;
