let imagenes = ['galeria/fotos/img_1.jpg'];


let agregar_producto_js = document.querySelector('.boton-agrega');
agregar_producto_js.addEventListener("click", agregar);

function agregar(){

  
  let agregar_div = document.createElement('div');
  agregar_div.setAttribute('class', 'imagen');
  
  let imagen_producto = document.createElement('img');
  imagen_producto.setAttribute('src', 'img/products/img_1.jpeg');
  
  let div_producto = document.createElement('div');
  div_producto.setAttribute('class', 'tema-cedej');
  
  let texto_producto = document.createElement('h3');
  texto_producto.innerText = 'Texto enlace';
  
  let contenedor_productos = document.querySelector('.container-imagenes');
  contenedor_productos.appendChild(agregar_div);
  
  let agregar_div_contenedor = document.querySelector('.imagen');
  agregar_div_contenedor.appendChild(imagen_producto);
  agregar_div_contenedor.appendChild(div_producto);
  
  
  let div_producto_descripcion = document.querySelector('.tema-cedej');
  div_producto_descripcion.appendChild(texto_producto);  
}