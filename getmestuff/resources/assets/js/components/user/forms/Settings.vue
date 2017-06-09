<template>
    <section class="flex vertical start bg-white main-section" id="settings">
        <h2>Edit Profile</h2>
        <form class="mw vertical center" action="/home/update" method="POST" data-parsley-validate>
            <div class="mw">
                <div class="mw pos-r">
                    <input type="text"
                           id="first_name"
                           name="first_name"
                           placeholder="Your Name"
                           v-model="first_name"
                           autocomplete="off">
                </div>
                <div class="mw pos-r">
                    <input type="text"
                           id="last_name"
                           name="last_name"
                           placeholder="Your Last Name"
                           v-model="last_name"
                           autocomplete="off">
                </div>
                <div class="mw pos-r">
                    <input data-parsley-trigger="change"
                           type="email"
                           id="email"
                           name="email"
                           placeholder="Your Email"
                           v-model="email"
                           autocomplete="off">
                </div>
                <div class="mw pos-r">
                    <input data-parsley-trigger="change"
                           minlength="1"
                           type="password"
                           id="password"
                           name="password"
                           v-model="password"
                           placeholder="Edit Password">
                </div>
            </div>
            <div class="divisor divisor-bg mw">
                <p><i class="fa fa-key" aria-hidden="true"></i><span>Please enter your current password to confirm changes:</span></p>
                <div class="mw pos-r">
                    <input type="password"
                           id="current_password"
                           name="current_password"
                           placeholder="Your Current Password"
                           v-model="current_password"
                           autocomplete="off" required>
                </div>
            </div>
            <div class="self-start">
                <button @click.prevent="updateSettings" type="submit">Save Changes</button>
            </div>
        </form>
    </section>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                first_name: this.user.first_name,
                last_name: this.user.last_name,
                email: this.user.email,
                password: '',
                current_password: ''
            }
        },
        methods: {
            updateSettings() {
                axios.patch('/home/update', this.$data)
                    .then(() => {
                        this.password = '';
                        this.current_password = '';

                        let messages = ['Profile updated.'];

                        if ((this.email != this.user.email) && (this.email != '')) {
                            this.email = this.user.email;
                            messages.push('Please verify your new email.');
                        }

                        window.events.$emit('profileUpdate', {
                            'first_name': this.first_name,
                            'last_name': this.last_name
                        });

                        flash(messages);
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