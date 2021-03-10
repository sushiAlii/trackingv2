<template>
    <v-app class="grey lighten-4">
        <Navbar/>
        <v-main class="mx-4 my-5">
            <h1>Dashboard</h1>
            <v-container class="my-5">Content</v-container>
        </v-main>
    </v-app>
</template>

<script>

import Navbar from './Navbar'

export default {
    name: 'App',
    components: {
        Navbar
    }
}
</script>