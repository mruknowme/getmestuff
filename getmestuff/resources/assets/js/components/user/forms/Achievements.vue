<script>
    import Badge from '../Badge.vue'
    import countTo from 'jquery-countto'

    export default {
        components: { Badge },
        props: ['user'],
        data() {
            return {
                points: this.user.points,
                donated: this.user.amount_donated
            }
        },
        created() {
            window.events.$on('achievements', (amount) => {
                setTimeout(() => {
                    $('#points-number').countTo({
                        from: this.points,
                        to: this.points + window.totalprize
                    });

                    $('#amount-donated').countTo({
                        from: this.donated,
                        to: this.donated + parseFloat(amount)
                    })
                }, 1);
                setTimeout(() => {
                    this.points += window.totalprize;
                    window.totalprize = 0;
                    this.donated += parseFloat(amount);
                }, 100);
            })
        }
    }
</script>