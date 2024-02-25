<template>
    <div>
      <h1>{{ message }}</h1>
    </div>
  </template>
  
  <script>
import ExampleComponent from './ExampleComponent.vue';

  export default {
    data() {
        return {
            message: 'Vue is working!',
        };
    },
    components: { ExampleComponent }
}
  </script>  