<template>
    <div class="mw">
        <div class="mw" v-if="arrayCheck(items)">
            <div class="mw item" v-for="(wish, index) in items" :key="wish.id">
                <randomwish :data="wish" @donated="refresh(index)"></randomwish>
            </div>
        </div>
        <div class="mw" v-else>
            <div class="wish mw">
                <h3>Random Wish</h3>
                <div class="flex center no-results bg-white">
                    <p>There are no relevant results at this point</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Randomwish from './Randomwish.vue';

    export default {
        components: { Randomwish },
        props: ['wishes'],
        data() {
            return {
                items: this.wishes
            }
        },
        methods: {
            refresh(index) {
                setTimeout(() => {
                    axios.post('/wishes/refresh', {
                        'set': [0]
                    }).then((response) => {
                        if (response.data[0] == null) {
                            this.items.splice(index, 1);
                        } else {
                            this.items.splice(index, 1, response.data[0]);
                        }
                    });
                }, 500)
            },
            arrayCheck(array) {
                return (array.length > 0);
            }
        }
    }
</script>