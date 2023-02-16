const voornaam = document.querySelector("input[name=voornaam]");
const achternaam = document.querySelector("input[name=achternaam]");
const naamButton = document.querySelector("button");
const naamForm = document.querySelector("form")

naamButton.addEventListener("click", (e) => {
    
    if(voornaam.value === "frank" && achternaam.value === "doedels") {
        window.location.href = "klaar.html";
    } else {
        window.location.href = "fout.html";
    }
});