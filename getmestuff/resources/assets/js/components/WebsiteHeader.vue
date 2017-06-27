<script>
    export default {
        data() {
            return {
                show: false,
                position: '-150px',
                color: '#000',
                unreadNotifications: false,
                unreadCount: ''
            }
        },
        methods: {
            toggle() {
                if (this.show) {
                    this.position = '-150px';
                    this.color = 'black';
                    this.show = false;
                } else {
                    this.position = '0px';
                    this.color = '#FFF';
                    this.show = true;
                }
            },
            fetch(page) {
                axios.get('/unread').then(({data}) => {
                    this.unreadNotifications = (data.length > 0);
                    this.unreadCount = data.length;
                }).catch(() => {
                    return;
                });
            }
        }
    }
</script>