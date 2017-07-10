<template>
    <section class="flex vertical start bg-white main-section" id="money">
        <h2 v-text="$t('wallet')"></h2>
        <div class="mw">
            <div class="flex between select">
                <form class="pos-r w48 m-auto">
                    <input :placeholder="$t('amount')" v-model="amount" @blur="twoDeciamls">
                    <i class="icn-pos fa fa-usd" aria-hidden="true"></i>
                </form>
                <div class="w48 m-auto">
                    <input class="m-auto p-none" :value="amountWithInterest" type="text" :placeholder="$t('interest')" disabled>
                </div>
            </div>
            <topup v-show="current == 'credit'" :user="user" :amount="amount"></topup>
            <!--<form class="vertical center" v-show="current == 'paypal'">-->
                <!--<input type="hidden" :value="amount">-->
                <!--<div class="w5">-->
                    <!--<input type="text" placeholder="PayPal Login" required>-->
                <!--</div>-->
                <!--<div class="w5">-->
                    <!--<input type="password" placeholder="Password" required>-->
                <!--</div>-->
                <!--<div>-->
                    <!--<button type="submit">Top Up</button>-->
                <!--</div>-->
            <!--</form>-->
            <!--<form class="vertical center" v-show="current == 'qiwi'">-->
                <!--<input type="hidden" :value="amount">-->
                <!--<div class="w5">  -->
                    <!--<input type="text" placeholder="Qiwi Login" required>-->
                <!--</div>-->
                <!--<div class="w5">-->
                    <!--<input type="password" placeholder="Password" required>-->
                <!--</div>-->
                <!--<div>-->
                    <!--<button type="submit">Top Up</button>-->
                <!--</div>-->
            <!--</form>-->
        </div>
    </section>
</template>

<script>
    import Dropdown from './Dropdown.vue';
    import Topup from './forms/TopUp.vue';

    export default {
        components: { Dropdown, Topup },
        props: ['user'],
        data() {
            return {
                visible: '<i class="fa fa-credit-card" aria-hidden="true"></i> Credit Card',
                current: 'credit',
                amount: ''
            }
        },
        computed: {
            amountWithInterest() {
                if (this.amount == '') return;
                return (this.amount * 1.2).toFixed(2);
            }
        },
        methods: {
            selectDropdown(option, event) {
                this.visible = event.currentTarget.innerHTML;
                this.current = option;
                return;
            },
            twoDeciamls() {
                if (this.amount == '') return;
                let temp = this.amount;
                temp = (temp * 1).toFixed(2);
                this.amount = temp;
                return;
            }
        }
    }
</script>