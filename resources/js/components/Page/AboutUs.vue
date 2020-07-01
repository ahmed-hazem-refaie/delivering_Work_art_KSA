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
          <div class=" mt-5" v-if="support">
                <p class="text-center">Do you have any questions? Have a look at the categories below, and if these don't include the answer you were looking for, please feel free to shoot us an email.</p>
                <div class="row justify-content-md-center support_div text-center">
                    <div class="col-md-2 content " @click="activate(1)" :class="{ active : active_el == 1 }">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/support-1.svg?v=12010384132983907058" style="height: 110px">
                        <h3 class="mt-4">Product</h3>                    
                    </div>
                    <div class="col-md-2 content" @click="activate(2)" :class="{ active : active_el == 2 }">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/support-2.svg?v=16172020802828672890" style="height: 110px">
                        <h3 class="mt-4">Shipping</h3>   
                    </div>
                    <div class="col-md-2 content" @click="activate(3)" :class="{ active : active_el == 3 }">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/support-3.svg?v=6657556400331861725" style="height: 110px">
                        <h3 class="mt-4">Collabs</h3>
                    </div>
                    <div class="col-md-2 content" @click="activate(4)" :class="{ active : active_el == 4 }">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/support-4.svg?v=13401101258815370791" style="height: 110px">
                        <h3 class="mt-4">Terms</h3>
                    </div>
                    <div class="col-md-2 content" @click="activate(5)" :class="{ active : active_el == 5 }">
                        <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/support-5.svg?v=6164253995379968036" style="height: 110px">
                        <h3 class="mt-4">Contact</h3>
                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="col-sm-12" v-if="active_el==1">
                        <div class="row ">
                            <div class="col-sm-5 text-center left">
                                <p class="font-weight-bold mb-5">What are Walltones?</p>
                                <p class="font-weight-bold mb-5">What are Knitworks?</p>
                                <p class="font-weight-bold mb-4">How do I assemble my Walltone?</p>
                                <p class="font-weight-bold mb-4">How do I assemble my Knitwork?</p>
                                <p class="font-weight-bold mb-4">What are the exact dimensions/materials of my artwork?</p>
                                <p class="font-weight-bold mb-4"> I need any tools to hang my artwork?</p>
                            </div>
                            <div class="col-sm-7">
                                <p>
                                    Walltones are our affordable and easy to hang canvas posters.
                                    They come in three different sizes, always complete with a special magnetic frame. Each Walltone is part of a limited edition.
                                </p>
                                <p>
                                    Knitworks are luxurious artworks on fabric, often using a combination of printing and painting techniques. The fabric is stretched
                                    into a sturdy metal frame. Like Walltones, they are always part of a limited edition.
                                </p>
                                <p>
                                    Align the pairs of magnetic frames with the top and bottom of your artwork.
                                    The included adhesive strips or screw can be used to stick only the top frame, or both frames to your wall.
                                </p>
                                <p>You can find Knitwork assembly instructions on the manual inside the box.</p>
                                <p>
                                    When you buy an artwork, you can find the specifications in the dropdown menus underneath the product description.
                                    If you have any questions not answered in there, feel free to ask us.
                                </p>
                                <p>
                                    If the included adhesive strips are not suitable for your wall,
                                    you can use the included screw and plug. Only when using the screw and plug you will need a drill and screwdriver.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" v-if="active_el==2">
                        <div class="row ">
                            <div class="col-sm-5 text-center left">
                                <p class="font-weight-bold mb-5">Do you ship to my country?</p>
                                <p class="font-weight-bold mt-3">What about returns and shipping time?</p>
                            </div>
                            <div class="col-sm-7">
                                <p>
                                    We ship worldwide. If you are worried that your country might not accept our products because
                                    of regulation or customs policies, please send us an email explaining the situation and we will
                                    try to find out what is the best solution.                                
                                </p>
                                <p>
                                    After placing your order, the whole process of preparing, packing and shipping
                                    to your doorstep can take approximately 15 business days depending on your location.
                                    Orders get sent out within 24 hours on average, after which you won't be able to cancel
                                    our order since the package will already be in transit. You can however, return your
                                    package for a full refund within 30 days.
                                </p>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-12" v-if="active_el==3">
                        <div class="row ">
                            <div class="col-sm-5 text-center left">
                                <p class="font-weight-bold mb-4">I'm an artist, how can we work together?</p>
                                <p class="font-weight-bold ">I'm an influencer, how can we work together?</p>
                            </div>
                            <div class="col-sm-7">
                                <p>
                                    Awesome! Please send us an email with a link to your portfolio, instagram,
                                    or any other media you want us to review. We'll be happy to take a look.                               
                                </p>
                                <p>
                                    We don't work with a lot of influencers, but if you connect with an audience
                                    that you think would love our brand, we're very open to talk about it. Please shoot us an email!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" v-if="active_el==4">
                        <div class="row ">
                            <div class="col-sm-5 text-center left">
                                <p class="font-weight-bold mb-3 ">What are the terms of this website?</p>
                                <p class="font-weight-bold mb-3">How do you treat my privacy?</p>
                                <p class="font-weight-bold ">How can I get a refund?</p>
                            </div>
                            <div class="col-sm-7">
                                <p>
                                    Read our terms <router-link to="/terms"> here</router-link> .                            
                                </p>
                                <p>
                                    Read our Privacy Policy <router-link to="/privacy"> here</router-link> .
                                </p>
                                <p>
                                    Read our Refund Policy <router-link to="/refund"> here</router-link> .
                                </p>
                            </div>
                        </div>
                    </div>    
                    <div class="col-sm-12" v-if="active_el==5">
                        <v-form class="form">
                            <v-container>
                            <v-row>
                                <v-col
                                cols="12"
                                md="6"
                                >
                                <v-text-field
                                    v-model="form.name"
                                    label="First name"
                                    required
                                ></v-text-field>
                                </v-col>
                                <v-col
                                cols="12"
                                md="6"
                                >
                                <v-text-field
                                    v-model="form.email"
                                    label="E-mail"
                                    required
                                ></v-text-field>
                                </v-col>
                                <v-col
                                cols="12"
                                md="12"
                                >
                                <v-text-field
                                    v-model="form.phone"
                                    label="Phone Number"
                                    required
                                ></v-text-field>
                                </v-col>
                                <v-col cols="12" md="12">
                                    <v-textarea
                                    v-model="form.message"
                                    outlined
                                    name="input-7-4"
                                    label="Message"
                                    ></v-textarea>
                                </v-col>

                            </v-row>
                            <v-btn color="#f2efeb" style="margin-left:12px" type="submit">Send</v-btn>
                            </v-container>
                        </v-form>
                    </div>                         
                </div>
          </div>
      </div>
      <div class="artists mt-4">
          <h3 class="title" @click="artist = !artist" v-if="!artist">Artists +</h3>
          <h3 class="title" @click="artist = !artist" v-else>Artists -</h3>
          <div class=" mt-5 text-center" v-if="artist">
              <div class="row">
                  <div class="col-sm-12">
                      <p class="text-center">
                          Behind every artwork we sell, there are ideas, visions, amazing artists and great stories.
                          On this page we highlight some of that. If you want to learn more about an artwork you are
                          about to buy, but the artist is not listed on this page, click on their name during shopping
                          and you will get redirected straight to their most important social media account or website.
                      </p>
                  </div>
                  <div class="col-sm-12">
                      <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/artists_0009_Justin-vangenderen_400x.png?v=1565176647" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/Untitled-1_9a196293-547f-4fab-badb-dbc38cc8d9e3_400x.jpg?v=1583776217" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/SwadeProfile1_400x.jpg?v=1584779828" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/Icon2_400x.jpg?v=1589612708" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/artists_0006_Daniel-Ignacio_400x.png?v=1565176694" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/artists_0005_Dorian-Legret_400x.png?v=1565176708" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/artists_0004_Seamless_400x.png?v=1565176729" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/new_profile_pic_2019_smaller---Justin-Johnson1_400x.jpg?v=1573648691" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/Untitled-2_400x.jpg?v=1578046949" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/artists_0007_Zach-Doehler_400x.png?v=1565176681" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/artists_0003_Mooncrab_400x.png?v=1565176751" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="about-team__people">
                                <img src="//cdn.shopify.com/s/files/1/3000/4362/files/artists_0008_Rannva-Joenssen_400x.png?v=1565176666" alt="">
                                <h3 class="about-team__name">Justin vanGenderenr</h3>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="news mt-4 mb-4">
          <h3 class="title" @click="news = !news" v-if="!news">News +</h3>
          <h3 class="title" @click="news = !news" v-else>News -</h3>
          <div class=" mt-5 text-center" v-if="news">
              <div class="row">
                  <div class="col-md-4 col-lg-3" >
                        <v-card
                            class="mx-auto"
                            max-width="400"
                        >
                            <v-img
                            class="white--text align-end"
                            height="200px"
                            src="//cdn.shopify.com/s/files/1/3000/4362/articles/News-Ecstase-This-Too-Shall-Pass_800x.jpg?v=1587992505"
                            >
                            <v-card-title>Ecstase Originals</v-card-title>
                            </v-img>

                            <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <div>Ecstase Originals are created in collaboration with an artist exclusively for Ecstase.com We love curating incredible artworks, collaborating with talented artists around the planet, and bringing our particular style</div>
                            </v-card-text>
                        </v-card>
                  </div>
                 <div class="col-md-4 col-lg-3" >
                        <v-card
                            class="mx-auto"
                            max-width="400"
                        >
                            <v-img
                            class="white--text align-end"
                            height="200px"
                            src="//cdn.shopify.com/s/files/1/3000/4362/articles/Inner_Tranquility_Room_Image_800x.jpg?v=1586870251"
                            >
                            <v-card-title>Ecstase Originals</v-card-title>
                            </v-img>

                            <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <div>Ecstase Originals are created in collaboration with an artist exclusively for Ecstase.com We love curating incredible artworks, collaborating with talented artists around the planet, and bringing our particular style</div>
                            </v-card-text>
                        </v-card>
                  </div>
                    <div class="col-md-4 col-lg-3" >
                        <v-card
                            class="mx-auto"
                            max-width="400"
                        >
                            <v-img
                            class="white--text align-end"
                            height="200px"
                            src="//cdn.shopify.com/s/files/1/3000/4362/articles/Loneliness_-_dorianlegret_800x.jpg?v=1585570668"
                            >
                            <v-card-title>Ecstase Originals</v-card-title>
                            </v-img>

                            <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <div>Ecstase Originals are created in collaboration with an artist exclusively for Ecstase.com We love curating incredible artworks, collaborating with talented artists around the planet, and bringing our particular style</div>
                            </v-card-text>
                        </v-card>
                  </div>
                    <div class="col-md-4 col-lg-3" >
                        <v-card
                            class="mx-auto"
                            max-width="400"
                        >
                            <v-img
                            class="white--text align-end"
                            height="200px"
                            src="//cdn.shopify.com/s/files/1/3000/4362/articles/frail_lull_800x.png?v=1581557948"
                            >
                            <v-card-title>Ecstase Originals</v-card-title>
                            </v-img>

                            <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <div>Ecstase Originals are created in collaboration with an artist exclusively for Ecstase.com We love curating incredible artworks, collaborating with talented artists around the planet, and bringing our particular style</div>
                            </v-card-text>
                        </v-card>
                  </div>
                    <div class="col-md-4 col-lg-3" >
                        <v-card
                            class="mx-auto"
                            max-width="400"
                        >
                            <v-img
                            class="white--text align-end"
                            height="200px"
                            src="//cdn.shopify.com/s/files/1/3000/4362/articles/Astrocloud_sample_800x.JPG?v=1568018009"
                            >
                            <v-card-title>Ecstase Originals</v-card-title>
                            </v-img>

                            <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <div>Ecstase Originals are created in collaboration with an artist exclusively for Ecstase.com We love curating incredible artworks, collaborating with talented artists around the planet, and bringing our particular style</div>
                            </v-card-text>
                        </v-card>
                  </div>
                    <div class="col-md-4 col-lg-3" >
                        <v-card
                            class="mx-auto"
                            max-width="400"
                        >
                            <v-img
                            class="white--text align-end"
                            height="200px"
                            src="//cdn.shopify.com/s/files/1/3000/4362/articles/Copy_of_Screen_Shot_2018-11-12_at_12.12.46_800x.png?v=1567767130"
                            >
                            <v-card-title>Ecstase Originals</v-card-title>
                            </v-img>

                            <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <div>Ecstase Originals are created in collaboration with an artist exclusively for Ecstase.com We love curating incredible artworks, collaborating with talented artists around the planet, and bringing our particular style</div>
                            </v-card-text>
                        </v-card>
                  </div>
                    <div class="col-md-4 col-lg-3" >
                        <v-card
                            class="mx-auto"
                            max-width="400"
                        >
                            <v-img
                            class="white--text align-end"
                            height="200px"
                            src="//cdn.shopify.com/s/files/1/3000/4362/articles/ecstase_800x.jpg?v=1565796030"
                            >
                            <v-card-title>Ecstase Originals</v-card-title>
                            </v-img>

                            <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                            <v-card-text class="text--primary">
                            <div>Ecstase Originals are created in collaboration with an artist exclusively for Ecstase.com We love curating incredible artworks, collaborating with talented artists around the planet, and bringing our particular style</div>
                            </v-card-text>
                        </v-card>
                  </div>

              </div>
          </div>
      </div>
  </section>
</template>

<script>
import $ from 'jquery';
export default {
    data(){
        return {
            mission: false,
            team:false,
            support:false,
            artist:false,
            news:false,
            active_el:1,
            form:{
                name:null,
                email:null,
                phone:null,
                message:null
            },
            errors:{

            }
        }
    },
      methods:{
    activate:function(el){
        this.active_el = el;
    }
  }
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
    .support_div .content{
        color:grey;
        cursor: pointer;
    }
    .support_div .active{
        color: black;
        font-weight: bold;
    }
    .left{
        border-right:2px solid #000;padding-left:300px
    }
    @media (max-width: 991px){
        .left{
            border-right:none ;
            padding-left: 0;
        }
    }
    @media (min-width: 992px) and (max-width:1999px){
        .left{
            padding-left: 150px;
        }
    }
    .form{
        width: 50%;
        margin: auto;
    }
</style>