<script>
    import VueSidebarMenuAkahon from "vue-sidebar-menu-akahon";


    export default {
        components: {VueSidebarMenuAkahon},
        mounted() {
            console.log('Component mounted.')  
        }
    }
</script>
<template>
    <layout>
        <div class="row">
            <div class="col-4">
                <b-sidebar id="sidebar-variant" title="TCG CARD" bg-variant="dark" text-variant="light" shadow :visible="true" :no-header-close="true">
                    <div class="px-3 py-2">
                        <div v-for="i in 25" :key="i">
                        <h3>ediciones</h3>
                        </div>
                    </div>
                </b-sidebar>
            </div>
            <div class="col-8">
                <a href="/dashboard">ir al dashboard</a>
            </div>
        </div>
    </layout>
</template>


