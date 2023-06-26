<template>
    <div class="tab-pane fade show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
        <div>
            <div class="px-4 pt-4">
                <h4 class="mb-4">Chats</h4>
                <div class="search-box chat-search-box">
                    <div class="input-group mb-3 rounded-3">
                            <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                <i class="ri-search-line search-icon font-size-18"></i>
                            </span>
                        <input type="text" class="form-control bg-light" placeholder="Search Number" aria-label="Search Number" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="">
                <h5 class="mb-3 px-3 font-size-16">Recent</h5>
                <div class="chat-message-list px-2" data-simplebar>
                    <ul class="list-unstyled chat-list chat-user-list">
                        <li v-for="(list,index) in numberList" :key="index" :class="{'active': store.selectedNumber==index}" @click="selectNumber(index)">
                            <a href="#">
                                <div class="d-flex">
                                    <div class="chat-user-img online align-self-center me-3 ms-0">
                                        <img src="assets/images/users/avatar_default.webp" class="rounded-circle avatar-xs" alt="">
                                        <span class="user-status"></span>
                                    </div>

                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-15 mb-1">{{list.number}}</h5>
                                        <p class="chat-user-message text-truncate mb-0">Hey! there I'm available</p>
                                    </div>
                                    <div class="font-size-11">05 min</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {useNumberStore} from "@/stores/numberStore.js";
import { onMounted, ref} from "vue";

const store = useNumberStore();
const numberList =  ref({});
const selectNumber = (index)=>{
    store.selectedNumber = index;
}

onMounted(async ()=>{
     const myList = await store.getNumber();
     numberList.value = myList;
})
</script>

<style lang="scss" scoped>

</style>
