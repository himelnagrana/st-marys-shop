<template>
  <form class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">🔑 Please Sign In / Register</h1>
    <div class="form-field my-3">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input
            type="email"
            id="email"
            class="form-control"
            placeholder="Email address"
            v-model="form.email"
            required
            autofocus>
    </div>

    <div class="form-field my-3">
        <label for="inputPassword" class="sr-only">Password</label>
        <input
            type="password"
            id="inputPassword"
            class="form-control"
            placeholder="Password"
            v-model="form.password"
            required>
    </div>

    <input
        type="hidden"
        v-model="form.password_confirmation"
        id="password_confirmation">

    <label class="sr-only">
        <input
            id="rememberMe"
            type="checkbox"
            v-model="form.rememberMe"> Remember me for 2 weeks on this device
    </label>

    <div class="mb-2 mt-2 d-inline-block">
        <button
            @click="loginAction"
            type="button"
            class="btn btn-lg btn-primary d-inline">
            Login
        </button>
        <button
            @click="registrationAction"
            type="button"
            class="btn btn-lg btn-secondary d-inline">
            Register
        </button>
    </div>

    <span class="text-danger" v-if="errors.length">
        {{ errors }}
    </span>
  </form>
</template>

<script>
import UserService from './../services/UserService';
import LocalStorageUtil from './../services/LocalStorageUtil';

export default {
  name: 'login',
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
        rememberMe: false
      },
      errors: []
    };
  },
  methods: {
    async loginAction() {
        this.form.password_confirmation = this.form.password;
        UserService.login(this.form)
            .then((response) => {
                LocalStorageUtil.setItem(response.token, this.form.rememberMe);
                this.$router.push('/products');
            })
            .catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors;
                }
            });
    },
    async registrationAction() {
        this.form.password_confirmation = this.form.password;
    },
  }
};
</script>

<style scoped>
  .form-signin {
    width: 100%;
    padding: 15px;
    margin: 0 auto;
  }
  .form-signin .checkbox {
    font-weight: 400;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>
