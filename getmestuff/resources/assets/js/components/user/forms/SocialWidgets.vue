<template>
    <div class="social-links flex start-center mw">
        <div class="fb-like" data-href="https://www.facebook.com/GetMeStuffOfficial/" data-layout="button_count"
             data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
        <div id="vk_subscribe"></div>
    </div>
</template>
<script>
    export default {
        mounted() {
            VK.init({
                apiId: 6112127,
                onlyWidgets: true,
            });

            VK.Widgets.Subscribe('vk_subscribe', {mode: 1, soft: 1}, -149608803);

            VK.Observer.subscribe('widgets.subscribed', () => {
                this.recordAchievement();
            });

            window.fbAsyncInit = () => {
                FB.init({
                    appId      : '207139529816294',
                    xfbml      : true,
                    version    : 'v2.9'
                });
                FB.AppEvents.logPageView();

                FB.Event.subscribe('edge.create', () => {
                    this.recordAchievement();
                });
            };
        },
        methods: {
            recordAchievement() {
                axios.get('/subscribe');
            }
        }
    }
</script>