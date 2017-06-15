<template>
    <div class="badge start-center mw pos-r">
        <div class="pos-r radial-wrapper">
            <svg width="65" height="65" class="pos-a">
                <circle :style="{ 'stroke-dasharray': svgDash + ' 103' }" r="16.25" cx="32.5" cy="32.5" class="pie"/>
            </svg>
            <img :src="image">
        </div>
        <div class="flex vertical badge-info">
            <div class="tool-tip">
                <h4 v-html="achievement.title + ' - ' + achievement.prize + ' ' + '<i class=\'fa fa-trophy currency\' aria-hidden=\'true\'></i>'"></h4>
                <p v-text="achievement.description + ' ' + '('+has+'/'+need+')'"></p>
            </div>
        </div>
        <i class="pos-a completed fa fa-check-circle" v-if="completed == 1" aria-hidden="true"></i>
    </div>
</template>
<script>
    export default {
        props: ['image', 'achievement', 'userinfo'],
        data() {
            return {
                tooltip: false,
                has: '',
                need: '',
                completed: ''
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
                    this.has = this.userinfo[key].has;
                    this.need = this.userinfo[key].need;
                    this.completed = this.userinfo[key].completed;
                }
            }
            window.events.$on('achievements', (amount) => {
                if (this.achievement.id == 1) {
                    if (this.completed == 0) {
                        window.totalprize += this.achievement.prize;
                        this.has = 1;
                        this.completed = 1;
                    }
                } else if (4 <= this.achievement.id && this.achievement.id <= 14) {
                    if (this.completed == 1) {
                        return;
                    }
                    else if (this.has + parseFloat(amount) >= this.need) {
                        this.has = this.need;
                        this.completed = 1;
                        window.totalprize += this.achievement.prize;
                    } else {
                        this.has += parseFloat(amount);
                    }
                } else if (15 <= this.achievement.id && this.achievement.id <= 17) {
                    if (this.need <= amount) {
                        this.has = 0;
                        this.completed = 1;
                        window.totalprize += this.achievement.prize;
                    } else if (this.has < amount && this.need > amount) {
                        this.has = parseFloat(amount);
                    }
                }
            });
        },
        computed: {
            percentComplete() {
                return Math.round(this.has / this.need * 100);
            },
            svgDash() {
                return (103 - Math.round(this.has * 103 / this.need));
            }
        }
    }
</script>