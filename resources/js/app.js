import { createApp } from "vue"
import App from './components/App.vue'
import 'preline'
import ExampleComponent from './components/ExampleComponent.vue'
import Dashboard from './components/Dashboard.vue'


const app = createApp({
    components: {
        ExampleComponent,
        Dashboard,

    },
});

app.mount('#app');