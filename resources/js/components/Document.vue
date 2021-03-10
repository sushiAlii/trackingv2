<template>
    <v-app>
        <Navbar/>
        <v-main class="mx-4 my-5">
            <h1>Document</h1>
            <v-container>
                <v-card>
                    <v-layout row wrap>
                        <v-flex xs12 md6 mx-5 pa-3>
                            <div class="caption grey--text">Document Type</div>
                            <div>PPMP</div>
                        </v-flex>
                    </v-layout>
                </v-card>
            </v-container>
            <v-container class="my-5">
                <v-card>
                    <v-card-title>
                        PPMP
                    <v-spacer></v-spacer>
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search..." single-line hide-details>
                        </v-text-field>
                    </v-card-title>
                    <v-data-table 
                    :headers="headers" 
                    :items="documents" 
                    :search="search" 
                    :loading="loadingvariable" 
                    loading-text="Loading.. Please wait a moment" 
                    @click:row="onRowClick"
                    >
                    </v-data-table>
                </v-card>
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
        return{
            documents: [],
            loadingvariable: true,
            search: '',
            headers: [
                {
                    text: 'Title',
                    align: 'start',
                    value: 'title',
                },
                {text: 'Account Code', value: 'account_code'},
                {text: 'Type', value: 'type'},
                {text: 'Total', value: 'total'},
            ],
        }
    },

    mounted(){
        this.loadDocuments();
    },

    methods: {
        loadDocuments: function(){
            this.loadingvariable=true;
            axios.get('/api/documents')
            .then((response) => {
                this.loadingvariable=false;
                this.documents = response.data.data;
            })
            .catch()
                
        },
        onRowClick: function(row){
            this.$router.push({name: 'details', params: {id:row.id}});
            console.log(row.id);
            
        }
    
    }

}
</script>