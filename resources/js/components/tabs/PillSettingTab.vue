<template>
    <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
        <div>
            <div class="px-4 pt-4">
                <h4 class="mb-0">Settings</h4>
            </div>
            <div class="text-center border-bottom p-4">
                <div class="mb-4 profile-user">
                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="">
                    <button type="button" class="btn btn-light bg-light avatar-xs p-0 rounded-circle profile-photo-edit">
                        <i class="ri-pencil-fill"></i>
                    </button>
                </div>
                <h5 class="font-size-16 mb-1 text-truncate">Patricia Smith</h5>
                <div class="dropdown d-inline-block mb-1">
                    <a class="text-muted dropdown-toggle pb-1 d-block" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Available <i class="mdi mdi-chevron-down"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Available</a>
                        <a class="dropdown-item" href="#">Busy</a>
                    </div>
                </div>
            </div>

            <div class="p-4 user-profile-desc" data-simplebar>
                <div id="settingprofile" class="accordion">
                    <div class="accordion-item card border mb-2">
                        <div class="accordion-header" id="personalinfo1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalinfo" aria-expanded="true" aria-controls="personalinfo">
                                <h5 class="font-size-14 m-0">API Info</h5>
                            </button>
                        </div>
                        <div id="personalinfo" class="accordion-collapse collapse show" aria-labelledby="personalinfo1" data-bs-parent="#settingprofile">
                            <div class="accordion-body">
                                API setting form..
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item card border mb-2">
                        <div class="accordion-header" id="security1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#security" aria-expanded="false" aria-controls="security">
                                <h5 class="font-size-14 m-0"> Security</h5>
                            </button>
                        </div>
                        <div id="security" class="accordion-collapse collapse" aria-labelledby="security1" data-bs-parent="#settingprofile">
                            <div class="accordion-body">
                              Update Password Form ?
                            </div>
                        </div>
                    </div>
                    <!-- end security card -->

                    <div class="accordion-item card border mb-2">
                        <div class="accordion-header" id="help1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h5 class="font-size-14 m-0">Help</h5>
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="help1" data-bs-parent="#settingprofile">
                            <div class="accordion-body">
                                    How to use this app?
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end profile-setting-accordion -->
            </div>
            <!-- End User profile description -->
        </div>
        <!-- Start Settings content -->
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
