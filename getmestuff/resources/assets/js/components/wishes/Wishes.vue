<template>
    <section class="">
        <div class="mw flex wrap between" v-if="arrayCheck(items)">
            <div class="container" v-for="(wish, index) in items" :key="wish.id">
                <wish :data="wish" @donated="refresh(index)"></wish>
            </div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container"></div>
        </div>
        <div class="mw flex center" v-else>
            <p>There are no relevant results at this point</p>
        </div>
    </section>
</template>
<script>
    import Wish from './Wish.vue';
    export default {
        components: { Wish },
        props: ['data'],
        data() {
            return {
                items: this.data,
            }
        },
        methods: {
            refresh(index) {
                setTimeout(() => {
                    let set = [];

                    this.$children.forEach((wish) => {
                        set.push(wish.id);
                    });

                    axios.post('/wishes/refresh', {
                        'set': set
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