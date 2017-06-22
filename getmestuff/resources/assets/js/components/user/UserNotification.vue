<template>
    <div class="pos-r">
        <i class="fa" :class="{ 'fa-bell' : newCheck, 'fa-bell-o' : !newCheck }" aria-hidden="true" @click="toggle"></i>
        <div class="pos-a notification-wrapper" v-show="isActive">
            <notification :data="items" :date="date"></notification>
            <div class="view-all">
                <a class="mw" href="/notifications">View All</a>
            </div>
        </div>
    </div>
</template>
<script>
    import Notification from './Notification.vue';

    export default {
        components: { Notification },
        props: ['data'],
        data() {
            return {
                date: '',
                items: [],
                isActive: false,
                newCheck: ''
            }
        },
        created() {
            this.fetch();
            this.unreadNotifications();
        },
        methods: {
            fetch() {
                axios.get(this.url()).then(this.refresh);
            },
            url() {
                return '/unread';
            },
            refresh({data}) {
                this.date = data.date;
                this.items = data.notifications;
            },
            toggle() {
                if (this.newCheck) {
                    axios.get('/markasread').then(() => {
                        this.newCheck = false;
                    });
                }
                this.isActive = !this.isActive;
            },
            unreadNotifications() {
                if (this.data.length > 0) {
                    this.newCheck = true;
                } else {
                    this.newCheck = false;
                }
            }
        }
    }
</script>