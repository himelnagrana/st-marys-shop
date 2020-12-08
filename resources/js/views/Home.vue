<template>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">🔑 Please Sign In / Register</h1>
        <div class="form-field my-3">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        </div>

        <div class="form-field my-3">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        
        <label class="sr-only">
          <input type="checkbox" value="remember-me"> Remember me for 2 weeks on this device
        </label>

        <div class="mb-2 mt-2 d-inline-block">
          <button type="submit" class="btn btn-lg btn-primary d-inline">Login</button>
          <button type="submit" class="btn btn-lg btn-secondary d-inline">Register</button>
        </div>
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</template>

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
</style>>
