<template>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <Login/>
    </div>
    <div class="col-md-2"></div>
  </div>
</template>

<script>
import Login from './Login';

export default {
    name: 'home',
    components: {
        Login
    }
};
</script>
