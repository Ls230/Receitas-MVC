nomes = document.querySelectorAll("li")
esco = document.querySelector("input[name='escolhido']")


for (t = 0; t < nomes.length; t++ ){
    nomes[t].addEventListener("click", function(){
       enviar(this)
    })
}

function enviar(li){
    let cod = li.querySelector("#cod")
    esco.value = cod.value
    document.getElementById("form").submit();
}

//filtro

document.querySelector("button#filtrar").addEventListener("click", filtrar)

function filtrar(){
var filtro = document.querySelector("select")

var selected = filtro.value

for (c = 0; c < nomes.length; c++){
    var categorias = document.querySelectorAll("#categoria")
    var categoria = categorias[c].value

    if (categoria == selected){
        nomes[c].style.display = "block"
    }else{
        nomes[c].style.display = "none"
    }
}
}