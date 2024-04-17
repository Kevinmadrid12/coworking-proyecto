<?php
include("Coworking2/model/conected.php");

// Obtener la búsqueda y la ubicación seleccionada
$search = $_GET['search'];

// Construir la consulta SQL según la búsqueda y la ubicación seleccionada
if (!empty($search) && !empty($location)) {
    $query = "SELECT c.coworking_space_id, c.space_name, c.descripcion, c.Precio, l.name_location
                FROM coworking_space c
                INNER JOIN location l ON c.location_id = l.location_id
                WHERE (c.descripcion LIKE '%$search%' OR c.space_name LIKE '%$search%') AND l.location_id = $location";
} elseif (!empty($search)) {
    $query = "SELECT c.coworking_space_id, c.space_name, c.descripcion, c.Precio, l.name_location
                FROM coworking_space c
                INNER JOIN location l ON c.location_id = l.location_id
                WHERE c.descripcion LIKE '%$search%' OR c.space_name LIKE '%$search%'";
} elseif (!empty($location)) {
    $query = "SELECT c.coworking_space_id, c.space_name, c.descripcion, c.Precio, l.name_location
                FROM coworking_space c
                INNER JOIN location l ON c.location_id = l.location_id
                WHERE l.location_id = $location";
} else {
    $query = "SELECT c.coworking_space_id, c.space_name, c.descripcion, c.Precio, l.name_location
                FROM coworking_space c
                INNER JOIN location l ON c.location_id = l.location_id";
}

$result = mysqli_query($conn, $query);

// Construir el HTML de las tarjetas
$html = "";
while ($fila = mysqli_fetch_assoc($result)) {
    $html .= "<div class='col-md-4'>
    <div class='card mb-4'>
        <div class='card-body'>
            <h5 class='card-title'>Nombre: {$fila['space_name']}</h5>
            <p class='card-text'>Descripción: {$fila['descripcion']}</p>
            <p class='card-text'><strong>Precio:</strong> {$fila['Precio']}</p>
            <p class='card-text'><strong>Ubicación:</strong> {$fila['name_location']}</p>
        </div>
    </div>
</div>";
}

echo $html;
?>
