<script>
    import Badge from '../Badge.vue';
    import Redeem from './Redeem.vue'

    import countTo from 'jquery-countto';

    export default {
        components: { Badge, Redeem },
        props: ['user'],
        data() {
            return {
                points: this.user.points,
                donated: this.user.amount_donated,
                expanded: false,
                currentText: 'Click here to redeem points for prizes'
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
            });

            window.events.$on('pointsDown', (amount) => {
                this.points -= parseFloat(amount);
            })
        },
        methods: {
            changeClass() {
                if (!this.expanded) {
                    this.expanded = true;
                    this.currentText = 'Click here to go back';
                } else {
                    this.expanded = false;
                    this.currentText = 'Click here to redeem points for prizes';
                }
            }
        }
    }
</script>