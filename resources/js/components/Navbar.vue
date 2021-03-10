<template>
    <nav>
        <v-app-bar dark class="red darken-3" app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
                <v-toolbar-title class="text-uppercase white--text">
                    <span class="font-weight-light">PSD</span>
                    <span>Tracking</span>
                </v-toolbar-title>
            <v-spacer></v-spacer>
                <v-btn text x-small>
                    <span>Sign Out</span>
                    <v-icon right x-small>exit_to_app</v-icon>
                </v-btn>
            </v-app-bar>
        <v-navigation-drawer dark app v-model="drawer">
            <v-list-item two-line>
                <v-list-item-avatar>
                    <img src="https://randomuser.me/api/portraits/men/85.jpg"/>
                </v-list-item-avatar>
                <v-list-item-content>
                <v-list-item-title>
                    {{ currentUser.email }}
                </v-list-item-title>
                <v-list-item-subtitle>
                    Logged In
                </v-list-item-subtitle>
            </v-list-item-content>
            </v-list-item>
            <v-divider></v-divider>
            <v-list dense>
                <v-list-item link to="/" style="text-decoration: none">
                    <v-list-item-action>
                        <v-icon>mdi-view-dashboard</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Dashboard</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link to="/documents" style="text-decoration: none">
                    <v-list-item-action>
                        <v-icon>mdi-folder</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>My Documents</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link @click="logout">
                    <v-list-item-action>
                        <v-icon color="red">mdi-power</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title class="red--text">Log Out</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer> 
    </nav>
</template>

<script>
    export default {
        data(){
            return{
                drawer:true,
                currentUser: {},
                token: localStorage.getItem('token'),
                links: [
                    { icon: 'mdi-view-dashboard', text: 'Dashboard', route: '/' },
                    { icon: 'mdi-folder', text: 'My Documents', route: '/documents' },
                ]
            }
        },
        created(){
            axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`;
            this.loadUser();
        },
        methods: {
            loadUser: function(){
                axios.get('/api/user')
                .then(response => {
                    this.currentUser = response.data;
                }).catch(errors => {
                console.log(errors);
            });
            },
            logout: function(){
                axios.post('/api/logout').then(response => {
                    localStorage.removeItem('token');
                    this.$router.push('/log-in')
                }).catch(errors => {
                    console.log(errors.response.data)
                })
            }
        }
        
    }
</script>