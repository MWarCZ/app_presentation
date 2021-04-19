<template>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 30 4"
    preserveAspectRatio="none"
    :class="svgClass"
    :style="svgStyle"
  >
    <mask id="myMask">
      <rect width="100%" height="100%" fill="#fff" />
      <ellipse cx="3" cy="-2" rx="5" ry="4" fill="#000" />
      <ellipse cx="11" cy="-2" rx="6" ry="5" fill="#000" />
      <ellipse cx="19" cy="-1" rx="5" ry="4" fill="#000" />
      <ellipse cx="27" cy="-2.5" rx="5" ry="5" fill="#000" />
    </mask>
    <rect mask="url(#myMask)" width="100%" height="100%" class="svg_clr" />
  </svg>
</template>

<script>
export default {
  props: {
    prevColor: String,
    nextColor: String,
  },
  computed: {
    /** @return {String} */
    svgStyle () {
      const rootStyle = this.$props.style ? `${this.$props.style}` : ''
      const prevColor = this.prevColor ? `--prev-color: ${this.prevColor};` : ''
      const nextColor = this.nextColor ? `--next-color: ${this.nextColor};` : ''
      const style = `${prevColor}${nextColor}${rootStyle}`
      return style
    },
    /** @return {String} */
    svgClass () {
      const rootClass = this.$props.class ? `${this.$props.class}` : ''
      const defaultClass = ['root-svg'].join(' ')
      return [defaultClass, rootClass].join(' ')
    },
  },
}
</script>

<style scoped>
.root-svg {
  display: block;
  background: var(--prev-color, transparent);
  width: 100%;
}
.svg_clr {
  fill: currentColor;
  fill: var(--next-color, currentColor);
}
</style>
