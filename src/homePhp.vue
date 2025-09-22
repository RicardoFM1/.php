
<template>
    <div>
        <h1>Visualizar dados:</h1>
    </div>
    <div class="divGet">
        <h1 v-if="amostra">Puxar informações dos usuarios no sistema:</h1>
        <button @click="pegarDados">Pegar informações</button>
        <p></p>
        
    </div>
</template>


    <script setup>
    import { ref } from 'vue'

    const amostra = ref(true)
    const idade = ref("22")
    console.log(idade.value)

   
    const pegarDados = async () => {
        const res = await fetch("http://localhost:8080/usuarios",
         {headers: {'Accept': 'application/json'}}
        )
        const info = await res.json()
        console.log(info, "infoBackend")
    }
    
    </script>