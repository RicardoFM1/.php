
let counter = 0


const clickMe = document.getElementById("clickMe")
const counterDoc = document.getElementById("counter")
const body = document.getElementById("body")

clickMe.addEventListener("click", () => {
    counter++
    counterDoc.innerText = "Clicks: " + counter

})

const pegarDados = async() => {
    const res = await fetch("http://localhost:3001/usuarios")
    console.log(res.data)
}
document.addEventListener("DOMContentLoaded", () => {

    const p = document.createElement("p")
    p.innerText = "pAdicionado"
    body.appendChild(p)
    pegarDados()
})


