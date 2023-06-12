// document.getElementById("titulillo").innerHTML = "Adios";
var vista="vista1";
function cambiarVista() {
    let text = "";
    switch (vista) {
      case "vista1":
        vista = "vista2";
        text = "Vista pequeña";
        break;
      case "vista2":
        vista = "vista3";
        text = "Vista grande";
        break;
      case "vista3":
        vista = "vista1";
        text = "Vista mediana";
        break;
    }
  document.getElementById("btn").innerHTML = text;
  document.getElementById("lista").className = vista;
}   