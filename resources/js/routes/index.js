import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Welcome from '../views/Welcome'
import RegisterBdc from '../views/Bdc/Register'
import Bdc from '../views/Bdc/Index'
import Encasher from '../views/Bdc/Encasher/Index'
import RegisterEncasher from '../views/Bdc/Encasher/Register'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },
        {
            path: '/bdc',
            component: Bdc,
            children: [
                {
                    path: 'register',
                    component: RegisterBdc
                },
                {
                    path: 'encasher',
                    component: Encasher,
                    children: [
                        {
                            path: 'register',
                            component: RegisterEncasher
                        }
                    ]
                }
            ]


        }
    ],
});

export default router;
