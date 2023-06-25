import {defineStore} from "pinia";
import {useAuthStore} from "@/stores/authStore.js";
import http from "@/httpcommon.js";

export const useNumberStore =  defineStore('number_store',{
    state: ()=>({
        numberList : {}
    }),
    actions:{
        async getNumber(){
             const {data}= await http.get(`getnumber`);
             this.numberList = data.data;
             return this.numberList;
        }
    }
})
