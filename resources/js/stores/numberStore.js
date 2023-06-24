import {defineStore} from "pinia";
import {useAuthStore} from "@/stores/authStore.js";

export const useNumberStore =  defineStore('number_store',{
    state: ()=>({
        numberList : {
            id:1,
            number:'0255555'
        }
    }),
    actions:{
        async getNumber(){
            const store = useAuthStore();
            const token = await store.authToken;
            console.log("token",token);
        }
    }
})
