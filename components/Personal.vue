<template>
  <div id="personal" class="group">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-info info-card">
          <h2>Contact Info</h2>
          <div class="row">
            <div class="col-1">
              <MdPersonIcon></MdPersonIcon>
            </div>
            <div class="col-9">
              <span itemprop="name">Chessy Marie</span>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <MdCallIcon></MdCallIcon>
            </div>
            <div class="col-9">
              <a rel="me" href="tel:+971568856434" title="+971568856434"
                 itemprop="telephone">+971568856434</a>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <IosAtIcon></IosAtIcon>
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
  import MdPersonIcon from 'vue-ionicons/dist/md-person.vue'
  import MdCallIcon from 'vue-ionicons/dist/md-call.vue'
  import IosAtIcon from 'vue-ionicons/dist/ios-at.vue'

  export default {
    name: "Personal",
    components:{
      MdPersonIcon, MdCallIcon, IosAtIcon
    }
  }
</script>
