<template>
    <section class="mw flex between user-info">
        <p>{{ first_name + ' ' + last_name }}</p>
        <p>{{ balance + '$'}}</p>
    </section>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                first_name: '',
                last_name: '',
                balance: ''
            }
        },
        created() {
            let temp = JSON.parse(this.user);

            this.first_name = temp.first_name;
            this.last_name = temp.last_name;
            this.balance = temp.balance;

            window.events.$on('increment', (argument) => {
                this.balance += parseFloat(argument);
            });

            window.events.$on('decrement', (argument) => {
                this.balance -= parseFloat(argument);
            });

            window.events.$on('profileUpdate', (argument) => {
                this.first_name = argument.first_name;
                this.last_name = argument.last_name;
            });
        }
    }
</script>