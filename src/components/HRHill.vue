<template>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 30 4"
    preserveAspectRatio="none"
    :class="svgClass"
    :style="svgStyle"
  >
    <ellipse cx="50%" cy="100%" rx="50%" ry="100%"  class="svg_clr"  />
  </svg>
</template>

<script>
import HRMixin from '@/components/HR.mixin'
export default {
  mixins: [
    HRMixin,
  ],
}
</script>

<style lang="scss" scoped>
$prevColor: var(--prev-color, transparent);
$nextColor: var(--next-color, currentColor);
.root-svg {
  display: block;
  background: $prevColor;
  width: 100%;
  /* Fix firefox */
  box-shadow: inset 0 1px 0 0px #{$prevColor}, inset 0 -1px 0 0px #{$nextColor};
}
.svg_clr {
  fill: currentColor;
  fill: $nextColor;
}
</style>
