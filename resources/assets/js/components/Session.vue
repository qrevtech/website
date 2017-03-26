<template>
    <div>
        <qriously :value="payload" :size="250" />
    </div>
</template>

<script>
    export default {
        props: {
            session: {
                required: true,
                type: String
            },
            password: {
                required: true,
                type: String
            }
        },
        computed: {
            payload() {
                let d = window.Crypto.AES.encrypt(JSON.stringify({"session": this.session, "key": this.password}), 'jxWa67xpP0ym855Z72Cl9w3E4djGj016');
                return d.toString();
            }
        },
        mounted () {
            window.Echo.channel('session.' + this.session)
                .listen('Push', (e) => {
                    let {url} = JSON.parse(window.Crypto.AES.decrypt(e.payload, this.key));
                    window.location = url;
                });
        }
    }
</script>
