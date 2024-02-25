import { createApp } from "vue"
import App from './components/App.vue'
import 'preline'
import ExampleComponent from './components/ExampleComponent.vue'

const app = createApp({
    components: {
        ExampleComponent
    },
});

app.mount('#app');