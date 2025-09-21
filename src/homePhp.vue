
<template>
    <div>
        <h1>Visualizar dados:</h1>
    </div>
    <div class="divGet">
        <h1>Puxar informações dos usuarios no sistema:</h1>
        <button >Pegar informações</button>
        
    </div>
</template>

<script>
export default {
    name: "HomePHP"
}
const pegarDados = async() => {
    const res = await fetch("http://localhost:8080/usuarios",
     {Headers: {'Accept': 'application/json'}}
    )
    const info = await res.json()
    console.log(info)
    const infostring = info.email + " " + info.senha
   infosRes.innerText = infostring

}
</script>