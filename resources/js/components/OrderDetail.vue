<template>
    <v-app>
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
                                :items="details"
                                :search="search"
                                ></v-data-table>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
    </v-app>
</template>

<script>


export default {
    name: 'App',
    props: ['details'], 
    data(){
        return{
            
        }
    },
    mounted(){
        
    }
        
}

</script>