<template>
  <div class="container">
    <div class="row justify-content-center align-items-center min-vh-75">
      <div class="col-md-6">
        <template v-if="!showForgotPasswordComponent">
          <form @submit.prevent="submitForm">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input v-model="email" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter email" autocomplete="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input v-model="password" type="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password" autocomplete="current-password">
            </div>
            <div class="row justify-content-center">
              <button type="submit" class="submit">Submit</button>
            </div>
            <div class="row justify-content-center">
              <small v-if="incorrectLogin" class="text-danger mt-2">Incorrect Email/Password.</small>
            </div>
            <div class="row justify-content-center mt-2">
              <button @click="switchToForgotPassword" class="link">Forgot Password?</button>
            </div>
          </form>
        </template>
        <template v-else>
          <ForgotPassword @back-to-login="backToLogin"></ForgotPassword>
        </template>
      </div>
    </div>
  </div>
</template>


<script>
const axios = require('axios');
import { axiosDefaultConfig } from '../../utils/axios-default-config'

const HTTP = axios.create(axiosDefaultConfig);

export default {
  name: 'Login',

  data() {
    return {
      email: '',
      password: '',
      showForgotPasswordComponent: false,
      incorrectLogin: false
    };
  },
  mounted() {
  },
  methods: {
    switchToForgotPassword() {
      this.showForgotPasswordComponent = true;
    },
    backToLogin() {
      this.showForgotPasswordComponent = false;
    },
    submitForm() {
      HTTP.post('/login', { email: this.email, password: this.password })
        .then(response => {
          if (response.data.data === true) {
            window.location.href = '/home';
          } else if (response.data.data === false) {
            this.incorrectLogin = true;
          }
        })
        .catch(error => {
          this.incorrectLogin = true;
          console.log('Error:', error.message);
        });
    }
  }
};
</script>