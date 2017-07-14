<template>
    <form class="mw flex around vertical">
        <div class="w95 topup-form" id="dropin-container"></div>
        <div class="w95 flex start topup-button">
            <button :disabled="buffering" type="submit">{{ $t('top-up') }}</button>
        </div>
    </form>
</template>
<script>
    export default {
        props: ['amount', 'user'],

        data() {
            return {
                buffering: false,
                token: ''
            }
        },

        created() {
            axios.get('/braintree/token')
                .then((response) => {
                    this.token = response.data.token;

                    braintree.setup(this.token, 'dropin', {
                        container: 'dropin-container',
                        onPaymentMethodReceived: (response) => {
                            this.buffering = true;

                            axios.post('/topup', {
                                value: this.amount,
                                braintreeNonce: response.nonce
                            }).then(() => {
                                window.events.$emit('increment', this.amount);
                                this.buffering = false;

                                let message = window.flashMessages[window.App.locale]['redeemed'];

                                flash([message]);
                            }).catch((error) => {
                                let messages = [];
                                for (let key in error.response.data) {
                                    messages.push(error.response.data[key][0]);
                                }
                                this.buffering = false;

                                flash(messages, 'error');
                            });
                        }
                    });
                });
        }
    }
</script>