import {defineStore} from "pinia";

export const useStore = defineStore('main',{
        state: ()=>({
            isLogin: false,
            authToken: null,
            userData: null ,
            breadChrumb:{}
        })
});
