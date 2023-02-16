const loginUsername = document.querySelector("input[name=username]");
const loginPassword = document.querySelector("input[name=password]");
const loginButton = document.querySelector("button");
const loginForm = document.querySelector("form")

loginButton.addEventListener("click", (e) => {
    
    if(loginUsername.value === "detective" && loginPassword.value === "iyj7LKj") {
        window.location.href = "ingelogd.html";
    } else {
        window.location.href = "foutantwoord.html";
    }
});