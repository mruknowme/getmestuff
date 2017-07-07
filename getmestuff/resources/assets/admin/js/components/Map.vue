<template>
    <div id="visits-map" style="height: 490px;"></div>
</template>
<script>
    export default {
        data() {
            return {
                countries: {}
            }
        },
        mounted() {
            this.fetch();
        },
        methods: {
            fetch() {
                axios.get('/admin/api/countries/visits').then(({data}) => {
                    this.countries = data;
                    this.makeMap();
                });
            },
            makeMap() {
//                console.log(this.countries);
                $('#visits-map').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: '#FFFFFF',
                    regionStyle: {
                        initial: {
                            fill: '#56cbf9',
                            'fill-opacity': 1,
                            stroke: 'none'
                        },
                        hover: {
                            "fill-opacity": 0.8,
                            cursor: 'pointer'
                        },
                    },
                    series: {
                        regions: [{
                            values: this.countries,
                            scale: ['#90d3ea', '#5da0b7'],
                            normalizeFunction: 'polynomial'
                        }]
                    },
                    onRegionTipShow: (e, el, code) => {
                        if (this.countries.hasOwnProperty(code)) {
                            el.html(el.html()+' ('+this.countries[code]+' visits)');
                        } else {
                            el.html(el.html()+' (0 visits)');
                        }
                    }
                });
            }
        }
    }
</script>