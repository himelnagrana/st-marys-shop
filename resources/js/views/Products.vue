<template>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div id="products" class="column is-one-third">
            <h2 class="label">🎁 Products</h2>

            <div class="product my-3">
                <figure>
                <img src="https://via.placeholder.com/150" width="150">
                </figure>

                <div><b>Product I</b></div>
                <div class="info">
                <span class="tag is-black">€4.20</span>
                <span class="tag is-black">4 Left</span>
                </div>
                <button
                    @click="addToCart(1)"
                    type="button"
                    class="btn btn-secondary btn-sm">Add to cart</button>
            </div>

            <div class="product my-3">
                <figure>
                <img src="https://via.placeholder.com/150" width="150">
                </figure>

                <div><b>Product II</b></div>
                <div class="info">
                <span class="tag is-black">€9.60</span>
                <span class="tag is-black">2 Left</span>
                </div>
                <button
                    @click="addToCart(2)"
                    type="button"
                    class="btn btn-secondary btn-sm">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</template>

<script>
export default {
  name: 'products',
  methods: {
      addToCart(productId) {
          alert(productId);
          this.$router.push('/cart');
      }
  }
};
</script>>
