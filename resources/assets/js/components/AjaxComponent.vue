<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button @click="getData" class="btn btn-success" v-if="!is_refresh">Update - {{ id }}</button>
                <span class="badge badge-primary" v-if="is_refresh">Updating ...</span>
                <table>
                    <thead>
                        <th>Name:</th>
                        <th>URL:</th>
                    </thead>
                    <tbody>
                        <tr v-for="url in urldata">
                            <td>{{ url.title }}</td>
                            <td>{{ url.url }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                urldata: [],
                is_refresh: false,
                id: 0
            }
        },
        mounted() {
            this.getData();
        },
        methods: {
            getData: function () {

                this.is_refresh = true;

                axios.get('/start/get-data').then((response) => {

                    console.log(response.data);

                    this.urldata = response.data;
                    this.is_refresh = false;
                    this.id++;
                });
            }
        }
    }
</script>
