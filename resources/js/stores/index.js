import {defineStore} from "pinia";

export const useStore = defineStore('main',{
        state: ()=>({
            isLogin:  parseInt(localStorage.getItem("isLogin")),
            authToken: localStorage.getItem('authToken'),
            userData: null ,
            breadChrumb:{}
        })
});
