import VueRouter from 'vue-router'
import About from './components/About.vue'
import Project from './components/Project.vue'

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'About',
            component: About
        },
        {
            path: '/projects',
            name: 'Project',
            component: Project,
            child: [
                {}
            ]
        }
    ]
})
