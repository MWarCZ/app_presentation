<template>
  <label class="checkbox2">
  <input type="checkbox" name="cf_gdpr" value="1" required="">
  <div class="checkbox__mark">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 74.92 59.99" xml:space="preserve"
      focusable="false"
      aria-hidden="true"
      >
      <path style="fill: currentColor;" d="M74.92,1.106L31.195,58.95l0,0c-0.928,1.163-2.322,1.394-3.485,0.466c-0.234-0.231-0.234-0.231-0.469-0.466L0.103,23.186c-0.232-0.231,0-0.462,0-0.462c0.231-0.231,0.463,0,0.463,0l28.335,20.644l0,0L73.759,0.175c0.231-0.234,0.697-0.234,0.928,0C74.92,0.405,74.92,0.871,74.92,1.106z" />
    </svg>
  </div>
  <span class="checkbox__label">
    Souhlasím se zpracováním osobních údajů
  </span>
</label>
</template>

<script>
export default {

}
</script>

<style scoped>
  /* .contact-form2 .checkbox2 {
    align-self: flex-end;
    margin: 3rem 0 2rem 0;
    gap: 0.4em;
    max-width: 50%;
    align-items: center;
  } */

  .checkbox2 {
    --mark-border: 1px solid blue;
    --mark-color: green;
    --mark-size: 1.5em;
    --mark-background: #fff;
    color: red;
    display: grid;
    grid-template-columns: auto 1fr;
    grid-template-areas: "mark label";
    position: relative;
    justify-content: center;
    align-items: center;
    gap: 0.4em;
  }

  /* .checkbox2 * {
      color: inherit;
  } */
  .checkbox2 input {
    /* position: absolute; */
    width: var(--mark-size);
    height: var(--mark-size);
    z-index: -10;
    grid-area: mark;
  }

  .checkbox2 input:focus {
    border: none;
    outline: none;
  }

  .checkbox2 input:focus+.checkbox__mark {
    outline: 2px solid black;
  }

  .checkbox__mark {
    width: var(--mark-size);
    height: var(--mark-size);
    border: var(--mark-border, 1px solid currentColor);
    grid-area: mark;
    background: var(--mark-background);
  }

  .checkbox__mark svg {
    width: 100%;
    height: 100%;
    opacity: 0;
  }

  .checkbox__mark svg * {
    color: var(--mark-color, currentColor);
  }

  .checkbox2 input:checked+.checkbox__mark svg {
    opacity: 1;
  }
</style>
