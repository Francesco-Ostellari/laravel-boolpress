<template>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
          <a class="navbar-brand" href="#">
          </a>
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
                  <a class="nav-link" :href="item.link">{{ item.label }}</a>
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
              label: 'Item 1',
              link: '#',
              id: 1,
          },
          {
              label: 'Item 2',
              link: '#',
              id: 2,
          },
          {
              label: 'Item 3',
              link: '#',
              id: 3
          },
          {
              label: 'Item 4',
              link: '#',
              id: 4,
          },
          {
              label: 'Item 5',
              link: '#',
              id: 5,
          }
        ],
      }
    },
  }
</script>

<style lang="scss">
</style>