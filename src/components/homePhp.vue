<template>
  <div>
    <h1>Visualizar dados:</h1>
  </div>
  <div class="divGet">
    <h1 v-if="amostra">Puxar informações dos usuarios no sistema:</h1>
    <button type="button" class="btnGet" @click="pegarDados">
      Pegar informações
    </button>
    <p v-if="carregando">Carregando informações...</p>
    <table class="tabelaGet" v-if="mostrar">
      <thead class="tabelaHeader">
        <tr class="tabelaHeaderRow">
          <th>Id</th>
          <th>Email</th>
          <th>Senha</th>
        </tr>
      </thead>
      <tbody>
        <tr class="tabelaRow" v-for="usuario in usuarios" :key="usuario.id">
          <td>{{ usuario.id }}</td>
          <td>{{ usuario.email }}</td>
          <td>{{ usuario.senha }}</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="divPost">
    <h1>Adicionar informações:</h1>
    <button type="button" @click="openButton" class="btnPost">
      Abrir formulário
    </button>
    
    <div v-if="formOpen" class="divForm">
        
      <form method="POST" class="formPost" @submit.prevent="adicionarDados">
        <h1 class="tituloForm">Adicionar um novo usuário</h1>
        <div class="inputsForm">

            <div class="divEmailForm">
                
                <label for="email">Email:</label>
                <input
                class="inputForm"
                type="text"
                name="inputEmail"
            id="inputemail"
            placeholder="digite um email..."
            v-model="novoUsuario.email"
            />
        </div>
        
        <div class="divSenhaForm">
            
            <label for="senha">Senha:</label>
            <input
            class="inputForm"
            type="password"
            name="inputSenha"
            id="inputsenha"
            placeholder="digite uma senha"
            v-model="novoUsuario.senha"
            />
        </div>
    </div>
        <div class="divBtnsForm">
            <button
            v-if="formOpen"
            type="button"
            @click="fecharButton"
            class="btnFechar"
            >
            Fechar formulário
        </button>
        <button class="btnSubmit" type="submit">Adicionar usuario</button>
    </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import 'vue3-toastify/dist/index.css'
import { toast } from 'vue3-toastify'


const usuarios = ref([]);
const amostra = ref(true);
const idade = ref("22");
console.log(idade.value);
const mostrar = ref(false);
const carregando = ref(false);
const formOpen = ref(false);

const pegarDados = async () => {
  carregando.value = true;

  const res = await fetch("http://localhost:8080/usuarios", {
    headers: { Accept: "application/json" },
  });
  const info = await res.json();
  usuarios.value = info;
  console.log(info, "infoBackend");
  mostrar.value = true;
  carregando.value = false;
};

const openButton = () => {
  formOpen.value = true;
};

const fecharButton = () => {
  formOpen.value = false;
};

const novoUsuario = ref({
  email: "",
  senha: "",
});

const adicionarDados = async () => {
  try {
    const res = await fetch("http://localhost:8080/usuarios", {
      headers: { Accept: "application/json" },
      method: "POST",
      body: JSON.stringify(novoUsuario.value),
    });
    if (res.ok) {
      const data = await res.json();
      novoUsuario.value = data;
      toast.success(data || "Usuario adicionado com sucesso!", {autoClose: 3000})

      novoUsuario.value = { email: "", senha: "" };
      formOpen.value = false;
    } 
    else if (res.status === 409) {
        const data = await res.json();
        toast.error(data || "Email já cadastrado" , {autoClose: 3000})
    }
    else{
        const data = await res.json();
        toast.error(data || "Erro ao adicionar usuário", {autoClose: 3000})
    }

  } catch (err) {
    console.log(err);
  }
};
</script>

<style>
.btnGet,
.btnPost {
  border: none;
  background-color: rgba(27, 146, 214, 0.808);
  border-radius: 6px;
  cursor: pointer;
  padding: 8px;
  color: white;
  transition: all 0.5s ease;
}
.btnSubmit {
  border: none;
  background-color: rgba(17, 182, 17, 0.808);
  border-radius: 6px;
  cursor: pointer;
  padding: 8px;
  color: white;
  transition: all 0.5s ease;
  width: 50%;
}
.btnFechar {
  border: none;
  background-color: rgba(209, 27, 14, 0.808);
  border-radius: 6px;
  cursor: pointer;
  padding: 8px;
  color: white;
  transition: all 0.5s ease;
  width: 50%;
}
.btnGet:hover,
.btnPost:hover {
  background-color: rgba(20, 82, 117, 0.808);
}
.tabelaGet {
  margin: 10px 0 0 0;
  border-collapse: collapse;
  padding: 10px;
  width: 50%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}
.tabelaHeader {
  background-color: rgb(185, 185, 185);
}
.tabelaHeaderRow {
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  padding: 4px;
}
.tabelaHeaderRow th{
    min-width: 20%;
}
.tabelaRow {
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  background-color: rgb(165, 162, 162);
  padding: 4px;
  gap: 20px;
  border-bottom: 1px solid rgb(117, 117, 117);
}
.tabelaRow td {
  font-size: 18px;
  min-width: 20%;
}
.tabelaRow:hover {
  background-color: gray;
}
.divForm{
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;
    backdrop-filter: blur(5px);
}
.formPost{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: gray;
    min-width: 50%;
    min-height: 60%;
    border-radius: 10px;
    padding: 10px;
}
.tituloForm{
    color: white;
    text-align: center;
}
.inputsForm{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    gap: 10px;
}
.inputForm{
    font-size: 18px;
    width: 100%;
    border-radius: 10px;
    padding: 10px;
    border: none;
}
.divEmailForm, .divSenhaForm{
    font-size: 24px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    width: 50%;
}
  
.divBtnsForm{
    display: flex;
    justify-content: flex-end;
    gap: 20px;
}
</style>
