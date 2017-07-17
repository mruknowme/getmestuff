<template>
    <div>
        <div class="forgot-form pos-a" v-show="visible">
            <div class="pos-a arrow"></div>
            <div class="mw pas-wrapper flex center">
                <form class="mw flex vertical nc-between" v-show="!isSent" autocomplete="off">
                    <label v-text="$t('your-email')"></label>
                    <div class="flex start">
                        <input id="email" name="email" type="email" v-model="email" required>
                        <button class="pos-r" :disabled="buffering" @click.prevent="sendData" type="submit">
                            <i v-show="buffering" class="fa fa-refresh fa-spin pos-a" aria-hidden="true"></i>
                            OK
                        </button>
                    </div>
                </form>
                <div class="done flex vertical center" v-show="isSent">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <p v-text="$t('check-inbox')"></p>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</template>
<script>
    export default {
        props: ['visible', 'route'],
        data() {
            return {
                email: '',
                isSent: false,
                buffering: false
            }
        },
        methods: {
            sendData() {
                this.buffering = true;
                axios.post(this.route, {
                    email: this.email
                }).then(() => {
                    this.buffering = false;
                    this.isSent = true;
                }).catch((error) => {
                    this.buffering = false;
                    let messages = [];
                    for (let key in error.response.data) {
                        messages.push(error.response.data[key]);
                    }

                    this.buffering = false;
                    flash(messages, 'error');
                });
            }
        }
    }
</script>