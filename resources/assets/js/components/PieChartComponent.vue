<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <pie-chart
                    :chart-data="data"
                    :height="100"
                    :options="{
                        responsive: true, maintainAspectRatio: true
                    }">
                </pie-chart>
            </div>
        </div>
    </div>
</template>

<script>
    import PieChart from './PieChart';

    export default {
        components: {
            PieChart
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