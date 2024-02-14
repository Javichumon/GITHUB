
$(document).ready(function () {
    var fromRow, fromCol;

    $('td').click(function () {
        
        var cell = $(this);
        var piece = cell.find('img');

        if (typeof fromRow === 'undefined' || typeof fromCol === 'undefined') {
            fromRow = cell.closest('tr').index();
            fromCol = cell.index();
            piece.addClass('selected');
        } else {
            var toRow = cell.closest('tr').index();
            var toCol = cell.index();

            var fromContent = $('tr:eq(' + fromRow + ') td:eq(' + fromCol + ')').html();

            cell.html(fromContent);
           
            $('tr:eq(' + fromRow + ') td:eq(' + fromCol + ')').html('');

            piece.removeClass('selected');
            fromRow = undefined;
            fromCol = undefined;

            
            actualizarEstadoTablero();
        }
    });

    function actualizarEstadoTablero() {
        var estadoTablero = obtenerEstadoTablero();
        $('#estadoTablero').text('Estado del tablero: ' + estadoTablero);
    }

    
    function obtenerEstadoTablero() {
        var estado = '';
        $('table.chessTable td').each(function () {
            var piece = $(this).find('img').attr('alt') || '';
            estado += piece + ',';
        });
        return estado.slice(0, -1); 
    }

    function actualizarEstadoTablero() {
        var estadoTablero = obtenerEstadoTablero();
        $.ajax({
            type: 'GET', // Cambia el tipo de solicitud a GET
            url: 'boardView.php',
            data: { estadoTablero: estadoTablero },
            success: function (response) {
                console.log('Estado del tablero enviado correctamente');
            },
            error: function (error) {
                console.error('Error al enviar el estado del tablero: ' + error);
            }
        });
    }
    $('td').click(function () {
        console.log('Celda clickeada');
    });
});