<template>
  <div class="group" id="education">
    <h2 class="text-center">Education</h2>
    <div class="item">
      <div class="row">
        <div itemprop="alumniOf" itemscope itemtype="http://schema.org/CollegeOrUniversity"
             class="col-12">
          <h4 itemprop="name">Western Mindanao State University</h4>
          <meta itemprop="url" content="https://wmsu.edu.ph/"/>
          <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <meta itemprop="streetAddress" content="Normal Rd"/>
            <meta itemprop="addressLocality" content="Zamboanga"/>
            <meta itemprop="postalCode" content="7000"/>
            <meta itemprop="addressCountry" content="PH"/>
          </address>
          <div class="row" itemprop="event" itemscope itemtype="http://schema.org/Event">
            <div class="col-8">
              <h3 class="organization" itemprop="name">Bachelor's Degree, Nursing Science</h3>
            </div>
            <div class="col-4 period">
              <time class="text-muted" itemprop="startDate" content="2003-01-01">2003 -</time>
              <time class="text-muted" itemprop="endDate" content="2005-01-01">2005</time>
            </div>
            <div itemprop="location" itemscope itemtype="http://schema.org/Place">
              <meta itemprop="name" content="Bachelor's Degree">
              <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <meta itemprop="addressLocality" content="Zamboanga"/>
                <meta itemprop="addressCountry" content="PH"/>
              </div>
            </div>
          </div>
          <div class="row" itemprop="event" itemscope itemtype="http://schema.org/Event">
            <div class="col-8">
              <h3 class="organization" itemprop="name">Associate's Degree, Health Sciences</h3>
            </div>
            <div class="col-4 period">
              <time class="text-muted" itemprop="startDate" content="2003-01-01">2001 -</time>
              <time class="text-muted" itemprop="endDate" content="2005-01-01">2003</time>
            </div>
            <div itemprop="location" itemscope itemtype="http://schema.org/Place">
              <meta itemprop="name" content="Associate's Degree">
              <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <meta itemprop="addressLocality" content="Zamboanga"/>
                <meta itemprop="addressCountry" content="PH"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "Education"
  }
</script>
