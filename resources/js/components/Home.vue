<template>
    <v-app class="grey lighten-4">
        <Navbar/>
        <v-main class="mx-4 mt-5">
            <h1>Dashboard</h1>
            <v-container 
            id = "dashboard" 
            class="mt-10" 
            fluid 
            tag="section"
            >
                <v-row>
                    <v-col
                        cols="12"
                        lg="4"
                    >
                        <base-material-chart-card
                        :data="officeChart.data"
                        :options="officeChart.options"
                        :responsive-options="officeChart.responsiveOptions"
                        color="red darken-3"  
                        hover-reveal
                        type="Bar"
                        >

                        <h4 class="card-title font-weight-light mt-2 ml-2">
                            Documents in Offices
                        </h4>

                        <p class="d-inline-flex font-weight-light ml-2 mt-1">
                            PPMP
                        </p>

                        <template v-slot:actions>
                        <!----
                            <v-icon
                            class="mr-1"
                            small
                            >
                            mdi-clock-outline
                            </v-icon>
                            <span class="caption grey--text font-weight-light">updated 10 minutes ago</span> -->
                        </template>
                        </base-material-chart-card>
                    </v-col>
                </v-row>
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
        return {
            offices: [],
            count: [],
            officeChart: {
                data: {
                    labels: [],
                    series: [
                        [0],
                    ]
                },
                options: {
                    axisX: {
                        showGrid: false,
                    },
                    low: 0,
                    high: 10,
                    chartPadding: {
                        top: 0,
                        right: 5,
                        bottom: 0,
                        left: 0,
                    },
                },
                responsiveOptions: [
                    ['screen and (max-width: 640px)', {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function (value) {
                            return value[0]
                            },
                        },
                    }],
                ],
            },
        }
    },
    mounted(){
        this.loadGraphLabels();
    },
    methods:{
        loadGraphLabels: function(){
            console.log('hi');
            axios.get('api/offices/graph')
                .then((response) => {
                    for(let i = 0;i<response.data.length;i++){
                        this.offices[i] = response.data[i].office_name;
                        this.count[i] = response.data[i].count;
                        console.log(this.offices);
                        console.log(this.count);   
                    }
                this.officeChart.data.labels = this.offices;
                this.officeChart.data.series[0] = this.count;
            //console.log(response.data)
            //console.log(this.officeChart.data.labels);
            console.log(this.officeChart.data.series[0]);
            })
        }
    },

}
</script>