import {defineStore} from "pinia";

export const useStore = defineStore('main',{
        state: ()=>({
            isLogin: false,
            authToken: localStorage.getItem('authToken'),
            userData: null ,
            breadChrumb:{}
        })
});
