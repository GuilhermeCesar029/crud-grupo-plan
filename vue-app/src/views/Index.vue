<template>
    <v-container>
        <h1>Eletrodomésticos</h1>
        <v-btn text to="/create">Cadastrar </v-btn>
        <div class="table">
            <v-simple-table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Tensão</th>
                        <th>Marca</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="eletro of eletrodomesticos" :key="eletro.id">
                        <td>{{eletro.id}}</td>
                        <td>{{eletro.nome}}</td>
                        <td>{{eletro.descricao}}.</td>
                        <td>{{eletro.tensao}}</td>
                        <td>{{eletro.marca}}</td>
                        <td>
                            <v-btn 
                                color="red"
                                icon
                                @click="remover(eletro)"
                            >
                                <v-icon>mdi-delete</v-icon>
                            </v-btn>  
                        </td>
                    </tr>
                </tbody>
            </v-simple-table>
        </div>
    </v-container>    
</template>

<script>
import Api from '../services/client';

export default {

  mounted(){
    this.listar()
  },

  data () {
    return {
        eletrodomesticos: [],
        eletrodomestico: {
          id: '',
          nome: '',
          descricao: '',
          tensao: '',
          marca: '',
        },
    }
  },

   methods:{
       listar(){
           Api.listar().then(resposta => {
               this.eletrodomesticos = resposta.data
           })
       },
       remover(id){
           console.log(id);
       }
   }
}
</script>

<style scoped>
</style>