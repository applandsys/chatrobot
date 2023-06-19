import {createRouter, createWebHistory} from "vue-router";
import LoginComponent from "@/components/LoginComponent.vue";
import SignupComponent from "@/components/SignupComponent.vue";

const routes =  [
    {
        path:'/',
        name: "login",
        component:LoginComponent,
    },
    {
        path:'/signup',
        name: "signup",
        component:SignupComponent,
    }
];

export default createRouter({
    history:createWebHistory('/'),
    routes
});
