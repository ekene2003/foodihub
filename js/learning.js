

let pageSubtitle = document.querySelector(".page-subtitle");
let samplePage = document.querySelector("sample-page");

pageSubtitle.style.color = "blue"
samplePage.style.backgroundColor = "Yellow"
console.log(pageSubtitle.innerText)
pageSubtitle.innerText = "Muyiwa is a good boy"


let navMuyiwa = document.querySelector(".nav-muyiwa");
let navIconmm = document.querySelector(".nav-iconmm");

navIconmm.addEventListener("click",function(event){
    navMuyiwa.classList.toggle("nav-hidden")
});

alert('Hello muyiwa!');

document.write(4+6)