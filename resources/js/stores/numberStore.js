import {defineStore} from "pinia";
import {useAuthStore} from "@/stores/authStore.js";
import http from "@/httpcommon.js";


export const useNumberStore =  defineStore('number_store',{
    state: ()=>({
        numberList : {}
    }),
    actions:{
        async getNumber(){
             const authStore = useAuthStore();
             const token = authStore.authToken;
             const {data}= await http.get(`getnumber`,{ headers: {"Authorization" : `Bearer ${token}`} });
             this.numberList = data.data;
             return this.numberList;
        },
        async addNumber(){
            console.log("add nubmer");
        }
    }
})
