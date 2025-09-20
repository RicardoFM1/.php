
let counter = 0


const clickMe = document.getElementById("clickMe")
const counterDoc = document.getElementById("counter")
const body = document.getElementById("body")
const infosRes = document.getElementById("info-back")

clickMe.addEventListener("click", () => {
    counter++
    counterDoc.innerText = "Clicks: " + counter

})

const pegarDados = async() => {
    const res = await fetch("http://localhost:3001/usuarios",
     {Headers: {'Accept': 'application/json'}}
    )
    const info = await res.json()
    console.log(info)
    const infostring = info.email + " " + info.senha
   infosRes.innerText = infostring

}
document.addEventListener("DOMContentLoaded", () => {

    const p = document.createElement("p")
    p.innerText = "pAdicionado"
    body.appendChild(p)
    pegarDados()
})


