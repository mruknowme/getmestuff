<template>
    <div class="mw">
        <ul class="tabs">
            <li v-for="tab in tabs" 
                :class="{ 'active' : tab.isActive }"
                @click="selectTab(tab)"
                v-html="tab.name"> 
            </li>
        </ul>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: ['url'],
        data() {
            return {
                tabs: []
            }
        },
        methods: {
            selectTab(selectedTab) {
                this.tabs.forEach(tab => {
                    tab.isActive = (tab.name == selectedTab.name);
                });
            }
        },
        created() {
            this.tabs = this.$children;
        }
    }
</script>