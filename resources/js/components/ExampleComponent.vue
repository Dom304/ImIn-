<template>
  <div>
    <h1>{{ message }}</h1>
    <button @click="changeMessage">Change Message</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: "Hello, World!"
    };
  },
  methods: {
    changeMessage() {
      this.message = "New Message";
    }
  }
};
</script>

<style scoped>
h1 {
  color: blue;
}
button {
  background-color: yellow;
  color: black;
}
</style>
