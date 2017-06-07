<template>
    <section class="flex vertical start bg-white main-section" id="money">
        <h2>Top Up Your Wallet</h2>
        <div class="mw">
            <div class="flex start select vertical">
                <div class="flex start mw">
                    <dropdown :visible="visible">
                        <a @click="selectDropdown('credit', $event)"><i class="fa fa-credit-card" aria-hidden="true"></i> Credit Card</a>
                        <a @click="selectDropdown('paypal', $event)"><i class="fa fa-paypal" aria-hidden="true"></i> PayPal</a>
                        <a @click="selectDropdown('qiwi', $event)"> <i class="fa fa-google-wallet" aria-hidden="true"></i> Qiwi</a>
                    </dropdown>
                    <form class="pos-r w45 m-auto">
                        <input placeholder="Amount" v-model="amount" @blur="twoDeciamls">
                        <i class="icn-pos fa fa-usd" aria-hidden="true"></i>
                    </form>
                </div>
                <input class="m-auto w95 p-none" :value="amountWithInterest" type="text" placeholder="Amount +20%" disabled>
            </div>
            <topup v-show="current == 'credit'" :user="user" :amount="amount"></topup>
            <form class="vertical center" v-show="current == 'paypal'">
                <input type="hidden" :value="amount">
                <div class="w5">
                    <input type="text" placeholder="PayPal Login" required>
                </div>
                <div class="w5">
                    <input type="password" placeholder="Password" required>
                </div>
                <div>
                    <button type="submit">Top Up</button>
                </div>
            </form>
            <form class="vertical center" v-show="current == 'qiwi'">
                <input type="hidden" :value="amount">
                <div class="w5">  
                    <input type="text" placeholder="Qiwi Login" required>
                </div>
                <div class="w5">
                    <input type="password" placeholder="Password" required>
                </div>
                <div>
                    <button type="submit">Top Up</button>
                </div>
            </form>
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