<script setup>
import {useAuthStore} from "@/stores/authStore.js";
import AuthComponent from "@/components/AuthComponent.vue";
import DashboardComponent from "@/components/DashboardComponent.vue";

const store = useAuthStore();

console.log(store.isLogin);
</script>
<template>
    <div v-if="store.isLogin">
       <DashboardComponent/>
    </div>
    <div v-else>
        <AuthComponent/>
    </div>
</template>
