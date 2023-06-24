<template>
    <div class="layout-wrapper d-lg-flex">
    <sidemenu-component/>
        <div class="chat-leftsidebar me-lg-1 ms-lg-0">
            <div class="tab-content">
                <pill-user-tab/>
                <pill-chat-tab/>
                <pill-group-tab/>
<!--                <pill-contact-tab/>-->
                <pill-setting-tab/>
            </div>
        </div>
    <chatbox-component/>
    </div>
</template>

<script setup>

import SidemenuComponent from "@/components/SidemenuComponent.vue";
import ChatboxComponent from "@/components/ChatboxComponent.vue";
import PillUserTab from "@/components/tabs/PillUserTab.vue";
import PillChatTab from "@/components/tabs/PillChatTab.vue";
import PillContactTab from "@/components/tabs/PillContactTab.vue";
import PillGroupTab from "@/components/tabs/PillGroupTab.vue";
import PillSettingTab from "@/components/tabs/PillSettingTab.vue";
</script>

<style lang="scss" scoped>

</style>
