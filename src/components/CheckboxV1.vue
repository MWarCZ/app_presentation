<template>
  <label class="checkbox">
    <span class="checkbox__input">
      <input type="checkbox" name="cf_gdpr" value="1" required="">
      <span class="checkbox__mark">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 74.92 59.99" xml:space="preserve"
          focusable="false"
          aria-hidden="true"
          >
          <path style="fill: currentColor;" d="M74.92,1.106L31.195,58.95l0,0c-0.928,1.163-2.322,1.394-3.485,0.466c-0.234-0.231-0.234-0.231-0.469-0.466L0.103,23.186c-0.232-0.231,0-0.462,0-0.462c0.231-0.231,0.463,0,0.463,0l28.335,20.644l0,0L73.759,0.175c0.231-0.234,0.697-0.234,0.928,0C74.92,0.405,74.92,0.871,74.92,1.106z" />
        </svg>
      </span>
    </span>
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

  .checkbox {
    --mark-border-color: #0934f0;
    --mark-border: 2px solid var(--mark-border-color);
    --mark-color: green;
    --mark-size: 1.5em;
    --mark-background: #fff;
    color: red;
    display: grid;
    grid-template-columns: auto 1fr;
    grid-template-areas: "input label";
    position: relative;
    justify-content: center;
    align-items: center;
    gap: 0.4em;
    cursor: pointer;
  }

  .checkbox__input {
    grid-area: input;
    display: grid;
    grid-template-areas: "mark";
    width: var(--mark-size);
    height: var(--mark-size);
    border: var(--mark-border, 1px solid currentColor);
    color: var(--mark-color, currentColor);
    background: var(--mark-background, transparent);
    box-shadow: inset 0px 0px 0.1em var(--mark-border-color);
  }

  .checkbox__mark {
    grid-area: mark;
    opacity: 0;
    transition: 0.3s opacity;
  }
  .checkbox__mark svg {
    width: 100%;
    height: 100%;
  }
  .checkbox__input input {
    grid-area: mark;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    z-index: -10;
  }

  .checkbox input:focus {
    border: none;
    outline: none;
  }

  .checkbox input:focus+.checkbox__mark {
    outline: 3px solid black;
  }

  .checkbox__input input:checked + .checkbox__mark {
    opacity: 1;
  }
</style>
