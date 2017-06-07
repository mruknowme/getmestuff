<template>
    <form class="mw flex around vertical">
        <input type="hidden" name="amount" :value="amount" required>
        <button type="submit" @click.prevent="topup">Top Up</button>
    </form>
</template>
<script>
    export default {
        props: ['amount', 'user'],

        data() {
            return {
                stripeEmail: '',
                stripeToken: '',
                value: ''
            }
        },

        created() {
            this.stripe = StripeCheckout.configure({
                key: GetMeStuff.stripeKey,
                image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                locale: 'auto',
                panelLabel: 'Top up',
                email: this.user,
                token: (token) => {
                    this.stripeToken = token.id;
                    this.stripeEmail = token.email;
                    this.value = this.amount;

                    axios.post('/topup', this.$data)
                        .then(() => {
                            window.events.$emit('increment', this.amount);

                            flash('All done!');
                        })
                        .catch(() => {
                            flash('Your card was declined', 'error');
                        });
                }
            });
        },

        methods: {
            topup() {
                this.stripe.open({
                    name: 'Wallet',
                    description: 'Top up your wallet',
                    zipCode: true,
                });
            }
        }
    }
</script>