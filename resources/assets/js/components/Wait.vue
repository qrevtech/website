<template>
    <div>
        <qriously :value="value" :size="300" />
    </div>
</template>

<script>
    export default{
        data() {
            return {
                value: 0
            }
        },
        mounted () {
            this.tick();
            setInterval(this.tick, 250);
        },
        methods: {
            tick () {
                this.value = "" + Math.floor(Math.random() * 1000000);
            }
        }
    }
</script>
