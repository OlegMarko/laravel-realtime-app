<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
        props: [
            'urldata'
        ],
        mounted() {
            this.update();
        },
        methods: {
            update: () => {
                console.log(this.urldata);
            }
        }
    }
</script>
