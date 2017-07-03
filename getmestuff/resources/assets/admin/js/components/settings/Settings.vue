<template>
    <div class="row" v-if="!this.isGroup()">
        <div class="col-xs-12"
             v-for="(item, key) in data"
             :class="{'col-md-12' : largeOrSmall(data, key), 'col-md-6' : !largeOrSmall(data, key)}">
            <number-input :key="item.id"
                          :data="item"
                          v-if="!checkSearch(item.setting) && !checkText(item.setting)">
            </number-input>
            <search-array v-else-if="checkSearch(item.setting)"
                          :data="item"
                          :key="item.id">
            </search-array>
            <text-input v-else-if="checkText(item.setting)"
                        :data="item"
                        :key="item.id">
            </text-input>
        </div>
    </div>
    <div class="row" v-else>
        <div class="col-md-12 col-xs-12" v-for="(item, key) in grouped">
            <div class="col-md-12 col-xs-12">
                <h3 v-text="item.title"></h3>
            </div>
            <div class="col-xs-12"
                 :class="{'col-md-12' : largeOrSmall(item.items, dataKey), 'col-md-6' : !largeOrSmall(item.items, dataKey)}"
                 v-for="(itemData, dataKey) in item.items"
                 v-if="!checkIfArray(itemData.data.value)"
                 >
                <number-input :key="itemData.id"
                              :data="itemData"
                              v-if="!checkSearch(itemData.setting) && !checkText(itemData.setting)">
                </number-input>
                <search-array v-else-if="checkSearch(itemData.setting)"
                              :data="itemData"
                              :key="itemData.id">
                </search-array>
                <text-input v-else-if="checkText(itemData.setting)"
                            :data="itemData"
                            :key="itemData.id">
                </text-input>
            </div>
            <div v-for="(itemData, dataKey) in item.items"
                 v-else-if="checkIfArray(itemData.data.value)">
                <array-value :data="itemData"
                             :icons="icons[itemData.setting]"
                             :key="itemData.id">
                </array-value>
            </div>
        </div>
    </div>
</template>
<script>
    import NumberInput from './NumberInput.vue';
    import SearchArray from './SearchArray.vue';
    import TextInput from './TextInput.vue';
    import ArrayValue from './ArrayValue.vue';
    export default {
        components: { NumberInput, SearchArray, TextInput, ArrayValue },
        props: {
            data: {
                required: true
            },
            search: {
                required: false,
                default: () => {
                    return [];
                }
            },
            group: {
                required: false,
                default: () => {
                    return [];
                }
            },
            text: {
                required: false,
                default: () => {
                    return [];
                }
            },
            icons: {
                required: false,
                default: () => {
                    return [];
                }
            }
        },
        data() {
            return {
                grouped: false,
                items: this.data
            }
        },
        created() {
            if (this.isGroup()) {
                this.sortArray();
            }
        },
        methods: {
            checkSearch(item) {
                return (this.search.indexOf(item) >= 0);
            },
            checkText(item) {
                return (this.text.indexOf(item) >= 0);
            },
            checkIfArray(item) {
                return (item instanceof Array);
            },
            sortArray() {
                this.grouped = this.group;
                this.sortItems();
            },
            addItemsToGroup(number) {
                return this.items.splice(0, number);
            },
            sortItems() {
                for (let item in this.group) {
                    if (this.items.length > 0) {
                        this.grouped[item].items = this.addItemsToGroup(this.group[item].items);
                    }
                }
            },
            isGroup() {
                return this.group.length > 0;
            },
            largeOrSmall(groupedItems, key) {
                return (((groupedItems.length % 2) != 0) && key == 0);
            },
            test(test) {
                console.log(test);
            }
        }
    }
</script>