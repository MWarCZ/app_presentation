<template>
  <section class="home">
    <header class="container">
      <h1>Header</h1>
    </header>
    <HRCloud class="hr-cloud" prevColor="var(--header-bg-color)" nextColor="var(--main-bg-color)" />
    <main class="container">
      <h2>Main</h2>
      <Checkbox />
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam necessitatibus ipsa blanditiis, obcaecati voluptate commodi impedit saepe aspernatur ab voluptatem a minima nemo dolores? Blanditiis dignissimos atque eligendi vel ut.
      </p>
      <CheckboxV1 />
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, impedit unde culpa numquam aliquid ex, voluptate exercitationem rerum error beatae expedita ipsa, reiciendis accusantium maxime enim? Pariatur eius quis et.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, impedit unde culpa numquam aliquid ex, voluptate exercitationem rerum error beatae expedita ipsa, reiciendis accusantium maxime enim? Pariatur eius quis et.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in distinctio quidem velit assumenda voluptates quisquam, incidunt doloremque vitae eius, voluptatibus porro quis, consectetur sunt placeat ullam nisi architecto fugiat.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, impedit unde culpa numquam aliquid ex, voluptate exercitationem rerum error beatae expedita ipsa, reiciendis accusantium maxime enim? Pariatur eius quis et.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rem mollitia voluptatem eveniet hic, accusamus quisquam a eos repellendus animi sequi, tempore nobis natus nulla! Corrupti laboriosam eligendi voluptates! Beatae.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat modi libero error qui repellat deleniti laborum sunt magnam consequuntur magni vero fugit, esse inventore ad, porro amet, sapiente sit. Officiis?
      </p>
      <ScreenShow />
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, impedit unde culpa numquam aliquid ex, voluptate exercitationem rerum error beatae expedita ipsa, reiciendis accusantium maxime enim? Pariatur eius quis et.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, impedit unde culpa numquam aliquid ex, voluptate exercitationem rerum error beatae expedita ipsa, reiciendis accusantium maxime enim? Pariatur eius quis et.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in distinctio quidem velit assumenda voluptates quisquam, incidunt doloremque vitae eius, voluptatibus porro quis, consectetur sunt placeat ullam nisi architecto fugiat.
      </p>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, praesentium. Tenetur, deserunt rem? Dicta a suscipit, odit labore minus non vero illum. Dolores maiores beatae, quidem repellat asperiores numquam exercitationem.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium beatae magnam perferendis unde dolor vitae, sunt, molestiae fugiat quisquam corporis labore impedit. Neque hic fuga eligendi, suscipit illo fugiat incidunt.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, impedit unde culpa numquam aliquid ex, voluptate exercitationem rerum error beatae expedita ipsa, reiciendis accusantium maxime enim? Pariatur eius quis et.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rem mollitia voluptatem eveniet hic, accusamus quisquam a eos repellendus animi sequi, tempore nobis natus nulla! Corrupti laboriosam eligendi voluptates! Beatae.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat modi libero error qui repellat deleniti laborum sunt magnam consequuntur magni vero fugit, esse inventore ad, porro amet, sapiente sit. Officiis?
      </p>
    </main>
    <HRHill class="hr-hill" prevColor="var(--main-bg-color)" nextColor="var(--footer-bg-color)" />
    <footer class="container">
      <h2>Footer</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi accusantium dolor tempora, vero blanditiis cumque alias totam nihil rerum sapiente ex quae excepturi temporibus minus tempore dignissimos sed sunt?
      </p>
    </footer>
  </section>
</template>

<script>
import HRCloud from '@/components/HRCloud.vue'
import HRHill from '@/components/HRHill.vue'
import ScreenShow from '@/components/ScreenShow.vue'
import Checkbox from '@/components/Checkbox.vue'
import CheckboxV1 from '@/components/CheckboxV1.vue'
export default {
  name: 'Home',
  components: {
    HRCloud,
    HRHill,
    ScreenShow,
    Checkbox,
    CheckboxV1,
  },
}
</script>
<style lang="scss" scoped>
.container {
  padding: 1em 2em;
}
.home {
  --header-bg-color: white;
  --header-fg-color: currentColor;
  --main-bg-color: navy;
  --main-fg-color: #ddd;
  --footer-bg-color: #84ff2d;
  --footer-fg-color: #000;

  flex-grow: 1;
  display: flex;
  flex-direction: column;
}
header {
  color: var(--header-fg-color);
  background-color: var(--header-bg-color);
}
main {
  color: var(--main-fg-color);
  background-color: var(--main-bg-color);
  flex-grow: 1;
  text-align: justify;
  h2 {
    text-align: center;
  }
}
footer {
  color: var(--footer-fg-color);
  background-color: var(--footer-bg-color);
}

$widthLockLimit: 700px;
.hr-cloud {
  @media (min-width: $widthLockLimit) {
    height: 4rem;
  }
}
.hr-hill {
  height: 2rem;
  transition: .5s height;
  @media (min-width: $widthLockLimit) {
    height: 3rem;
  }
}
</style>
