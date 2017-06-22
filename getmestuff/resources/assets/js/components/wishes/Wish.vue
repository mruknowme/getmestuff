<template>
    <div class="wish mw">
        <slot name="header"></slot>
        <div class="content">
            <div class="header">
                <h4 v-text="data.item"></h4>
                <a v-if="report" @click="reportWish" :class="{ disabled: this.wait }">Report</a>
                <p v-else v-text="when"></p>
            </div>
            <div class="progress">
                <p>Progress</p>
                <div class="progress-bar">
                    <div :style="{width: (current/needed * 100) + '%'}"></div>
                </div>
            </div>
            <div class="footer">
                <p :title="current + '/' + needed">
                    Collected: {{ current }}/{{ needed }}
                </p>
                <form v-if="displayForm">
                    <input type="number" name="amount" v-model="amount" required>
                    <button :disabled="this.wait" type="submit" class="pos-r" @click.prevent="donate">
                        <i v-show="buffering" class="fa fa-refresh fa-spin pos-a" aria-hidden="true"></i>
                        Donate
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    import moment from 'moment';

    export default {
        // props: ['data', 'wait'],
        props: {
            data: { required: true },
            wait: { default: false },
            report: { default: true },
            displayForm: { default: true }
        },
        data() {
            return {
                id: this.data.id,
                amount: '',
                current: this.data.current_amount,
                needed: this.data.amount_needed,
                buffering: false,
            }
        },
        computed: {
            when() {
                return moment(this.data.created_at).fromNow();
            }
        },
        methods: {
            donate() {
                this.$emit('disable');
                this.buffering = true;

                axios.patch('wish/'+this.id+'/donate', {
                    'amount': this.amount
                }).then(() => {
                    window.events.$emit('decrement', this.amount);
                    window.events.$emit('achievements', [this.amount, [1, 4]]);

                    this.current += parseFloat(this.amount);

                    this.$emit('donated', this.id);

                    flash(['Thank you for donating!']);
                })
                .catch((error) => {
                    let messages = [];
                    for (let key in error.response.data) {
                        messages.push(error.response.data[key][0]);
                    }
                    flash(messages, 'error');
                });
            },
            reportWish() {
                this.$emit('disable');

                axios.patch('wish/'+this.id+'/report')
                    .then(() => {
                        this.$emit('donated', this.id);
                        flash(['Wish has been reported!']);
                    })
                    .catch((error) => {
                        flash(['Something went wrong!'], 'error');
                    });
            }
        }
    }
</script>