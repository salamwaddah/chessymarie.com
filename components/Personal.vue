<template>
  <div id="personal" class="group">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-info info-card">
          <h2>Contact Info</h2>
          <div class="row">
            <div class="col-1">
              <i class="ion-person icon"></i>
            </div>
            <div class="col-9">
              <span itemprop="name">Chessy Marie</span>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <i class="ion-ios-telephone icon"></i>
            </div>
            <div class="col-9">
              <a rel="me" href="tel:+971568856434" title="+971568856434"
                 itemprop="telephone">+971568856434</a>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <i class="ion-at icon"></i>
            </div>
            <div class="col-9">
              <a rel="me" href="mailto:chessyakiko@gmail.com" title="chessyakiko@gmail.com"
                 itemprop="email">chessyakiko@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-info info-card">
          <h2>Languages</h2>
          <div class="row">
            <ul>
              <li>English</li>
              <li>Arabic <span class="badge badge-danger">Speaking Only</span></li>
              <li>Filipino</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "Personal"
  }
</script>
