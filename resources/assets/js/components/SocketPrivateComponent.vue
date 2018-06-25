<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <select class="form-control" v-model="usersSelect" multiple>
                            <option v-for="user in users" :value="'news-action.' + user.id">
                                {{ user.email }}
                            </option>
                        </select>
                    </div>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="6" readonly>{{ dataMessages.join('\n') }}</textarea>
                    </div>
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
                dataMessages: [],
                message: "",
                usersSelect: []
            }
        },
        props: [
            'users', 'user'
        ],
        mounted() {
            let socket = io('http://localhost:3000');
            socket.on('news-action.' + this.user.id + ':App\\Events\\PrivateMessage', (data) => {
                this.dataMessages.push(data.message.user + ': ' + data.message.message);
            });

            socket.on('news-action.:App\\Events\\PrivateMessage', (data) => {
                this.dataMessages.push(data.message.user + ': ' + data.message.message);
            });
        },
        methods: {
            sendMessage: function () {

                if (!this.usersSelect.length) {
                    this.usersSelect.push('news-action.')
                }

                axios({
                    method: 'get',
                    url: '/start/send-private-message',
                    params: { channels: this.usersSelect, message: this.message, user: this.user.email }
                }).then((response) => {
                    this.dataMessages.push(this.user.email + ': ' + this.message);
                    this.message = "";
                });
            }
        }
    }
</script>