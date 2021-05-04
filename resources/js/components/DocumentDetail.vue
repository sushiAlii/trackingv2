<template>
    <v-app>
    <Navbar/>
        <v-main class="mx-4 my-5">
            <h1>Document Details</h1>
            <v-container v-for="ppmp in ppmps" :key="ppmp.id">
                <v-card class="pa-5">
                    <v-layout row wrap>
                        <v-flex xs-12 md6>
                            <div>PPMP {{ppmp.account_code}}</div>
                            <div class="caption grey--text">Created on {{ppmp.date_created}}</div>
                        </v-flex >
                        <v-flex xs-6 sm4 md2>
                            <div class="caption grey--text">Title</div>
                            <div>{{ppmp.title}}</div>
                        </v-flex>
                        <v-flex xs-6 sm4 md2>
                            <div class="caption grey--text">Type</div>
                            <div>{{ppmp.type}}</div>
                        </v-flex>
                        <v-flex xs-2 sm4 md2>
                            <div class="caption grey--text">Status</div>
                            <div>{{ppmp.status}}</div>
                        </v-flex>
                    </v-layout>
                </v-card>
            </v-container>
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
                                :loading="loadingvariable"
                                loading-text="Loading.. Please wait a moment"
                                :search="search"
                                ></v-data-table>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
            <v-container>
                <v-timeline dense class="grey lighten-4">
                    <v-slide-x-transition group>
                        <v-timeline-item
                        v-for="travel in travels"
                        :key="travel.id"
                        small
                        >
                            <span>
                                Arrived at {{ travel.office }} on {{ travel.date }}
                            </span>
                        </v-timeline-item>
                    </v-slide-x-transition>
                </v-timeline>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>

import Navbar from './Navbar'
import Tracking from './Tracking'

export default {
    name: 'App',
    components: {
        Navbar,
        Tracking
    },
    data(){
        return{
            search: '',
            loadingvariable: true,
            details: [],
            ppmps: [],
            travels: [],
            headers: [
                {
                    text: 'Product',
                    align: 'start',
                    value: 'product_name'
                },
                { text: 'Price', value: 'price' },
                { text: 'Quantity', value: 'quantity' },
                { text: 'Amount', align: 'end', value: 'total' },
            ],
            items: [
                {
                    text: 'Document Details',
                    disabled: false,
                    route: '/documents/details/:id'
                },
                {
                    text: 'Tracking Details',
                    disabled: false,
                    route: '/documents/tracking:id'
                },
            ],

        }
    },
    mounted(){
        let id = this.$route.params.id;
        console.log("Got", id);
        this.loadDetails(id);
        this.loadPpmps(id);
        this.loadTravels(id);
    },
    methods:{
        loadDetails: function(id){
            this.loadingvariable=true;
            axios.get('/api/documents/details/id='+id)
            .then((response) => {
                this.loadingvariable=false;
                this.details = response.data.data;
                console.log(response.data.data);
            })
            .catch(function error(error) {
                console.log(error);
            });
        },
        loadPpmps: function(id){
            axios.get('/api/documents/details/ppmp='+id)
            .then((response) => {
                this.ppmps = response.data.data;
            })
            .catch(function error(error){
                console.log(error);
            });
        },
        loadTravels: function(id){
            axios.get('/api/documents/tracking/id='+id)
            .then((response) => {
                this.travels = response.data.data;
            })
            .catch(function error(error){
                console.log(error);
            });
        },
        getStatus: function(){
            if((ppmp.status)===1){
                return "Ongoing";
            }
        }
        
    }
}
</script>