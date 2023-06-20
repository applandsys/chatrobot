<template>
    <div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center mb-4">
                            <router-link to="/" class="auth-logo mb-5 d-block">
                                <img src="assets/images/logo-dark.png" alt="" height="30" class="logo logo-dark">
                                <img src="assets/images/logo-light.png" alt="" height="30" class="logo logo-light">
                            </router-link>
                            <h4>Sign in {{ store.isLogin}}</h4>
                            <p class="text-muted mb-4">Sign in to continue to Chat Robot.</p>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form @submit.prevent="handleSignin()">
                                        <div class="mb-3">
                                            <label class="form-label">User Email</label>
                                            <div class="input-group mb-3 bg-light-subtle rounded-3">
                                                <span class="input-group-text text-muted" id="basic-addon3">
                                                    <i class="ri-user-2-line"></i>
                                                </span>
                                                <input v-model="formData.email" type="text" class="form-control form-control-lg border-light bg-light-subtle" placeholder="Enter Username" aria-label="Enter Username" aria-describedby="basic-addon3">
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="float-end">
                                                <router-link to="/" class="text-muted font-size-13">Forgot password?</router-link>
                                            </div>
                                            <label class="form-label">Password</label>
                                            <div class="input-group mb-3 bg-light-subtle rounded-3">
                                                <span class="input-group-text text-muted" id="basic-addon4">
                                                    <i class="ri-lock-2-line"></i>
                                                </span>
                                                <input v-model="formData.password"  type="password" class="form-control form-control-lg border-light bg-light-subtle" placeholder="Enter Password" aria-label="Enter Password" aria-describedby="basic-addon4">

                                            </div>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input type="checkbox" class="form-check-input" id="remember-check">
                                            <label class="form-check-label" for="remember-check">Remember me</label>
                                        </div>

                                        <div class="d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Sign in</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <router-link to="/signup" class="fw-medium text-primary"> Signup now </router-link> </p>
                            <p>© 2023. Crafted with <i class="mdi mdi-heart text-danger"></i> by SoilApps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {reactive} from "vue"
import {useStore} from "@/stores/index.js";
import AuthenticationService from "@/services/AuthenticationService.js";

const store = useStore();
const formData = reactive({email:'',password: ''});

const handleSignin = async ()=>{
    const payload= await AuthenticationService.authenticate(formData);
    console.log(payload.data.data)
   if(payload.data.data.token){
       store.userData = payload.data.data.user_data;
       store.authToken = payload.data.data.token;
       store.isLogin = true;
       localStorage.setItem("authToken", payload.data.token);
   }

}
</script>

<style lang="scss" scoped>

</style>
