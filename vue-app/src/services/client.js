import { http } from './config'

export default {

    listar:() => {
        return http.get('show')
    },

    salvar:(data) => {
        return http.post('create', data)
    },

    atualizar:(data) => {
        return http.put('update/'+ data.id, data)
    },

    apagar:(id) => {
        return http.delete('delete/'+ id)
    }
}