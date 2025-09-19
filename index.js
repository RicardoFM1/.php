
let counter = 0

const clickMe = document.getElementById("clickMe")
const counterDoc = document.getElementById("counter")
const body = document.getElementById("body")

clickMe.addEventListener("click", () => {
    counter++
    counterDoc.innerText = "Clicks: " + counter
})

document.addEventListener("DOMContentLoaded", () => {

    const p = document.createElement("p")
    p.innerText = "pAdicionado"
    body.appendChild(p)
})