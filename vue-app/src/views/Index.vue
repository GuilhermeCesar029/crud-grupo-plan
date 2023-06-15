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
                    <tr>
                        <td>1</td>
                        <td>Geladeira Frost Free</td>
                        <td>Este produto é totalmente versátil.</td>
                        <td>220v</td>
                        <td>Electrolux</td>
                        <td>
                            <v-btn 
                                color="red"
                                icon
                                @click="remover(1)"
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
export default {
  data () {
    return {
      
    }
  },

   methods:{
       remover(id){
           console.log(id);
       }
   }
}
</script>

<style scoped>
</style>