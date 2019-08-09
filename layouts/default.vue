<template>
  <div>
    <nuxt/>
  </div>
</template>

<style lang="scss">
  @import url("https://fonts.googleapis.com/css?family=Lato:300,400");

  body {
    font-family: 'Lato', sans-serif;
  }


  .cv-block {
    padding-bottom: 60px;
    padding-top: 30px;

    .info-card {
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.075);
      height: 100%;
    }

    .info-card h2 {
      margin-top: 0;
      margin-bottom: 24px !important;
      font-size: 1.4rem;
    }

    .info-card.skills h3 {
      margin-top: 25px;
      font-size: 1rem;
      font-weight: bold;
    }

    .info-card.skills .progress {
      height: 3px;
    }

    .info-card.contact-info .icon {
      font-size: 1.3em;
      color: #c9c9c9;
      position: relative;
      bottom: 4px;
    }
  }

  .cv-block.block-intro {
    text-align: center;
    max-width: 850px;
    margin: auto;
  }

  .cv-block.block-intro .about-me {
    max-width: 800px;
    margin: auto;
  }

  .cv-block.block-intro p {
    font-size: 1.5em;
    font-weight: 300;
    margin-bottom: 30px;
  }

  .cv-block.block-intro .btn {
    padding: 0.375rem 1rem;
    border-radius: 2em;
  }

  .cv-block.block-intro .avatar {
    width: 150px;
    height: 150px;
    background-size: cover;
    background-repeat: no-repeat;
    margin: auto;
    border-radius: 100px;
    margin-bottom: 30px;
  }

  .cv-block.info h2 {
    font-weight: bold;
    margin-bottom: 30px;
  }

  .cv-block.info h3 {
    font-size: 1.3rem;
  }

  .cv-block.info .group {
    max-width: 800px;
    margin: auto;
  }

  .cv-block.info .group:not(:first-child) {
    margin-top: 90px;
  }

  .period {
    text-align: right;
  }

  .cv-block.info .group {
    font-size: 0.8rem;
    float: none;
    font-weight: bold;
    margin-top: 4px;
    color: #6c757d;
    opacity: 0.8;
  }

  .cv-block.info .group .organization {
    font-size: 0.85em;
    background-color: #0ea0ff;
    display: inline-block;
    color: #fff;
    padding: 2px 8px;
    border-radius: 2em;
  }

  .cv-block.info .group .item {
    padding-bottom: 10px;
    margin-bottom: 25px;
    border-bottom: 1px solid #eee;
  }

  .cv-block.info .group h2 + .item {
    padding-top: 25px;
    border-top: 1px solid #eee;
  }

  .cv-block.info .group .item .row {
    margin-bottom: 5px;
  }

  @media (min-width: 768px) {

    .cv-block.info .group .period {
      float: right;
      text-align: right;
    }
  }

  @media (min-width: 576px) {
    .navbar {
      padding-top: 1.2rem;
      padding-bottom: 1.2rem;
    }

    .portfolio-navbar.fixed-top + .page {
      padding-top: 6rem;
    }
  }
</style>
