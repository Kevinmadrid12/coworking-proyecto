$(document).ready(function() {
    cargarTabla();
    $("#search").on("input", function() {
        var searchValue = $(this).val().trim();
        if (searchValue !== "") {
            buscar(searchValue);
        } else {
            cargarTabla();
        }
    });

    function buscar(searchValue) {
        $.ajax({
            url: "../controller/buscador.php",
            type: "GET",
            data: {
                search: searchValue
            },
            success: function(response) {
                if (response.trim() === "") {
                    alert("No se encontraron resultados.");
                }
                $("#dataTable tbody").html(response);
            }
        });
    }

    function cargarTabla() {
        $.ajax({
            url: "../controller/buscador.php",
            type: "GET",
            data: {
                search: ""
            },
            success: function(response) {
                $("#dataTable tbody").html(response);
            }
        });
    }
});