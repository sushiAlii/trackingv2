<template>
    <v-app>
        <Navbar/>
        <v-main class="mx-4 my-5">
            <h1>Offices</h1>
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
            this.loadOffices();
        },
        methods: {
            loadOffices: function(){

            }
        }
    }
</script>