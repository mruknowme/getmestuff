<template>
    <section class="flex vertical start bg-white main-section" id="wish" v-if="allowed == 1">
        <div class="flex between mw">
             <div class="flex center wish-title">
                <h2>Make a Wish</h2>
                <span v-text="number_of_wishes"></span>
            </div>
            <div class="priority" v-if="priority > 0">
                <p>This wish's priority will be higher.</p>
            </div>
        </div>
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
                           placeholder="Current Amount (default: 0)"
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
                <button :disabled="buffering" @click.prevent="postWish" type="submit">
                    <i v-show="buffering" class="fa fa-refresh fa-spin pos-a fa-lg" aria-hidden="true"></i>
                    Make Your Wish
                </button>
            </div>
        </form>
    </section>
    <section class="flex center bg-white main-section" v-else>
        <p>Looks like you haven't donated yet. Please donate and come back to make your wish.</p>
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
                address_one: (this.user.address != null) ? this.user.address.address_one : '',
                address_two: (this.user.address != null) ? this.user.address.address_two : '',
                city: (this.user.address != null) ? this.user.address.city : '',
                post_code: (this.user.address != null) ? this.user.address.post_code : '',
                country: (this.user.address != null) ? this.user.address.country : '',
                allowed: this.user.donated,
                number_of_wishes: this.user.number_of_wishes,
                buffering: false,
                priority: this.user.priority
            }
        },
        methods: {
            postWish() {
                this.buffering = true;
                axios.post('/wishes', this.$data)
                    .then(() => {
                        window.events.$emit('newWish', {
                            'amount_needed': this.amount_needed,
                            'created_at': moment(),
                            'current_amount': (this.current_amount == '') ? 0 : this.current_amount,
                            'item': this.item
                        });

                        this.item = '';
                        this.url = '';
                        this.current_amount = '';
                        this.amount_needed = '';
                        this.number_of_wishes--;

                        if (this.priority > 0) {
                            this.priority--;
                        }

                        this.buffering = false;
                        flash(['Your wish has been published!']);
                    })
                    .catch((error) => {
                        let messages = [];
                        for (let key in error.response.data) {
                            messages.push(error.response.data[key][0]);
                        }

                        this.buffering = false;
                        flash(messages, 'error');
                    });
            }
        },
        created() {
            window.events.$on('decrement', () => {
                this.allowed = 1;
            });
            window.events.$on('moreWishes', (quantity) => {
                this.number_of_wishes += parseFloat(quantity);
            })
        }
    }
</script>