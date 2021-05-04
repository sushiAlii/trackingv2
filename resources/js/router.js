import Vue from 'vue'
import VueRouter from 'vue-router'

import Welcome from './components/Welcome.vue'
import Home from './components/Home.vue'
import Documents from './components/Document.vue'
import DocumentDetails from './components/DocumentDetail.vue'
import Tracking from './components/Tracking.vue'
import Scan from './components/Scan.vue'
import ManageUsers from './components/ManageUsers.vue'
import Office from './components/Office.vue'



Vue.use(VueRouter)

    const routes = [

        {
            path: '/log-in',
            name: 'Login',
            component: Welcome,
            meta: { guest: true }

        },
        {
            path: '/',
            name: 'Dashboard',
            meta: { requiresAuth: true },
            component: Home

        },
        {
            path: '/documents',
            name: 'Documents',
            meta: { requiresAuth: true },
            component: Documents
        },
        {
            path: '/documents/details/:id',
            name: 'details',
            meta: { requiresAuth: true },
            component: DocumentDetails
        },
        {
            path: '/documents/tracking/:id',
            name: 'tracking',
            meta: { requiresAuth: true },
            component: Tracking
        },
        {
            path: '/manage_users',
            name: 'manage_user',
            meta: { requiresAuth: true },
            component: ManageUsers
        },
        {
            path: '/scan',
            name: 'scan',
            meta: { requiresAuth: true },
            component: Scan
        },
        {
            path: '/offices',
            name: 'office',
            meta: { requiresAuth: true },
            component: Office
        }
        

    ]

    

const router = new VueRouter({
    mode: "history",
    routes
})

function loggedIn(){
    if(localStorage.getItem("token")){
        return true
    }else{
        return false;
    }
}

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
      // this route requires auth, check if logged in
      // if not, redirect to login page.
      if (!loggedIn()) {
        next({
          path: '/log-in',
          query: { redirect: to.fullPath }
        })
      } else {
        next()
      }
    } else if (to.matched.some(record => record.meta.guest)) {
        if (loggedIn()) {
            next({
              path: '/',
              query: { redirect: to.fullPath }
            })
        } else {
            next()
          }
    }else{
        next() // make sure to always call next()!
    }
  })

export default router;




