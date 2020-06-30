<template>
  <section>
      <div class="mission mt-4">
          <h3 class="title" @click="mission = !mission" v-if="!mission">Our mession +</h3>
          <h3 class="title" @click="mission = !mission" v-else>Our mession -</h3>
          <div class="row mt-5 text-center" v-if="mission">
                <div class="col-md-8">
                    <p>
                        You, like everyone else on this planet, were born a creative
                        person with good intentions. Able to change the world in ways
                        so much bigger than you probably can imagine right now. All
                        the rules of society then programmed you to think and calculate
                        yourself through life in a way that is useful and not disturbing
                        anyone else. Conforming to this norm made you fit in, but also
                        stripped you of your boundless childlike creativity, imagination and lust for exploration.
                    </p>
                    <p>
                        Right now, what the world needs most, is people who find that
                        version of themselves back again. People who come alive again.
                        People who wonder, can be amazed and feel ecstatic like they
                        did when they were little kids. Bringing you alive again, and
                        reminding you of the version of yourself that can do anything, that is our mission.&nbsp;
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="//cdn.shopify.com/s/files/1/3000/4362/files/Untitled-1_a6547468-5701-4807-94b7-495f7130594d_2048x.jpg?v=1563943428" alt="">                 
                </div>
          </div>
      </div>
      <div class="ourteam mt-4">
            <h3 class="title" @click="team = !team" v-if="!team">The team +</h3>
            <h3 class="title" @click="team = !team" v-else>The team -</h3>
            <div class="row text-center mt-5 topteam" v-if="team">
                    <div class="col-sm-6 col-lg-4">
                        <div class="about-team__people">
                            <img src="//cdn.shopify.com/s/files/1/3000/4362/files/avt_400x.png?v=1563954094" alt="">
                            <h3 class="about-team__name">Mark de Boer</h3>
                            <p class="about-team__job">Owner &amp; Marketing</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="about-team__people">
                            <img src="//cdn.shopify.com/s/files/1/3000/4362/files/avt2_400x.png?v=1563954101" alt="">
                            <h3 class="about-team__name">Nick Schijvens</h3>
                            <p class="about-team__job">Owner &amp; Product</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="about-team__people">
                            <img src="//cdn.shopify.com/s/files/1/3000/4362/files/Untitled-3_400x.png?v=1581493308" alt="">
                            <h3 class="about-team__name">Julija Mockute</h3>
                            <p class="about-team__job">Art director</p>
                        </div>
                    </div>
            </div>
            <div class="row text-center mt-5 midteam" v-if="team">
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0000_Dragana_400x.png?v=1565170625" alt="">
                        <h3 class="about-team__name">Dragana</h3>
                        <p class="about-team__job">Content manager</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0001_Rezyl_400x.png?v=1565170678" alt="">
                        <h3 class="about-team__name">Rezyl</h3>
                        <p class="about-team__job">Customer support manager</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0006_Clyde_400x.png?v=1565170724" alt="">
                        <h3 class="about-team__name">Clyde</h3>
                        <p class="about-team__job">Social media marketeer</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0007_Tanya_400x.png?v=1565171102" alt="">
                        <h3 class="about-team__name">Tanya</h3>
                        <p class="about-team__job">Brand visibility marketeer</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0004_Luka_400x.png?v=1565170762" alt="">
                        <h3 class="about-team__name">Luka</h3>
                        <p class="about-team__job">Email marketeer</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0002_Samantha_400x.png?v=1565170801" alt="">
                        <h3 class="about-team__name">Samantha</h3>
                        <p class="about-team__job">Copywriter</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0003_Ioanna_400x.png?v=1565170524" alt="">
                        <h3 class="about-team__name">Ioanna</h3>
                        <p class="about-team__job">Art manager</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0009_Sarah_400x.png?v=1565170549" alt="">
                        <h3 class="about-team__name">Sarah</h3>
                        <p class="about-team__job">Communications manager</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0010_Ieva_400x.png?v=1565170589" alt="">
                        <h3 class="about-team__name">Ieva</h3>
                        <p class="about-team__job">Collaborations manager</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0005_Sinisa_400x.png?v=1565170840" alt="">
                        <h3 class="about-team__name">Sinisa</h3>
                        <p class="about-team__job">Product manager</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="about-team__people">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/files/team_0012_Tran_400x.png?v=1565171725" alt="">
                        <h3 class="about-team__name">Khoa</h3>
                        <p class="about-team__job">Web developer</p>
                    </div>
                </div>               
            </div>
      </div>
      <div class="support mt-4">
          <h3 class="title" @click="support = !support" v-if="!support">Support +</h3>
          <h3 class="title" @click="support = !support" v-else>Support -</h3>
          <div class=" mt-5 text-center" v-if="support">
              <h2>Support</h2>
          </div>
      </div>
      <div class="artists mt-4">
          <h3 class="title" @click="artist = !artist" v-if="!artist">Artists +</h3>
          <h3 class="title" @click="artist = !artist" v-else>Artists -</h3>
          <div class=" mt-5 text-center" v-if="artist">
              <h2>Artists</h2>
          </div>
      </div>
      <div class="news mt-4 mb-4">
          <h3 class="title" @click="news = !news" v-if="!news">News +</h3>
          <h3 class="title" @click="news = !news" v-else>News -</h3>
          <div class=" mt-5 text-center" v-if="news">
              <h2>News</h2>
          </div>
      </div>
  </section>
</template>

<script>
export default {
    data(){
        return {
            mission: false,
            team:false,
            support:false,
            artist:false,
            news:false
        }
    },
}
</script>

<style scoped>
    .row{
        margin: 0;
        padding: 0;
    }
     .title{
        font-size: 34px;
        font-weight: bold;
        line-height: 60px;
        margin: 0;
        margin-bottom: 1px;
        cursor: pointer;
        transition: all .4s;
        text-align: center;
        background: #f2efeb;
    }
    .title:hover{
        background: #e6e1da;
    }
    .about-team__people{
        margin: 0 20px 30px;
    }
    .about-team__people img{
        width: 120px;
    }
    .topteam{
        margin-bottom: 30px;
        border-bottom: 2px solid #eee;
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }

</style>