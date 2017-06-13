<template>
    <div class="badge" @click="moreInfo">
        <div class="pos-r radial-wrapper">
            <svg width="65" height="65" class="pos-a">
                <circle :style="{ 'stroke-dasharray': svgDash + ' 103' }" r="16.25" cx="32.5" cy="32.5" class="pie"/>
            </svg>
            <img :src="image">
        </div>
        <p class="badge-title">{{ achievement.title }} ({{ percentComplete }}%)</p>
        <div class="tool-tip" v-show="tooltip">
            <h4 v-html="achievement.title + ' - ' + achievement.prize + ' ' + '<i class=\'fa fa-trophy\' aria-hidden=\'true\'></i>'"></h4>
            <p v-text="achievement.description"></p>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['image', 'achievement', 'userinfo'],
        data() {
            return {
                tooltip: false,
                userAchievement: '',
                percentComplete: '',
                has: '',
                need: '',
                svgDash: ''
            }
        },
        methods: {
            moreInfo() {
                this.tooltip = !this.tooltip;
            }
        },
        created() {
            for (let key in this.userinfo) {
                if (key == this.achievement.id) {
                    this.userAchievement = this.userinfo[key];
                    this.percentComplete = Math.round(this.userinfo[key].has / this.userinfo[key].need * 100);
                    this.has = this.userinfo[key].has;
                    this.need = this.userinfo[key].need;
                    this.svgDash = 103 - Math.round(this.userinfo[key].has * 103 / this.userinfo[key].need);
                }
            }
        },
        mounted() {

        }
    }
</script>