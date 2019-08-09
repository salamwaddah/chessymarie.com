<template>
  <b-navbar toggleable="lg" type="dark" fixed="top" class="page-navbar gradient">
    <div class="container">
      <b-navbar-brand to="/">Chessy Marie</b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="m-auto">
          <b-nav-item href="#work-experience">Experience</b-nav-item>
          <b-nav-item href="#education">Education</b-nav-item>
          <b-nav-item href="#skills">Skills</b-nav-item>
        </b-navbar-nav>
      </b-collapse>
      <a href="/resumes/1709.pdf" target="_blank" class="btn btn-danger download-template" role="button" aria-disabled="true">Download CV</a>
    </div>
  </b-navbar>
</template>

<script>
  export default {
    name: "Navigation"
  }
</script>

<style lang="scss">
  .page-navbar.navbar {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .page-navbar .navbar-nav .nav-item a {
    font-weight: bold;
  }

  .page-navbar.navbar-dark .navbar-nav .nav-link {
    color: #fff;
  }

  .page-navbar.fixed-top + .page {
    padding-top: 80px;
  }

  .download-template {
    color: #fff;
    background-color: #febb02;
    border: none;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 13px;
    padding: 10px 24px;
    border-radius: 40px;
  }

  .download-template:hover {
    background-color: #e2aa11;
  }

  .gradient {
    background: linear-gradient(120deg, #036, #003366c7);
    color: #fff !important;
  }

  @media (min-width: 576px) {
    .navbar {
      padding-top: 1.2rem;
      padding-bottom: 1.2rem;
    }
  }
</style>
