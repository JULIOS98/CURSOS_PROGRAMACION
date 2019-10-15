//CREAR UN OBJETO CON INSTANCIA DE VUE
var app = new Vue({
//PROPIEDADES
//propiedad que permite modificra el DOM el cual sera controlado por la instancia creada en Vue
//instancia vue : el
el : '#app',
//index.html consumira la propiedad el: para procecarla


//CAPA DE DATOS DE DOM
//A TRAVEZ DE UNA PROPIEDAD data: Permitira almacenar las propiedades que queremos exponer en el template(index)
//para que el tempalte accese a estas propiedades tendra que hacerlo {{}}
 data:{
  mensaje : "Hola VueJs"
 }
});