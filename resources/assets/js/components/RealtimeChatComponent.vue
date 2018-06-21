<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea class="form-control" rows="6" readonly>{{ data.join('\n') }}</textarea>
                </div>
                <div class="input-group mb-3">
                    <input v-model="message" @keyup.enter="sendMessage" type="text" class="form-control" placeholder="Type your message ...">
                    <div class="input-group-append">
                        <button @click="sendMessage" class="btn btn-outline-secondary" type="button">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                data: [],
                message: ""
            }
        },
        mounted() {
            let socket = io('http://localhost:3000');
            socket.on('new-event:App\\Events\\NewMessage', (response) => {
                this.data.push(response.message);
            });
        },
        methods: {
            sendMessage: function () {
                axios({
                    method: 'get',
                    url: '/start/send-message',
                    params: { message: this.message }
                }).then((response) => {
                    this.message = "";
                });
            }
        }
    }
</script>