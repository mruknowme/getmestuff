<template>
    <div class="row">
        <number-input v-for="(item, key) in data"
                      :key="item.id"
                      :data="item"
                      :isCheckbox="checkboxes.indexOf(key) >= 0"
                      :post="post"></number-input>
        <search-array v-for="(item, key) in search"
                      :label="key"
                      :data="item"
                      :key="item.id"></search-array>
        <!--<div class="col-md-6 col-xs-6">-->
            <!--<div class="white-box">-->
                <!--<div class="form-group">-->
                    <!--<label class="control-label">Max number of words in title</label>-->
                    <!--<input v-model="max_words" id="tch3_22" type="text" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-md-6 col-xs-6">-->
            <!--<div class="white-box">-->
                <!--<div class="form-group">-->
                    <!--<label class="control-label">Default wishes allowance</label>-->
                    <!--<input id="tch3_22" type="text" value="2" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-md-6 col-xs-12">-->
            <!--<div class="white-box">-->
                <!--<div class="form-group">-->
                    <!--<label class="control-label">Notify about donations above</label>-->
                    <!--<input type="checkbox" checked class="js-switch" data-color="#99d683" data-size="small" />-->
                    <!--<input id="tch3_22" type="text" value="100" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-md-6 col-xs-12">-->
            <!--<div class="white-box">-->
                <!--<div class="form-group">-->
                    <!--<label class="control-label">Number of reports before notification</label>-->
                    <!--<input type="checkbox" checked class="js-switch" data-color="#99d683" data-size="small" />-->
                    <!--<input id="tch3_22" type="text" value="5" name="tch3_22" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline">-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-md-6 col-xs-12">-->
            <!--<div class="white-box">-->
                <!--<div class="form-group">-->
                    <!--<div class="form-group">-->
                        <!--<label class="control-label">Word replacements</label>-->
                        <!--<input type="text" class="form-control" placeholder="Search Banned Words">-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    </div>
</template>
<script>
    import NumberInput from './NumberInput.vue';
    import SearchArray from './SearchArray.vue';
    export default {
        components: { NumberInput, SearchArray },
        props: ['data', 'checkboxes', 'post', 'search'],
    }
</script>