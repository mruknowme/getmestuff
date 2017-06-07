<template>
    <div class="alert" :class="classType" v-show="show">
        <span><strong>{{ type }}!</strong> {{ body }}</span>
    </div>
</template>

<script>
    export default {
        props: ['message', 'error'],
        data() {
            return {
                type: 'Success',
                body: '',
                show: false,
                classType: 'success'
            }
        },
        created() {
            if (this.message) {
                this.flash(this.message, 'success');
            } else if (this.error) {
                this.flash(this.error, 'error');
            }

            window.events.$on('flash', ([message, type]) => this.flash(message, type));
        },
        methods: {
            flash(message, type = 'success') {
                this.body = message;
                this.classType = type;
                this.type = this.capitalize(type);
                this.show = true;

                this.hide();
            },
            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 3000);
            },
            capitalize(str) {
                return str[0].toUpperCase() + str.slice(1).toLowerCase();
            }
        }
    };
</script>