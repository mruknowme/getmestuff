<script>
    export default {
        data() {
            return {
                show: false,
                position: '-150px',
                color: '#000'
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
            }
        }
    }
</script>