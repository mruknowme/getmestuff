<script>
    export default {
        methods: {
            valueCheck(event) {
                let val = $(event.currentTarget).val();
                if (val === "") {
                    $(event.currentTarget).removeClass('hasvalue');
                } else {
                    $(event.currentTarget).addClass('hasvalue');
                }
            }
        }
    }
</script>