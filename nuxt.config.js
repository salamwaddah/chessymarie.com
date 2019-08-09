module.exports = {
  mode: 'universal',
  /*
  ** Headers of the page
  */
  head: {
    title: 'Chessy Marie - Registered Nurse',
    meta: [
      {charset: 'utf-8'},
      {name: 'viewport', content: 'width=device-width, initial-scale=1, shrink-to-fit=no'},
      {name: 'description', content: process.env.npm_package_description || ''},
      {name: 'robots', content: 'index,follow'},
      {name: 'googlebot', content: 'index,follow'},
      {name: 'rating', content: 'General'},

      // Facebook Open Graph
      {name: 'og:url', content: 'https://www.facebook.com/salamchessy'},
      {name: 'og:type', content: 'website'},
      {name: 'og:title', content: process.env.npm_package_name || 'Chessy Marie'},
      {name: 'og:image', content: '/img/chessy.jpg'},
      {name: 'og:image:alt', content: process.env.npm_package_name || 'Chessy Marie'},
      {
        name: 'og:description',
        content: 'Chessy Marie a professional registered nurse based in Dubai, UAE with DHA license.'
      },
      {name: 'og:site_name', content: process.env.npm_package_name || 'Chessy Marie'},
      {name: 'og:locale', content: 'en_US'},

    ],
    link: [
      // Favicon
      {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'},
      {rel: 'icon', type: 'image/png', sizes: '16x16', href: '/img/ico/favicon-16x16.png'},
      {rel: 'icon', type: 'image/png', sizes: '32x32', href: '/img/ico/favicon-32x32.png'},
      {rel: 'icon', type: 'image/png', sizes: '96x96', href: '/img/ico/favicon-96x96.png'},

      // Apple Touch Icons
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '57x57', href: '/img/ico/apple/apple-icon-57x57.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '60x60', href: '/img/ico/apple/apple-icon-60x60.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '72x72', href: '/img/ico/apple/apple-icon-72x72.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '76x76', href: '/img/ico/apple/apple-icon-76x76.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '114x114', href: '/img/ico/apple/apple-icon-114x114.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '120x120', href: '/img/ico/apple/apple-icon-120x120.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '144x144', href: '/img/ico/apple/apple-icon-144x144.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '152x152', href: '/img/ico/apple/apple-icon-152x152.png'},
      {rel: 'apple-touch-icon', type: 'image/png', sizes: '180x180', href: '/img/ico/apple/apple-icon-180x180.png'},

      // Android Icon
      {rel: 'icon', type: 'image/png', sizes: '36x36', href: '/img/ico/android/android-icon-36x36.png'},
      {rel: 'icon', type: 'image/png', sizes: '48x48', href: '/img/ico/android/android-icon-48x48.png'},
      {rel: 'icon', type: 'image/png', sizes: '72x72', href: '/img/ico/android/android-icon-72x72.png'},
      {rel: 'icon', type: 'image/png', sizes: '96x96', href: '/img/ico/android/android-icon-96x96.png'},
      {rel: 'icon', type: 'image/png', sizes: '144x144', href: '/img/ico/android/android-icon-144x144.png'},
      {rel: 'icon', type: 'image/png', sizes: '192x192', href: '/img/ico/android/android-icon-192x192.png'},

      // Custom
      {rel: 'stylesheet', href: 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'}
    ]

  },
  /*
  ** Customize the progress-bar color
  */
  loading: {color: '#fff'},
  /*
  ** Global CSS
  */
  css: [],
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [],
  /*
  ** Nuxt.js dev-modules
  */
  devModules: [],
  /*
  ** Nuxt.js modules
  */
  modules: [
    'bootstrap-vue/nuxt',
    ['@nuxtjs/google-analytics', {
      id: 'UA-142458189-1'
    }]
  ],
  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend(config, ctx) {
    }
  },
  /*
  * Server config for Google could run
  * Host must be 0.0.0.0 not localhost
   */
  server: {
    port: process.env.PORT || 3000,
    host: '0.0.0.0',
    timing: false
  }
};
