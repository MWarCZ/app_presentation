<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </div>
    <HRCloud class="hr-cloud" prevColor="var(--p-color)" nextColor="var(--n-color)" />
    <router-view/>
    <HRHill class="hr-hill" prevColor="var(--n-color)" nextColor="var(--p-color)" />
  </div>
</template>
<script>
import HRCloud from '@/components/HRCloud.vue'
import HRHill from '@/components/HRHill.vue'
export default {
  components: {
    HRCloud,
    HRHill,
  },
}
</script>
<style lang="scss">
/* Default style */
*, ::before, ::after {
  box-sizing: border-box;
}
html, body, #app {
  margin: 0;
  padding: 0;
  font-size: 18px;
  min-height: 100vh;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;

  display: flex;
  flex-direction: column;

  --p-color: #fff;
  --n-color: navy;
  background-color: var(--n-color);
}

#nav {
  background-color: var(--p-color);
  padding: 1rem;
  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
<style lang="scss" scoped>
$widthLockLimit: 800px;
.hr-cloud {
  @media (min-width: $widthLockLimit) {
    height: 5rem;
  }
}
.hr-hill {
  @media (min-width: $widthLockLimit) {
    height: 5rem;
  }
}
</style>
