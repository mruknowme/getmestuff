<template>
    <div class="notification bg-white mw flex vertical start">
        <h3 class="mw">{{ when }}</h3>

        <div class="notification-info mw" v-for="(item, key) in data">
            <h4>{{ key }} <i class="fa fa-check-circle" aria-hidden="true" v-if="'completed' in item"></i></h4>
            <p>Donated: {{ item['total'] }}$ by {{ item['count'] }} {{ item['count'] > 1 ? 'users' : 'user' }}.</p>
        </div>
    </div>
</template>
<script>
    import moment from 'moment';

    export default {
        props: ['data', 'date'],
        computed: {
            when() {
                let check = moment();
                let date = moment(this.date, "YY-MM-DD");
                if (check.diff(date, 'days') == 0) {
                    return 'Today';
                } else if (check.diff(date, 'days') == 1) {
                    return 'Yesterday'
                }
                return date.format('DD-MM-YYYY');
            }
        }
    }
</script>