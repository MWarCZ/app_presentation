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
    <rect mask="url(#myMask)" x="-5%" y="-5%" width="110%" height="110%" class="svg_clr" />
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
