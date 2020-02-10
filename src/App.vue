<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png"><span class="md-title">Headless WordPress with VueJS</span>
    <Articles />
  </div>
</template>

<script>
import Articles from './components/Articles.vue'

export default {
  name: 'App',
  components: {
    Articles
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
  text-align: center;
}
#app img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

#app .md-title {
  color: #ffffff;
  
}
</style>
