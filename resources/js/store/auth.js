import axios from 'axios'
import router from '@/router'
export default {
    namespaced: true,
    state:{
        authenticated:false,
        token: localStorage.getItem("token") || "",
        user:{}
    },
    getters:{
        authenticated(state){
            return state.authenticated
        },
        user(state){
            return state.user
        }
    },
    mutations:{
        SET_AUTHENTICATED (state, value) {
            state.authenticated = value
        },
        SET_USER (state, value) {
            state.user = value
        },
        SET_TOKEN (state, token){
            localStorage.setItem("auth", token);
            state.token = token;
        },

    },
    actions:{
        login({commit},uparam){
            return axios.post('/api/login',uparam).then(({data})=>{
                commit('SET_USER',data.user)
                commit('SET_TOKEN',data.token)
                commit('SET_AUTHENTICATED',true)
                router.push({name:'dashboard'})
            }).catch(({response:{data}})=>{
                commit('SET_USER',{})
                commit('SET_AUTHENTICATED',false)
            })
        },

        logout({commit}){
            commit('SET_USER',{})
            commit('SET_AUTHENTICATED',false)
        }
    }
}
