<template>
    <form class="vertical mw start">
        <div class="flex mw prize-option">
            <input type="radio" name="prize" class="radio" value="1" v-model="selected" checked>
            <div class="prize-info mw flex vertical start">
                <h4>Extra Wish</h4>
                <p>Increase your wishes amount by one (single use)</p>
                <p class="self-end">200 <i class="currency fa fa-trophy" aria-hidden="true"></i></p>
            </div>
        </div>
        <div class="flex mw prize-option">
            <input type="radio" name="prize" class="radio" value="2" v-model="selected">
            <div class="prize-info mw flex vertical start">
                <h4>Priority</h4>
                <p>Increase next wish's priority (single use)</p>
                <p class="self-end">300 <i class="currency fa fa-trophy" aria-hidden="true"></i></p>
            </div>
        </div>
        <div class="flex mw prize-option">
            <input type="radio" name="prize" class="radio" value="3" v-model="selected" :disabled="limit">
            <div class="prize-info vertical mw flex start" :class="{disable : limit}">
                <h4>Limit</h4>
                <p>Increase your wishes limit by one forever (single purchase) </p>
                <p class="self-end">1000 <i class="currency fa fa-trophy" aria-hidden="true"></i></p>
            </div>
        </div>
        <div class="mw flex quantity">
            <div>
                <p>Total: {{ price }} <i class="currency fa fa-trophy" aria-hidden="true"></i></p>
            </div>
            <div class="flex start form">
                <input @blur="setQuantity" name="quantity" type="text" value="1" v-model="quantity" :disabled="isLimit">
                <button :disabled="buffering" @click.prevent="redeemPoints">GO!</button>
            </div>
        </div>
    </form>
</template>
<script>
    export default {
        props: ['user'],
        data() {
            return {
                selected: "1",
                quantity: 1,
                limit: '',
                buffering: false
            }
        },
        computed: {
            price() {
                if (this.selected == 1) {
                    return 200 * this.quantity;
                } else if (this.selected == 2) {
                    return 300 * this.quantity;
                } else if (this.selected == 3) {
                    return 1000 * this.quantity;
                } else {
                    return 0;
                }
            },
            isLimit() {
                if (this.selected == 3) {
                    this.quantity = 1;
                    return true;
                } else {
                    return false;
                }
            }
        },
        methods: {
            setQuantity() {
                if (this.quantity == '' || this.quantity == 0) {
                    this.quantity = 1;
                }
            },
            redeemPoints() {
                this.buffering = true;
                axios.post('/home/achievements', {
                    'selected': this.selected,
                    'quantity': this.quantity
                })
                    .then(() => {
                        if (this.selected == 3) {
                            this.limit = true;
                        }
                        this.buffering = false;
                        flash(['All Done!']);
                        window.events.$emit('pointsDown', this.price);
                        if (this.selected == 1) {
                            window.events.$emit('moreWishes', this.quantity);
                        }
                    })
                    .catch((error) => {
                        this.buffering = false;
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
            if (this.user == 3) {
                this.limit = true;
            } else {
                this.limit = false;
            }
        }
    }
</script>