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
                data: []
            }
        },
        mounted() {
            this.getData()
        },
        methods: {
            getData: function () {

                axios.get('/start/data-chart').then((response) => {
                    this.data = response.data;
                });
            }
        }
    }
</script>