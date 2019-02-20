<template>
  <div id="content-page" class="home">
    <banner-section></banner-section>
    <gallery-section></gallery-section>
    <product-section></product-section>
    <tabs-section></tabs-section>
    <advice-section></advice-section>
    <advantage-section></advantage-section>
  </div>
</template>

<script>

export default {
  name: 'home',
  components: {
    BannerSection: () => import('./../components/sections/Banner.vue'),
    GallerySection: () => import('./../components/sections/Gallery.vue'),
    ProductSection: () => import('./../components/sections/Product.vue'),
    TabsSection: () => import('./../components/tabs/Tabs.vue'),
    AdviceSection: () => import('./../components/sections/Advice.vue'),
    AdvantageSection: () => import('./../components/sections/Advantage.vue')
  },
}
</script>
