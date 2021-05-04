<template>
  <v-app>
    <v-main>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            <v-card class="elevation-12">
              <v-window v-model="step">
                <v-window-item :value="1">
                  <v-row>
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          class="text-center display-2 red--text text--darken-3"
                        >Sign in</h1>
                        <div class="text-center mt-4">
                        </div>
                        <v-form @submit.prevent="handleLogin">
                          <v-text-field
                            label="Email"
                            name="email"
                            prepend-icon="email"
                            type="text"
                            color="red darken-3"
                            v-model="formData.email"
                            :error-messages="errors.email"
                          />

                          <v-text-field
                            id="password"
                            label="Password"
                            name="password"
                            prepend-icon="lock"
                            type="password"
                            color="red darken-3"
                            v-model="formData.password"
                            :error-messages="errors.password"
                          />
                          <h3 class="text-center mt-4">Forgot your password?</h3>
                            <div class="text-center mt-3">
                              <v-btn rounded color="red darken-3" dark type="submit">SIGN IN</v-btn>
                            </div>  
                        </v-form>
                      </v-card-text>
                    
                    </v-col>
                    <v-col cols="12" md="4" class="red darken-3">
                      <v-card-text class="white--text mt-12">
                        <h1 class="text-center display-1">Track Your File as Guest!</h1>
                        <h5
                          class="text-center"
                        >Enter PPMP codes and track your journey with us</h5>
                      </v-card-text>
                      <div class="text-center">
                        <v-btn rounded outlined dark @click="step++">Track Here</v-btn>
                      </div>
                    </v-col>
                  </v-row>
                </v-window-item>
                <v-window-item :value="2">
                  <v-row class="fill-height">
                    <v-col cols="12" md="4" class="red darken-3">
                      <v-card-text class="white--text mt-12">
                        <h1 class="text-center display-1">Login Here!</h1>
                        <h5
                          class="text-center"
                        >Keep connected with us! Login here and track multiple files</h5>
                      </v-card-text>
                      <div class="text-center">
                        <v-btn rounded outlined dark @click="step--">Sign in</v-btn>
                      </div>
                    </v-col>

                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1 class="text-center display-2 red--text text--darken-3">Track Your Document!</h1>
                        <div class="text-center mt-4">
                        </div>
                        <h4 class="text-center mt-4">Enter a PPMP code here!</h4>
                        <v-form>
                          <v-text-field
                            label="PPMP Code"
                            name="Name"
                            prepend-icon="mdi-bike-fast"
                            type="text"
                            color="red darken-3"
                          />
                          <div class="text-center mt-n5">
                            <v-btn rounded color="red darken-3" dark>TRACK</v-btn>
                          </div>
                        </v-form>
                      </v-card-text>
                      <div class="py-3"/>
                    </v-col>
                  </v-row>
                </v-window-item>
              </v-window>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>

export default {
    name: 'App',
    props: {
        source: String
    },
    data(){
        return{
            step: 1,
            formData:{
                email: '',
                password: '',
                device_name: 'browser'
            },
            errors:{}
        }
    },
    methods:{
        handleLogin(){
            axios.post('/api/login', this.formData)
            .then(response => {
                localStorage.setItem('token', response.data)
                console.log(response.data)
                this.$router.push('/')
            })
            .catch(errors => {
                this.errors = errors.response.data.errors;
                console.log(errors.response.data);
            });
        
        }
    }
  }
</script>