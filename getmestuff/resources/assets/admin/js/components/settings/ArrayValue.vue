<template>
    <div>
        <div class="col-xs-6 col-md-6" v-for="(item, key) in data.data.value">
            <div class="white-box">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa" :class="icons[key]"></i></span>
                    <input @keydown.13="sendValue(key)" type="text" class="form-control" v-model="value[key]"/>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['data', 'icons'],
        data() {
            return {
                value: this.data.data.value
            }
        },
        methods: {
            sendValue(key) {
                axios.patch('/admin/api/settings/'+this.data.id, {
                    value: this.value[key],
                    key: key
                });
            }
        }
    }
</script>