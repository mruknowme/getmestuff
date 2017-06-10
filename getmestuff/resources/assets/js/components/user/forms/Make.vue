<template>
    <section class="flex vertical start bg-white main-section" id="wish">
        <h2>Make a Wish</h2>
        <form class="vertical center mw" data-parsley-validate>
            <div class="vertical mw center">
                <div class="mw pos-r">
                    <input type="text"
                           name="item"
                           v-model="item"
                           placeholder="What is Your Wish?"
                           required>
                </div>
                <div class="mw pos-r">
                    <input type="url"
                           data-parsley-trigger="change"
                           name="url"
                           v-model="url"
                           placeholder="Link to your desired product..."
                           required>
                </div>
            </div>
            <div class="flex between mw">
                <div class="w48 pos-r">
                    <input type="number"
                           name="current_amount"
                           v-model="current_amount"
                           placeholder="Current Amount"
                           required>
                </div>
                <div class="w48 pos-r">
                    <input type="number"
                           name="amount_needed"
                           v-model="amount_needed"
                           placeholder="Amount Needed"
                           required>
                </div>
            </div>
            <div class="mw divisor divisor-bg">
                <p><i class="fa fa-address-card-o" aria-hidden="true"></i><span>Please provide your full address:</span></p>
                <div class="mw pos-r">
                    <input type="text"
                           name="address_one"
                           v-model="address_one"
                           placeholder="Address 1"
                           required>
                </div>
                <div class="mw pos-r">
                    <input type="text"
                           name="address_two"
                           v-model="address_two"
                           placeholder="Address 2 (optional)">
                </div>
                <div class="mw flex between">
                    <div class="w3 pos-r">
                        <input type="text"
                               name="city"
                               v-model="city"
                               placeholder="City"
                               required>
                    </div>
                    <div class="w3 pos-r">
                        <input type="text"
                               name="post_code"
                               v-model="post_code"
                               placeholder="Post Code"
                               required>
                    </div>
                    <div class="w3 pos-r">
                        <input type="text"
                               name="country"
                               v-model="country"
                               placeholder="Country"
                               required>
                    </div>
                </div>
            </div>
            <div class="self-start">
                <button @click.prevent="postWish" type="submit">Make Your Wish</button>
            </div>
        </form>
    </section>
</template>
<script>
    import moment from 'moment';

    export default {
        props: ['user'],
        data() {
            return {
                item: '',
                url: '',
                current_amount: '',
                amount_needed: '',
                address_one: this.user.address.address_one,
                address_two: this.user.address.address_two,
                city: this.user.address.city,
                post_code: this.user.address.post_code,
                country: this.user.address.country
            }
        },
        methods: {
            postWish() {
                axios.post('/wishes', this.$data)
                    .then(() => {
                        window.events.$emit('newWish', {
                            'amount_needed': this.amount_needed,
                            'created_at': moment(),
                            'current_amount': this.current_amount,
                            'item': this.item
                        });

                        this.item = '';
                        this.url = '';
                        this.current_amount = '';
                        this.amount_needed = '';

                        flash(['Your wish has been published!']);
                    })
                    .catch((error) => {
//                        let messages = [];
//                        for (let key in error.response.data) {
//                            messages.push(error.response.data[key][0]);
//                        }
//                        flash(messages, 'error');
                        console.log(error);
                    });
            }
        }
    }
</script>