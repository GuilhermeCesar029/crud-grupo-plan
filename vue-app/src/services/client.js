import { http } from './config'

export default {

    listar:() => {
        return http.get('show')
    },

    salvar:(data) => {
        return http.post('create', data)
    },

    atualizar:(data) => {
        return http.put("update/"+ data.id, data)
    },

    apagar:(data) => {
        return http.delete("delete/"+ data.id, data)
    }
}