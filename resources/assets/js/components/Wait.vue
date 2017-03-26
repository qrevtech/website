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
                let data = "";
                for (let i = 0 ; i < 5; i++) data += Math.floor(Math.random() * 1000000);
                this.value = data.substr(0, 32);
            }
        }
    }
</script>
