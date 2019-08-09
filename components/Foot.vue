<template>
  <footer class="page-footer">
    <div class="container">
      <div class="social-icons">
        <a href="https://www.linkedin.com/in/chessymarie/" target="_blank" rel="nofollow"><i
          class="ion-social-linkedin" title="LinkedIn"></i></a>
      </div>
    </div>
  </footer>
</template>

<script>
  export default {
    name: "Foot"
  }
</script>

<style lang="scss">
  .page-footer {
    border-top: 1px solid #ddd;
    text-align: center;
  }

  .page-footer a {
    display: inline-block;
    margin: 0px 10px;
    color: #282b2d;
    font-size: 18px;
  }

  .page-footer .links {
    display: inline-block;
  }

  .page-footer .social-icons {
    margin-top: 20px;
    margin-bottom: 16px;
  }

  .page-footer .social-icons a {
    font-size: 18px;
    margin: 0 3px;
    color: #ffffff;
    border: 1px solid;
    opacity: 0.75;
    border-radius: 50%;
    width: 36px;
    display: inline-block;
    height: 36px;
    text-align: center;
    background-color: #c5c9d2;
    line-height: 34px;
  }

  .page-footer .social-icons a:hover {
    opacity: 1;
  }
</style>
