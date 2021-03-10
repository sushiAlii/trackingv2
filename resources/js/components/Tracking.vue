<template>
    <v-app class="grey lighten-4">
        <Navbar/>
        <v-main class="mx-4 my-5">
            <h1>Tracking Details</h1>
            <v-container>
            <v-layout row wrap>
                <v-flex xs-12 md6>
                    <div>
                        <v-breadcrumbs :items="items" divider="/">
                            <template v-slot:item="{ item }">
                                <v-breadcrumbs-item
                                :href="item.href"
                                >
                                {{ item.text.toUpperCase() }}
                                </v-breadcrumbs-item>
                            </template>
                        </v-breadcrumbs>
                    </div>
                </v-flex>
            </v-layout>
            </v-container>
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

export default {
    name: 'App',
    components: {
        Navbar
    },
    data(){
        return{
            search: '',
            travels: [],
            ppmps: [],
            headers: [
                {
                    text: 'Product',
                    align: 'start',
                    value: 'product_name'
                },
                { text: 'Price', value: 'price' },
                { text: 'Quantity', value: 'quantity' },
                { text: 'Amount', value: 'total' },
            ],
            items: [
                {
                    text: 'Document Details',
                    disabled: false,
                    href: '/documents/details'
                },
                {
                    text: 'Tracking Details',
                    disabled: false,
                    href: '/documents/tracking'
                },
            ],

        }
    },
    mounted(){
        this.loadPpmps();
        this.loadPpmpTravelLog();
    },
    methods:{
        loadPpmpTravelLog: function(){
            axios.get('/api/documents/tracking/id=1')
            .then((response) => {
                this.travels = response.data.data;
            })
            .catch(function error(error){
                console.log(error);
            });
        },
        loadPpmps: function(){
            axios.get('/api/documents/details/1')
            .then((response) => {
                this.ppmps = response.data.data;
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