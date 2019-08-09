<template>
  <div itemscope itemtype="http://schema.org/Person">
    <section id="schema" style="display: none;">
      <b itemprop="additionalName">Maryam</b>
      <b itemprop="gender">Female</b>
      <b itemprop="familyName">Calunsag</b>
    </section>

    <Navigation></Navigation>

    <main class="page cv-page">
      <section class="cv-block block-intro border-bottom">
        <div class="container">
          <div class="avatar">
            <img class="img-fluid rounded-circle" src="/img/chessy.jpg" alt="Chessy Marie">
          </div>
          <p>
            Hello! I am
            <strong>Chessy Marie</strong>. I have solid hospital nursing experience; a professional nurse with strong Emergency Room ER background.
          </p>
          <a href="https://www.linkedin.com/in/chessymarie/" target="_blank" rel="nofollow"
             class="btn btn-outline-primary">Contact Me</a>
        </div>
      </section>
      <section class="cv-block info">
        <div class="container">
          <Experience></Experience>
          <Education></Education>
          <Personal></Personal>
          <Skills></Skills>
          <Licensing></Licensing>
        </div>
      </section>
      <Foot></Foot>
    </main>
  </div>
</template>

<script>
  import Navigation from "../components/Navigation";
  import Foot from "../components/Foot";
  import Skills from "../components/Skills";
  import Experience from "../components/Experience";
  import Education from "../components/Education";
  import Licensing from "../components/Licensing";
  import Personal from "../components/Personal";

  export default {
    components: {Personal, Licensing, Education, Experience, Skills, Foot, Navigation}
  }
</script>
