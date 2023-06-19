import {defineStore} from "pinia";

export const useStore = defineStore('main',{
        state: ()=>({
            isLogin: true,
            authToken: null,
            userData: null ,
            breadChrumb:{}
        })
});
