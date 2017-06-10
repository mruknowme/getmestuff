<template>
    <div class="mw">
        <div class="mw user-wishes owl-theme owl-carousel" v-if="arrayCheck(items)">
            <div class="mw item" v-for="wish in items" :key="wish.id">
                <wish ref="list" :data="wish"></wish>
            </div>
        </div>
        <div class="wish mw" v-else>
            <h3>Your Current Wish</h3>
            <div class="flex center no-results bg-white">
                <p>You don't have any wishes yet</p>
            </div>
        </div>
    </div>
</template>
<script>
    import Wish from './Wish.vue'

    export default {
        components: { Wish },
        props: [ 'wishes' ],
        data() {
            return {
                items: this.wishes,
            }
        },
        methods: {
            arrayCheck(array) {
                return (array.length > 0);
            }
        },
        created() {
            window.events.$on('newWish', (wish) => {
                this.items.push(wish);

                $(function() {
                    $('.user-wishes').trigger('destroy.owl.carousel');

                    $('.user-wishes').owlCarousel({
                        items: 1,
                        dots: false,
                        nav: true,
                        navText: [
                            '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                            '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
                    });

                    $('.user-wishes').trigger('to.owl.carousel', $('.user-wishes .owl-item').length);
                });
            });
        }
    }
</script>