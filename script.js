$(document).ready(function() {
    cargarTarjetas();
    
    // Función para manejar el evento de clic en el botón de búsqueda
    $("button.btn-outline-success").click(function() {
        var searchValue = $("#search").val().trim();
        if (searchValue !== "") {
            buscar(searchValue);
        } else {
            alert("Ingrese un término de búsqueda válido.");
        }
    });

    // Función para manejar el evento de entrada en el input de búsqueda
    $("#search").on("input", function() {
        var searchValue = $(this).val().trim();
        if (searchValue === "") {
            cargarTarjetas();
        }
    });

    function buscar(searchValue) {
        $.ajax({
            url: "buscador.php",
            type: "GET",
            data: {
                search: searchValue
            },
            success: function(response) {
                if (response.trim() === "") {
                    alert("No se encontraron resultados.");
                }
                $("#cardContainer").html(response);
            }
        });
    }

    function cargarTarjetas() {
        $.ajax({
            url: "buscador.php",
            type: "GET",
            data: {
                search: ""
            },
            success: function(response) {
                $("#cardContainer").html(response);
            }
        });
    }
});
