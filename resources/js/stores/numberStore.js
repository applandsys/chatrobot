import {defineStore} from "pinia";
import {useAuthStore} from "@/stores/authStore.js";
import http from "@/httpcommon.js";


export const useNumberStore =  defineStore('number_store',{
    state: ()=>({
        numberList : {},
        gatewayList : {},
        selectedNumber:0,
        leadList:{},
        selectedLead:null
    }),
    getters:{
        selectedNumberDetail: (state) => { return state?.numberList[state?.selectedNumber]}, // use less
        selectedLeadDetail: (state) => { return state?.leadList[state?.selectedLead]}
    },
    actions:{
        async getNumber(){
             const authStore = useAuthStore();
             const token = authStore.authToken;
             const {data}= await http.get(`getnumber`,{ headers: {"Authorization" : `Bearer ${token}`} });
             this.numberList = data.data;
             return this.numberList;
        },
        async addNumber(payload){
            const authStore = useAuthStore();
            const token = authStore.authToken;
            const {data}= await http.post(`add-number`,payload,{ headers: {"Authorization" : `Bearer ${token}`} });
            console.log(data);
        },
        async getAllGateway(){
            const authStore = useAuthStore();
            const token = authStore.authToken;
            const {data}= await http.get(`get-all-gateway`,{ headers: {"Authorization" : `Bearer ${token}`} });
            this.gatewayList = data.data;
            return this.gatewayList;
        }
    }
})
