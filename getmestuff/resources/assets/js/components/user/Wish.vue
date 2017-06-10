<template>
    <div class="wish wish-user mw">
        <h3>Your Current Wish</h3>
        <div class="content">
            <div class="header">
                <h4 v-text="item"></h4>
                <p v-text="when"></p>
            </div>
            <div class="progress">
                <p>Progress</p>
                <div class="progress-bar">
                    <div :style="{width: (current/needed * 100) + '%'}"></div>
                </div>
            </div>
            <div class="footer">
                <p>Collected: {{ current }}/{{ needed }}</p>
            </div>
        </div>
    </div>
</template>
<script>
    import moment from 'moment';

    export default {
        props: ['data'],
        data() {
            return {
                item: this.data.item,
                current: this.data.current_amount,
                needed: this.data.amount_needed,
            }
        },
        computed: {
            when() {
                return moment(this.data.created_at).fromNow();
            }
        }
    }
</script>