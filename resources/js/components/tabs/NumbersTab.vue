<template>
    <div class="tab-pane" id="pills-groups" role="tabpanel" aria-labelledby="pills-groups-tab">
        <div>
            <div class="p-4">
                <div class="user-chat-nav float-end">
                    <div  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create Number">
                        <button type="button" class="btn btn-link text-decoration-none text-muted font-size-18 py-0" data-bs-toggle="modal" data-bs-target="#addgroup-exampleModal">
                            <i class="mdi mdi-plus-circle me-1 ms-0"></i>
                        </button>
                    </div>
                </div>
                <h4 class="mb-4">My Numbers</h4>
                <div class="modal fade" id="addgroup-exampleModal" tabindex="-1" role="dialog" aria-labelledby="addgroup-exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-size-16" id="addgroup-exampleModalLabel">Create New Number</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body p-4">
                                <form @submit.prevent="numberInsert">
                                    <div class="mb-4">
                                        <label for="addgroupname-input" class="form-label">Gateway {{formData}}</label>
                                        <select class="form-select" aria-label="Default select example" v-model="formData.gateway_id">
                                            <option selected>Select Gateway</option>
                                            <option v-for="(list,index) in gateway" :key="index" :value="list.id">{{list.name}}</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="addgroupname-input" class="form-label">Number</label>
                                        <input type="text" class="form-control" id="number" placeholder="number" v-model="formData.number">
                                    </div>

                                    <button type="submit" class="btn btn-primary text-right">Create Number</button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End add group Modal -->
                <div class="search-box chat-search-box">
                    <div class="input-group rounded-3">
                            <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                <i class="ri-search-line search-icon font-size-18"></i>
                            </span>
                        <input type="text" class="form-control bg-light" placeholder="Search Number..." aria-label="Search groups..." aria-describedby="basic-addon1">
                    </div>
                </div> <!-- Search Box-->
            </div>

            <div class="p-4 chat-message-list chat-group-list" data-simplebar>
                <ul class="list-unstyled chat-list">
                    <li v-for="(list,index) in numberList" :key="index">
                        <a href="#">
                            <div class="d-flex align-items-center">
<!--                                <div class="chat-user-img me-3 ms-0">-->
<!--                                    <div class="avatar-xs">-->
<!--                                            <span class="avatar-title rounded-circle bg-primary-subtle text-primary">-->
<!--                                                G-->
<!--                                            </span>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="flex-grow-1 overflow-hidden" style="display: flex; ">
                                    <h5 class="text-truncate font-size-14 mb-0"># {{list.number}} <span class="mdi mdi-delete-circle"></span></h5>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import {onMounted, reactive, ref} from "vue";
import {useNumberStore} from "@/stores/numberStore.js";

const store = useNumberStore();
const gateway =  ref({});

const numberList =  ref();

const formData =  reactive({
    gateway_id: null,
    number: null
});

const numberInsert =  () => {
    console.log("form submitted")
    store.addNumber(formData);
}

onMounted(async ()=>{
    gateway.value = await store.getAllGateway();
    numberList.value = await store.numberList;
})
</script>

<style lang="scss" scoped>

</style>
