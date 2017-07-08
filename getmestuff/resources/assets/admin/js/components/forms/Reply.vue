<template>
    <div class="col-md-12 col-xs-12">
        <div class="custom card"
             :class="{ 'card-inverse card-secondary text-white': ticket.is_admin,
                        'card-outline-info text-dark' : !ticket.is_admin }">
            <div class="card-block">
                <h4 class="card-title" v-text="ticket.subject"></h4>
                <p class="card-text" v-html="ticket.body"></p>
            </div>
            <div class="card-footer">
                <small v-text="formatDate(ticket.created_at)"></small>
            </div>
        </div>
        <div class="custom card card-outline-success text-dark" v-if="!showForm && ticket.reply != null">
            <div class="card-block">
                <h4 class="card-title" v-text="ticket.subject"></h4>
                <article class="card-text" v-html="ticket.reply.body"></article>
            </div>
            <div class="card-footer flex between">
                <small v-text="ticket.reply.user.first_name +' '+ ticket.reply.user.last_name"></small>
                <small v-text="formatDate(ticket.reply.created_at)"></small>
            </div>
        </div>
        <div class="custom card text-dark" v-else-if="showForm">
            <div class="card-block">
                <textarea class="textarea_editor form-control" rows="5" placeholder="Enter text..."></textarea>
            </div>
            <div class="card-footer">
                <button @click="getValue" class="btn btn-outline-info">Reply</button>
            </div>
        </div>
        <hr>
    </div>
</template>
<script>
    import moment from 'moment';
    export default {
        props: ['data', 'answer', 'user'],
        mounted() {
            if (this.$el.querySelector('.textarea_editor') != null) {
                $('.textarea_editor').wysihtml5();
            }
        },
        data() {
            return {
                ticket: this.data,
                showForm: this.answer,
            }
        },
        methods: {
            getValue() {
                let reply = {};
                reply.user = {};

                reply.subject = this.ticket.subject;
                reply.body = $('.textarea_editor').val();
                reply.user.first_name = this.user.first_name;
                reply.user.last_name = this.user.last_name;
                reply.created_at = moment();
                this.ticket.reply = reply;

                this.sendData();
            },
            formatDate(date) {
                return moment(date, 'YYYY-MM-DD, HH:mm:ss').format('DD-MM-YYYY HH:mm');
            },
            sendData() {
                axios.post('/admin/api/tickets/reply/'+this.ticket.id, {
                    body: this.ticket.reply.body,
                    subject: this.ticket.subject
                }).then(() => {
                    $('.textarea_editor').data('wysihtml5').editor.composer.hide();
                    $('.textarea_editor').data('wysihtml5').editor.toolbar.hide();
                    this.showForm = false;
                    flash(['Message has been sent']);
                }).catch((error) => {
                    let messages = [];
                    for (let key in error.response.data) {
                        messages.push(error.response.data[key][0]);
                    }

                    this.buffering = false;
                    flash(messages, 'alert-danger');
                });
            }
        },
    }
</script>