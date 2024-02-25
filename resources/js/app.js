import { createApp } from "vue"
import App from './components/App.vue'
import 'preline'
import ExampleComponent from './components/ExampleComponent.vue'
import Login from './components/Auth/Login.vue'

const app = createApp({
    components: {
        ExampleComponent,
        Login
    },
});

app.mount('#app');