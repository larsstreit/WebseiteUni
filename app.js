let bars = document.querySelector("#menu");
let barssrc = document.querySelector("#menu img");
bars.addEventListener('click', function () {
    let logo = document.querySelector("#logo");
    let top = document.querySelector("#top");
    let hiddenul = document.querySelector("#top ul");
    let x = document.querySelectorAll('#top ul li a');
    x.forEach(element => {
        element.classList.toggle("hidden");
    });
    top.classList.toggle("show");
    logo.classList.toggle("hidden");
    hiddenul.classList.toggle("hidden");
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
    document.body.classList.toggle("denyscroll");
    if (barssrc.getAttribute("src") === "./images/bars-solid.svg" || barssrc.getAttribute("src") === "../images/bars-solid.svg") {
       (barssrc.getAttribute("src") === "./images/bars-solid.svg" ? barssrc.setAttribute("src", "./images/times-solid.svg"): barssrc.setAttribute("src", "../images/times-solid.svg"));
    } else {
        (barssrc.getAttribute("src") === "./images/times-solid.svg" ? barssrc.setAttribute("src", "./images/bars-solid.svg"): barssrc.setAttribute("src", "../images/bars-solid.svg"));

    }

})

