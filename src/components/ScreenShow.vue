<template>
  <div :class="{'screen-show': true, open}">
    <div v-for="{color, x, y}, i in items" :key="`${i}`"
      :style="`--color:${color};--translate:translate(calc(var(--open, 0) * ${x}),calc(var(--open, 0) * ${y}));`"
      class="screen-show__item"></div>
  </div>
      <!-- :style="`--color:${item.color};--translate:${item.translate};`" -->
</template>

<script>
export default {
  props: {
    items: {
      type: Array,
      default: () => [
        { color: '#f0f', x: '0em', y: '0em' },
        { color: '#f00', x: '4em', y: '-2em' },
        { color: '#ff0', x: '8em', y: '-4em' },
      ],
    },
  },
  data () {
    return {
      open: false,
      observer: null,
    }
  },
  mounted () {
    this.observer = this.initObserver()
  },
  destroyed () {
    this.destroyObserver(this.observer)
  },
  methods: {
    initObserver () {
      const observer = new IntersectionObserver((entities) => {
        entities.forEach((entity) => {
          if (entity.isIntersecting && entity.target === this.$el) {
            console.log('ano')
            // setTimeout(() => { this.open = true }, 500)
            this.open = true
          } else {
            console.log('ne')
            this.open = false
          }
        })
      }, {
        threshold: 0.9,
      })
      observer.observe(this.$el)
      return observer
    },
    destroyObserver (/** @type {IntersectionObserver} */ observer) {
      observer.unobserve(this.$el)
      observer.disconnect()
    },
  },
}
</script>

<style lang="scss" scoped>
.screen-show {
  // background: #f005;
  height: 20em;
  width: 20em;
  float: left;
  margin: 1em 2em 1em 0;
  position: relative;

  &__item {
    height: 16em;
    width: 8em;
    position: absolute;
    left: 50%;
    top: 0;
    --skew: skew(8deg, 20deg);
    --translate: translate(0,0);
    transform: var(--skew) var(--translate) translate(-90%, 30%);
    box-shadow: black -0.2em 0.2em 0.4em;

    background: var(--color);
    transition: 1s transform ease-out;
  }
}
.open {
  --open: 1;
}

.wa {
  background: #f005;
  height: 15em;
  position: relative;
}
.wa div {
  height: 16em;
  width: 8em;
  position: absolute;
  left: 50%;
  top: 0;
  --skew: skew(8deg, 20deg);
  --translate: translate(0,0);
  transform: var(--skew) var(--translate);
  box-shadow: black -0.2em 0.2em 0.4em;
}
.v1 {
  background: #0f0;
  transition: 1s transform ease-out;
}
.v2 {
  background: #00f;
  transition: 1s transform ease-out;
}
.v3 {
  background: #f0f;
  transition: 1s transform ease-out;
}
.wa.a .v2 {
  --translate: translate(4em, -2em);
}
.wa.a .v3 {
  --translate: translate(8em,-4em);
}
</style>
