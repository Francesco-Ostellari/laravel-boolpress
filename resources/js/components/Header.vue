<template>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"  
                v-for="(item) in menuItems"
                :key="item.id"
                >
                  <router-link class="nav-link" :to="{ name: item.routeName}">{{ item.label }}</router-link>
              </li>
            </ul>
          </div>
      </div>
  </nav>

</template>

<script>
  export default {
    name: "Header",
    data() {
      return {
      menuItems: [
          {
              label: 'Home',
              routeName: 'home',
          },
          {
              label: 'About',
              routeName: 'about',
          },
          {
              label: 'Contacts',
              routeName: 'contacts',
          },
          {
              label: 'Posts',
              routeName: 'posts',
          },
        ],
      }
    },
  }
</script>

<style lang="scss">
</style>