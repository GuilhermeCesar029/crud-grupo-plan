<template>
    <v-container>
    <form @submit.prevent="submit">
        <v-row>
            <v-col
            cols="12"
            md="4"
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
            md="4"
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
            md="4"
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
            md="4"
            >
            <v-text-field
                v-model="eletrodomestico.marca"
                label="Marca"
                required
            ></v-text-field>
            </v-col>
        </v-row>
        <v-row>
            <v-btn
                class="mr-4"
                @click="submit"
            >
                Cadrastrar
            </v-btn>
        </v-row>
    </form>
  </v-container>
</template>

<script>
import Api from '../services/client';

export default {
    data () {
      return {
        eletrodomestico: {
          id: '',
          nome: '',
          descricao: '',
          tensao: '',
          marca: '',
        },
      }
  },

    methods: {
        submit() {
            Api.salvar(this.eletrodomestico).then(resposta => {
                alert('Cadastrado com sucesso!')
                this.eletrodomestico = resposta
                this.$router.push({name: 'Index'})
            })
        }

        
    }
    
}
</script>

<style>

</style>