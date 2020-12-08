<template>
    <div class="container-fluid">
        <h1 class="text-1">St. Mary Shop</h1>
        <!-- <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link>
        </p> -->

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {};
</script>