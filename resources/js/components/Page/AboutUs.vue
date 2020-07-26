<template>
  <section >
  <div class="loading-page">
            <div class="counter">
                <p>{{ $t("message.loading") }}</p>
                <h1>
                    0%


                </h1>
                <hr />
            </div>
        </div>

    <div class="mission myhome mt-4">
      <h3 class="title" @click="mission = !mission" v-if="!mission"><span>{{ $t("message.ourmission") }} </span > <span class="plus" v-if="mission==false">+</span>  </h3>
      <h3 class="title" @click="mission = !mission" v-else>  <span > {{ $t("message.ourmission") }} </span > <span class="plus" v-if="mission==true">-</span>  </h3>
      <div class="row mt-5 text-center" v-if="mission">
        <div class="col-md-8" v-if=" $i18n.locale == 'en'">
          <p>
            {{ $t("message.ourmissiontext1") }}
          </p>
          <p>
            {{ $t("message.ourmissiontext2") }}&nbsp;
          </p>
        </div>
        <div class="col-md-3" v-if=" $i18n.locale == 'en'">
          <img
            src="//cdn.shopify.com/s/files/1/3000/4362/files/Untitled-1_a6547468-5701-4807-94b7-495f7130594d_2048x.jpg?v=1563943428"
            alt
          />
        </div>
        <div class="col-md-3" v-if=" $i18n.locale == 'ar'">
          <img
            src="//cdn.shopify.com/s/files/1/3000/4362/files/Untitled-1_a6547468-5701-4807-94b7-495f7130594d_2048x.jpg?v=1563943428"
            alt
          />
        </div>
        <div class="col-md-8" v-if=" $i18n.locale == 'ar'">
          <p>
            {{ $t("message.ourmissiontext1") }}
          </p>
          <p>
            {{ $t("message.ourmissiontext2") }}&nbsp;
          </p>
        </div>
      </div>
    </div>
    <div class="artists mt-4 mb-2">
        <h3 class="title" @click="artist = !artist" v-if="!artist"> <span>{{ $t("message.artists") }}</span > <span class="plus" v-if="artist==false">+</span>   </h3>
        <h3 class="title" @click="artist = !artist" v-else>{{ $t("message.artists") }} <span class="false" v-if="artist==true">-</span> </h3>
        <div class=" mt-5 text-center" v-if="artist">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">
                      {{ $t("message.artisttext") }}
                    </p>
                </div>
                <div class="col-sm-12">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-4 col-md-3 col-lg-2" v-for="artist in artists" :key="artist.id">
                          <div class="about-team__people">
                              <img :src="artist.artist_img" alt="artist" style="border-radius:28%;width:100px;height:100px">
                              <h4 class="about-team__name">{{artist.name}}</h4>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </section>
</template>

<script>
import $ from "jquery";
export default {
  data() {
    return {
      artists: [],
      mission: true,
      artist: false,
      form: {
        name: null,
        email: null,
        phone: null,
        message: null
      },
      errors: {}
    };
  },
  created() {
    axios
      .get("/api/palettes")
      .then(response => {
        this.artists = response.data.artists;
      })
      .catch(error => console.log(error.response.data));
  },

};
</script>

<style scoped>
.row {
  margin: 0;
  padding: 0;
}
.title {
  font-size: 34px;
  font-weight: bold;
  line-height: 60px;
  margin: 0;
  margin-bottom: 1px;
  cursor: pointer;
  transition: all 0.4s;
  text-align: center;
  background: #f2efeb;
}
.title:hover {
  background: #e6e1da;
}
.about-team__people {
  margin: 0 20px 30px;
}
.about-team__people img {
  width: 120px;
}
.topteam {
  margin-bottom: 30px;
  border-bottom: 2px solid #eee;
  width: 70%;
  margin-left: auto;
  margin-right: auto;
}
.left {
  border-right: 2px solid #000;
  padding-left: 300px;
}
@media (max-width: 991px) {
  .left {
    border-right: none;
    padding-left: 0;
  }
}
@media (min-width: 992px) and (max-width: 1999px) {
  .left {
    padding-left: 150px;
  }
}
.form {
  width: 50%;
  margin: auto;
}
</style>
