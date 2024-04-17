$(document).ready(function() {
    cargarTarjetas();
    $("#search").on("input", function() {
        var searchValue = $(this).val().trim();
        if (searchValue !== "") {
            buscar(searchValue);
        } else {
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
