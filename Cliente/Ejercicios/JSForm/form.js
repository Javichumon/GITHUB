function comprobarContraseña(){
   let contraseñaNueva=document.getElementById("contraseñaNueva").value;
   let contraseñaRevision=document.getElementById("revisionContraseña").value;
   if(contraseñaNueva == contraseñaRevision){
       document.getElementById("result").innerHTML="Si las contraseñas son iguales";
   }else{
       document.getElementById("result").innerHTML="No las contraseñas no son iguales";
   }
}
function datosBasicos(){
   let longitud=document.getElementsByClassName("basico");
   let arrayDatosBasicos=[];
   for (let i = 0; i < longitud.length; i++) {     
       let valores=document.getElementsByClassName("basico")[i].value;
       arrayDatosBasicos.push(valores);  
   }


   for (let i = 0; i < arrayDatosBasicos.length; i++) {
       let datosBasico=arrayDatosBasicos.toString();
       document.getElementById("datos").innerHTML=datosBasico;
   }
  }


  function datosAcademia(){
   let longitud=document.getElementsByClassName("Academia");
   arrayDatosAcademicos=[];
   for (let i = 0; i < longitud.length; i++) {
       if(document.getElementsByClassName("Academia")[i].checked) {
           let valores=document.getElementsByClassName("Academia")[i].value;
           arrayDatosAcademicos.push(valores);
         }
   }


   for (let i = 0; i < arrayDatosAcademicos.length; i++) {
       let datosAcademicos=arrayDatosAcademicos.toString();
       document.getElementById("datos").innerHTML=datosAcademicos;
   }
}
function datosContacto(){
   let email=document.getElementsByClassName("Contacto")[0].value;
   document.getElementById("datos").innerHTML=email;
}      
function otrosDatos(){
   let longitud=document.getElementsByClassName("other");
   let arrayOtrosDatos=[];
   for (let i = 0; i < longitud.length; i++) {
           let valores=document.getElementsByClassName("other")[i].value;
           arrayOtrosDatos.push(valores);
         }
   for (let i = 0; i < arrayOtrosDatos.length; i++) {
       diferentesDatos=arrayOtrosDatos.toString();      
       document.getElementById("datos").innerHTML=diferentesDatos;      
   }
}
const messageBox = document.getElementById("messageBox");

const clickButton = document.getElementById("clickButton");

const dblclickButton = document.getElementById("dblclickButton");

const mouseoverButton = document.getElementById("mouseoverButton");

const mousedownButton = document.getElementById("mousedownButton");

const mouseupButton = document.getElementById("mouseupButton");

const message1 = document.getElementById("message1");

clickButton.addEventListener("click", () => {

	message1.textContent = "Si un caballo tiene nombre y no es 'Horse Luis', entonces no es un buen nombre.";

});


dblclickButton.addEventListener("dblclick", () => {

	message1.textContent = "¡Buenos días!";

});


mouseoverButton.addEventListener("mouseover", () => {

	message1.textContent = "¿Qué miras?";

});


mousedownButton.addEventListener("mousedown", () => {

	message1.textContent = "Me aburro";

});


mouseupButton.addEventListener("mouseup", () => {

	message1.textContent = "!Hola mundo!";

});