<template>
  <div>
    Hello World, from Vue Component!
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
