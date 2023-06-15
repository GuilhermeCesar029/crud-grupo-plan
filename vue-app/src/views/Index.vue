<template>
    <v-container>
        <h1>Eletrodomésticos</h1>
        <div class="table">
            <v-simple-table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Tensão</th>
                        <th>Marca</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Geladeira Frost Free</td>
                        <td>Este produto é totalmente versátil.</td>
                        <td>220v</td>
                        <td>Electrolux</td>
                        <td></td>
                    </tr>
                </tbody>
            </v-simple-table>
        </div>
    </v-container>    
</template>

<script>
export default {
  name: 'Index',
  data () {
    return {
      
    }
  }
}
</script>

<style scoped>
    .table{
        
    }
</style>