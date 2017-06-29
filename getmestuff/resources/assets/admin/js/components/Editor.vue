<template>
    <div class="panel panel-info" v-if="isEditing">
        <div class="panel-heading">
            <h3>Edit Row</h3>
            <span @click="closeEditor">&#10006;</span>
        </div>
        <div class="panel-body">
            <form id="form">
                <div v-for="(item, key) in items" v-if="key != 'id' && key != 'created_at'">
                    <div class="form-group" v-if="key != 'validated' && key != 'completed'">
                        <label :for="key" v-text="formatString(key)"></label>
                        <input :name="key" class="form-control" v-model="formData[key]">
                    </div>
                    <div class="form-group" v-else>
                        <label v-text="key"></label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" :name="key" value="1" :checked="item" v-model="formData[key]">
                                True
                            </label>
                            <label class="radio-inline">
                                <input type="radio" :name="key" value="0" :checked="!item" v-model="formData[key]">
                                False
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel-footer"><button @click.prevent="submitForm" class="btn btn-primary">Submit</button></div>
    </div>
</template>
<script>
    export default {
        props: ['isEditing', 'dataSet', 'url'],
        data() {
            return {
                items: this.dataSet,
                formData: {}
            }
        },
        watch: {
            dataSet() {
                for (let item in this.dataSet) {
                    this.formData[item] = this.dataSet[item];
                }
                this.items = this.dataSet;
            }
        },
        methods: {
            formatString(str) {
                return str.replace(/_/g, ' ');
            },
            closeEditor() {
                this.$emit('cancel');
            },
            submitForm() {
                axios.post(this.url +'/'+ this.dataSet.id, this.formData).then(() => {
                    this.$emit('updated', this.formData);
                });
            }
        }
    }
</script>