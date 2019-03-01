
function traer(){
  fetch('https://datosgobar.github.io/georef-ar-api/')
  .then( response => response.json())
  .then(myJson => {
    
    console.log(myJson)})
}
