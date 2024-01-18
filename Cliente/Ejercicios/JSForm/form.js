function comprobar() {
    let x, y;
    x = document.getElementById("password").value;
    y = document.getElementById("confirmpassword").value;
 
 
    if (x != y) {
        document.getElementById("passwordcheck").innerHTML = "Las contraseñas no coinciden.";
        document.getElementById("passwordcheck").style.color = "red";
    } else {
        document.getElementById("passwordcheck").innerHTML = "Las contraseñas coinciden.";
        document.getElementById("passwordcheck").style.color = "blue";
    }
}
function mostrarCategoria(categoria) {
    document.querySelectorAll('.basico, .contacto, .academico, .otros').forEach(function(elemento) {
       elemento.style.display = 'none';
    });
    document.querySelectorAll('.' + categoria).forEach(function(elemento) {
       elemento.style.display = 'block';
    });
 }
 function mostrarTodo() {
    document.querySelectorAll('.basico, .contacto, .academico, .otros').forEach(function(elemento) {
       elemento.style.display = 'block';
    });
 }

 