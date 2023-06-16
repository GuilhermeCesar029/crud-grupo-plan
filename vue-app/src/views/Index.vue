<template>
    <v-container>
        <h1>Eletrodomésticos</h1>
        
            <v-dialog
                v-model="dialogSubmit"
                persistent
                max-width="600px"
            >
                <template v-slot:activator="{ on, attrs }">
                    <v-btn                    
                        v-bind="attrs"
                        v-on="on"                            
                        icon
                        color="primary"
                    >
                    Cadastrar
                    </v-btn>
                </template>

                <v-card>
                    <form>
                        <v-card-title>
                            <span class="headline">Cadastrar</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col
                                    cols="12"
                                    md="12"
                                    >
                                    <v-text-field
                                        v-model="eletrodomestico.nome"
                                        label="Nome"
                                        required
                                    ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col
                                    cols="12"
                                    md="12"
                                    >
                                    <v-text-field
                                        v-model="eletrodomestico.descricao"
                                        label="Descrição"
                                        required
                                    ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col
                                    cols="12"
                                    md="12"
                                    >
                                    <v-text-field
                                        v-model="eletrodomestico.tensao"
                                        label="Tensão"
                                        required
                                    ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col
                                    cols="12"
                                    md="12"
                                    >
                                    <v-text-field
                                        v-model="eletrodomestico.marca"
                                        label="Marca"
                                        required
                                    ></v-text-field>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                color="blue darken-1"
                                text
                                @click="dialogSubmit=false"
                            >
                                Fechar
                            </v-btn>
                            <v-btn
                                class="mr-4"
                                @click="submit"
                            >
                                CADASTRAR
                            </v-btn>
                        </v-card-actions>
                    </form> 
                </v-card>
            </v-dialog>


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
                        <td>{{eletro.descricao}}</td>
                        <td>{{eletro.tensao}}</td>
                        <td>{{eletro.marca}}</td>
                        <td>
                            <v-btn 
                                color="red"
                                icon
                                @click="remover(eletro.id)"
                            >
                                <v-icon>mdi-delete</v-icon>
                            </v-btn>  

                            <v-dialog
                                v-model="dialog"
                                persistent
                                max-width="600px"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-btn
                                        @click="editar(eletro)"                      
                                        v-bind="attrs"
                                        v-on="on"                            
                                        icon
                                        color="primary"
                                    >
                                    <v-icon>mdi-pencil</v-icon>
                                    </v-btn>
                                </template>

                                <v-card>
                                    <form>
                                        <v-card-title>
                                            <span class="headline">Atualizar</span>
                                        </v-card-title>
                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col
                                                    cols="12"
                                                    md="12"
                                                    >
                                                    <v-text-field
                                                        v-model="eletrodomestico.nome"
                                                        label="Nome"
                                                        required
                                                    ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                                <v-row>
                                                    <v-col
                                                    cols="12"
                                                    md="12"
                                                    >
                                                    <v-text-field
                                                        v-model="eletrodomestico.descricao"
                                                        label="Descrição"
                                                        required
                                                    ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                                <v-row>
                                                    <v-col
                                                    cols="12"
                                                    md="12"
                                                    >
                                                    <v-text-field
                                                        v-model="eletrodomestico.tensao"
                                                        label="Tensão"
                                                        required
                                                    ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                                <v-row>
                                                    <v-col
                                                    cols="12"
                                                    md="12"
                                                    >
                                                    <v-text-field
                                                        v-model="eletrodomestico.marca"
                                                        label="Marca"
                                                        required
                                                    ></v-text-field>
                                                    </v-col>
                                                </v-row>
                                            </v-container>
                                        </v-card-text>
                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn
                                                color="blue darken-1"
                                                text
                                                @click="dialog = false"
                                            >
                                                Fechar
                                            </v-btn>
                                            <v-btn
                                                class="mr-4"
                                                @click="atualizar"
                                            >
                                                ATUALIZAR
                                            </v-btn>
                                        </v-card-actions>
                                    </form> 
                                </v-card>
                            </v-dialog>
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
        dialog: false,
        dialogSubmit: false
    }
  },

   methods:{
        listar(){
           Api.listar().then(resposta => {
               this.eletrodomesticos = resposta.data
           })
        },

        submit() {
            Api.salvar(this.eletrodomestico).then(resposta => {
                alert('Cadastrado com sucesso!')
                this.eletrodomestico = resposta
                this.dialogSubmit = false
                this.listar();
            })
        },
        editar(data){
            this.eletrodomestico = data
        },

        atualizar(){
            Api.atualizar(this.eletrodomestico).then(resposta => {
                this.eletrodomestico = resposta
                this.dialog = false
            })
        },
        remover(id){
           if(confirm('Deseja excluir a consulta?')){
                Api.apagar(id).then(resposta => {
                    this.eletrodomesticos = resposta
                    this.listar();
                })
           }
           
        }
   }
}
</script>

<style scoped>
</style>