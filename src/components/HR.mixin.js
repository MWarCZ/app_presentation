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
