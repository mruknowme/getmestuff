<script>
    import Animated from './Animated.vue';
    export default {
        components: { Animated },
        data() {
            return {
                isVisible: false
            }
        },
        methods: {
            showForm() {
                this.isVisible = !this.isVisible;
            }
        }
    }
</script>