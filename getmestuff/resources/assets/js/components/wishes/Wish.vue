<template>
    <div class="wish mw">
        <div class="content">
            <div class="header">
                <h4 v-text="data.item"></h4>
                <p v-text="date"></p>
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
                <form>
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
        props: ['data', 'wait'],
        data() {
            return {
                id: this.data.id,
                amount: '',
                current: this.data.current_amount,
                needed: this.data.amount_needed,
                date: '',
                buffering: false
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
                    'amount': this.amount})
                    .then(() => {
                        window.events.$emit('decrement', this.amount);

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
            }
        }
    }
</script>