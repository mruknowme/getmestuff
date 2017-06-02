<template>
    <div class="w45 dropdown m-auto" @click="toggle">
        <a id="menutitle" v-html="this.visible"></a>
        <div id="paymentmethod" v-show="isVisible">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ 'visible' ],
        data() {
            return {
                isVisible: false
            }
        },
        methods: {
            toggle() {
                this.isVisible = !this.isVisible;
            }
        }
    }
</script>