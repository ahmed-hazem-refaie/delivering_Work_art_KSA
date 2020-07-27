<template>
  <div class="text-center">
    <v-menu offset-y>
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          color="info"
          dark
          v-bind="attrs"
          v-on="on"
        >
         {{ $i18n.locale }}
        </v-btn>
      </template>
      <v-list>
        <v-list-item
v-for="(locale, index) in locales"  :key="index"
         @click.prevent="setLocale(locale)"
        >
          <v-list-item-title class="mb-3">
              {{ locale }} <img style="width:40px; height:40px; border-radius:50%" :src="'images/'+locale+'.png'">

          </v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
</template>
    <script>
    export default{
        data() {
            return {
                locales: ['en', 'ar'],

            }
        },
        methods: {
            setLocale(language) {
                 this.$i18n.locale = language;
            }
        }
    }
 </script>

