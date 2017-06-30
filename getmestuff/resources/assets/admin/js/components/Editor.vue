<template>
    <div class="panel panel-info" v-if="isEditing">
        <div class="panel-heading">
            <h3>Edit Row</h3>
            <span @click="closeEditor">&#10006;</span>
        </div>
        <div class="panel-body">
            <form id="form">
                <div v-for="(item, key) in items" v-if="skipTheseFields(key)">
                    <div class="form-group" v-if="checkFields(key)">
                        <label :for="key" v-text="formatString(key)"></label>
                        <input :name="key" class="form-control" v-model="formData[key]">
                    </div>
                    <div class="form-group" v-else-if="!checkRadio(key)">
                        <label v-text="formatString(key)"></label>
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
                    <div class="address" v-else-if="checkIfObject(key)">
                        <div class="form-group" v-for="(address, name) in item">
                            <label :for="name" v-text="formatString(name)"></label>
                            <input :name="name" class="form-control" v-model="formData[key][name]">
                        </div>
                    </div>
                    <div class="form-group" v-else-if="!checkTextarea(key)">
                        <label :for="key" v-text="formatString(key)"></label>
                        <textarea :name="key" rows="2" class="form-control" v-model="formData[key]"></textarea>
                    </div>
                    <div class="form-group" v-else-if="checkSelect(key)">
                        <lable :for="key" v-text="formatString(key)"></lable>
                        <select class="form-control" v-model="formData[key]">
                            <option v-for="(slug, option) in select[key]"
                                    :selected="item == option"
                                    :value="option"
                                    v-text="slug"></option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel-footer"><button @click.prevent="submitForm" class="btn btn-primary">Submit</button></div>
    </div>
</template>
<script>
    export default {
        props: {
            isEditing: {
                default: false
            },
            dataSet: {
                default: false
            },
            url: {
                default: ''
            },
            radio: {
                default: () => {
                    return [];
                },
                required: false
            },
            skip: {
                default: () => {
                    return [];
                },
                required: false
            },
            textarea: {
                default: () => {
                    return [];
                },
                required: false
            },
            select: {
                default: () => {
                    return [];
                },
                required: false
            }
        },
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
            },
            checkRadio(key) {
                return !(this.radio.indexOf(key) >= 0);
            },
            checkTextarea(key) {
                return !(this.textarea.indexOf(key) >= 0);
            },
            skipTheseFields(key) {
                return !(this.skip.indexOf(key) >= 0);
            },
            checkIfObject(key) {
                return (this.items[key] !== null && typeof this.items[key] === 'object');
            },
            checkSelect(key) {
                return key in this.select;
            },
            checkFields(key) {
                return (this.checkRadio(key)
                        && !this.checkIfObject(key)
                        && this.checkTextarea(key)
                        && !this.checkSelect(key));
            }
        }
    }
</script>