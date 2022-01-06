function alertnp() {
    alert("Dieses Feature steht momentan nicht zur Verfügung")
    window.location = "index.html"
}
let bars = document.querySelector("#menu")
let barssrc = document.querySelector("#menu img")
bars.addEventListener('click', function(){
    let x = document.querySelectorAll('#top ul li a')
    x.forEach(element => {
        element.classList.toggle("hidden");
    });
    if(barssrc.getAttribute("src") === "bars-solid.svg"){
        barssrc.setAttribute("src", "times-solid.svg")
    }else{
        barssrc.setAttribute("src", "bars-solid.svg")
    }
})