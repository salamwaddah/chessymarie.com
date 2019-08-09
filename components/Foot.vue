<template>
  <footer class="page-footer">
    <div class="container">
      <div class="social-icons">
        <a href="https://www.linkedin.com/in/chessymarie/" target="_blank" rel="nofollow">
          <LogoLinkedinIcon></LogoLinkedinIcon>
        </a>
      </div>
    </div>
  </footer>
</template>

<script>
  import LogoLinkedinIcon from 'vue-ionicons/dist/logo-linkedin.vue'

  export default {
    name: "Foot",
    components: {
      LogoLinkedinIcon
    }
  }
</script>

<style lang="scss">
  .page-footer {
    border-top: 1px solid #ddd;
    text-align: center;

    a {
      display: inline-block;
      margin: 0 10px;
      color: #282b2d;
      font-size: 20px;
    }

    .links {
      display: inline-block;
    }

    .social-icons {
      margin-top: 22px;
      margin-bottom: 22px;

      a {
        margin: 0 3px;
        color: #ffffff;
        border: 1px solid;
        opacity: 0.75;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        text-align: center;
        background-color: #c5c9d2;
        line-height: 37px;
      }

      a:hover {
        opacity: 1;
      }
    }
  }
</style>
