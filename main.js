// var producto = new Object();
// producto.nombre = "nombre";
// producto.color = "negro";
//
// document.write(' '+producto.color+ ' '+producto.nombre);


// Funcion constructora
function Producto(marca, modelo, annio, colour) {
  this.marca = marca;
  this.modelo = modelo;
  this.annio = annio;
  this.colour = colour;
}
// Crea objeto miAuto
var miProducto1 = new Producto(
  "Citroen",
  "Laguna",
  2015,
  "negro"
);

document.write(miProducto1.colour);



// get json
var url = 'http://t0t-2.local:5757/wp-json/posts';
var xhr = new XMLHttpRequest();
xhr.addEventListener('readystatechange', function() {
  if (this.readyState === this.DONE) {
    var posts = JSON.parse(this.responseText);
      console.log(posts);
      var content = posts[0].content;
      console.log(content);
  }
});
xhr.open('GET', url, true);
xhr.send();
