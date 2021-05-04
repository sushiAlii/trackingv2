<template>
    <v-app>
        <Navbar/>
        <v-main class="mx-4 my-5">
            <v-container>
                <v-col cols="12" md="12">
                      <v-card-text class="mt-12">
                        <h1 class="text-center display-2 red--text text--darnken-3">Scan Your Document!</h1>
                        <div class="text-center mt-4">
                        </div>
                        <v-form @submit.prevent="handleScan" ref="form">
                          <v-text-field
                            label="PPMP Code"
                            name="Code"
                            prepend-icon="mdi-magnify-scan"
                            type="text"
                            color="red darken-3"
                            v-model="formData.code"
                            :error-messages="errors.Code"
                            autofocus
                          />
                            <div class="text-center mt-1">
                                <v-btn rounded color="red darken-3" dark type="submit">SCAN</v-btn>
                            </div>
                        </v-form>
                      </v-card-text>
                      <div class="py-3"/>
                    </v-col>
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
    data() {
        return{
            formData: {
                code:'',
            },
            currentUser: {
                id: '',
                email: '',
            },
            errors: {}
        }
    },
    mounted(){
    },

    created(){
        this.loadUser();
        
    },

    methods: {
        
        handleScan: function(){
            axios.post('/api/scan', {code: this.formData, id: this.currentUser.id})
            .then(response => {
                console.log(response);
                this.$refs.form.reset();
            })
            .catch(errors => {
                console.log(errors);
            })
            
        },
        loadUser: function(){
                axios.get('/api/user')
                .then(response => {
                    this.currentUser = response.data;
                    console.log(this.currentUser.id)
                })
                .catch(errors => {
                console.log(errors);
            });
        },
    }

}
</script>