<template>
    <div class="col-md-6 col-xs-12">
        <div class="white-box">
            <div class="form-group">
                <label class="control-label" v-text="formatString(data.setting)">Notify about donations above</label>
                <input v-if="isCheckbox" type="checkbox" checked class="js-switch" data-color="#99d683" data-size="small" />
                <input id="tch3_22" type="text" v-model="value" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['isCheckbox', 'data', 'post'],
        data() {
            return {
                value: this.data.data
            }
        },
        methods: {
            formatString(str) {
                return str.replace(/_/g, ' ');
            },
        }
    }
</script>