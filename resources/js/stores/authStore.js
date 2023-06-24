import {defineStore} from "pinia";
import http from "@/httpcommon.js";

export const useAuthStore = defineStore('main',{
        state: ()=>({
            isLogin:  parseInt(localStorage.getItem("isLogin")),
            authToken: localStorage.getItem('authToken'),
            userData: null
        }),
        actions:{
            authenticate(payload){
                return http.post(`login`,payload,{ headers: {"Accept" : "application/json"} });
            },
            logOut(){
                localStorage.removeItem("isLogin");
                localStorage.removeItem("authToken");
            }
        }
});
