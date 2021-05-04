<template>
    <v-app>
        <Navbar/>
            <v-main class="mx-4 my-5">
                <h1>Manage Users</h1>
                <v-container>
                <v-layout>
                    <v-flex>
                        <v-card>
                            <v-card-title>
                                <v-text-field
                                    v-model="search"
                                    append-icon="mdi-magnify"
                                    label="Search"
                                    single-line
                                    hide-details
                                ></v-text-field>
                            </v-card-title>
                                <v-data-table
                                :headers="headers"
                                :items="users"
                                :loading="loadingvariable"
                                loading-text="Loading.. Please wait a moment"
                                :search="search"
                                ></v-data-table>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
            </v-main>
    </v-app>
</template>

<script>
    import Navbar from './Navbar'

    export default {
        components: {
            Navbar
        },
        data(){
            return {
                search: '',
                loadingvariable: true,
                users: [],
                headers: [
                    {
                        text: 'User',
                        align: 'start',
                        value: 'name'
                    },
                    { text: 'Email', value: 'email' },
                    { text: 'Role', value: 'role' },
                    { text: 'Office', value: 'office' }
                ]
            }
        },
        mounted(){
            this.loadUsers();
        },
        methods: {
            loadUsers: function(){
                this.loadingvariable = true;
                console.log("start method")
                axios.get('api/manage_users')
                .then((response) => {
                    this.loadingvariable = false;
                    this.users = response.data.data
                });
            }
        }
    }
</script>