<template>
    <div class="dropdown" @click="toggle">
        <p id="menutitle" v-text="data"></p>
        <div id="paymentmethod" v-show="isVisible">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data'],
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