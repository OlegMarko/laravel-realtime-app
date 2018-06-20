<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <line-chart
                    :chart-data="data"
                    :height="100"
                    :options="{
                        responsive: true, maintainAspectRatio: true
                    }">
                </line-chart>

                <input type="checkbox" v-model="realtime">
                <input type="text" v-model="label">
                <input type="number" v-model="point">

                <button @click="sendData">Set</button>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart';

    export default {
        components: {
            LineChart
        },
        data: function () {
            return {
                data: [],
                realtime: false,
                label: "",
                point: 500
            }
        },
        mounted() {
            let socket = io('http://localhost:3000');
            socket.on('new-event:App\\Events\\NewEvent', (response) => {
                this.data = response.data;
            });

            this.getData()
        },
        methods: {
            getData: function () {

                axios.get('/start/data-chart').then((response) => {
                    this.data = response.data;
                });
            },
            sendData: function () {
                axios({
                    method: 'get',
                    url: '/start/new-event',
                    params: {
                        label: this.label,
                        point: this.point,
                        realtime: this.realtime
                    }
                }).then((response) => {
                    this.data = response.data;
                });
            }
        }
    }
</script>