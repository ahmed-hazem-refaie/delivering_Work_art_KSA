<template>
    <div class="container mt-5" style="max-width:1462px">
        <h2 v-if="$i18n.locale == 'en'">{{ $t("message.customerreviews") }}</h2>
        <h2 style="float:right" v-else>{{ $t("message.customerreviews") }}</h2>
        <div style="clear:both"></div>
        <hr>
        <div class="rating" v-if="$i18n.locale == 'en'">
            <span class="fa fa-star text-warning" v-for="i in 5" :key="i.id"></span>
            <span class="ml-2">193 {{ $t("message.review") }}</span>
            <v-btn style="background-color:black;color:#fff;float:right" @click="review = !review"><i class="fa fa-edit mr-2"></i>{{ $t("message.writereview") }}</v-btn>
            <div style="clear:both"></div>
        </div>
        <div class="rating" v-else>
            <v-btn style="background-color:black;color:#fff;" @click="review = !review"><i class="fa fa-edit mr-2"></i>{{ $t("message.writereview") }}</v-btn>
            <span class="fa fa-star text-warning" style="float:right" v-for="i in 5" :key="i.id"></span>
            <span class="mr-2" style="float:right">193 {{ $t("message.review") }}</span>
            <div style="clear:both"></div>

        </div>
        <hr>
        <div v-if="review">
            <h6 v-if="$i18n.locale == 'en'" style="color:#b2b8bd" class="mb-4">{{ $t("message.writereview") }}</h6>
            <h6 v-else style="color:#b2b8bd;float:right"  class="mb-4">{{ $t("message.writereview") }}</h6>
            <div style="clear:both"></div>
            <h6 class="mb-4" v-if="$i18n.locale == 'en'">{{ $t("message.score") }}</h6>
            <h6 class="mb-4" v-else style="float:right">{{ $t("message.score") }}</h6>
            <div style="clear:both"></div>
            <v-rating v-if="$i18n.locale == 'en'" v-model="form.rate" color="orange" medium></v-rating>
            <v-rating v-else style="float:right;" dir="rtl" v-model="form.rate" color="orange" medium></v-rating>
            <div style="clear:both"></div>
            <v-form class="form" v-if="$i18n.locale == 'en'" @submit.prevent="send">
                <v-row>
                    <v-col
                    cols="12"
                    sm="12"
                    >
                    <v-text-field
                        v-model="form.title"
                        label="Title"
                        required
                    ></v-text-field>
                    </v-col>
                    <v-col cols="12" md="12">
                        <v-textarea
                        v-model="form.body"
                        outlined
                        required
                        label="Review"
                        ></v-textarea>
                    </v-col>
                    <v-col
                    cols="12"
                    md="6"
                    >
                    <v-text-field
                        v-model="form.name"
                        label="Use Your Name"
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
                </v-row>
                <v-btn color="#f2efeb" style="margin-left:12px;margin-bottom:10px" type="submit">Post</v-btn>
            </v-form>
            <v-form class="form" v-else @submit.prevent="send">
                <v-row>
                    <v-col
                    cols="12"
                    sm="12"
                    >
                    <v-text-field
                        v-model="form.title"
                        label="العنوان"
                        required
                        dir="rtl"
                    ></v-text-field>
                    </v-col>
                    <v-col cols="12" md="12">
                        <v-textarea
                        v-model="form.body"
                        outlined
                        required
                        dir="rtl"
                        label="أكتب رأيك"
                        ></v-textarea>
                    </v-col>
                    <v-col
                    cols="12"
                    md="6"
                    >
                    <v-text-field
                        v-model="form.name"
                        label="أستخدم أسمك"
                        required
                        dir="rtl"
                    ></v-text-field>
                    </v-col>
                    <v-col
                    cols="12"
                    md="6"
                    >
                    <v-text-field
                        v-model="form.email"
                        label="اﻷيميل"
                        required
                        dir="rtl"
                    ></v-text-field>
                    </v-col>
                </v-row>
                <v-btn color="#f2efeb" style="margin-left:12px;float:right;margin-bottom:10px" type="submit">إرسال</v-btn>
                <div style="clear:both"></div>
            </v-form>
        </div>
          <v-card class="card" v-for="(review,index) in reviews" :key="index">
              
                <div class="userimg">
                    <div class="userimg2">
                        <span>{{review.name.charAt(0).toUpperCase()}}</span>
                    </div>
                    
                </div>
                <div style="width:95%;display:inline-block"> 
                    <v-card-subtitle class="pb-0">{{review.name}} <span style="float:right">{{review.created_at}}</span></v-card-subtitle>
                    <div style="clear:both"></div>
                    <span class="ml-2">
                        <span class="fa fa-star text-warning ml-1" v-for="i in review.rate" :key="i"></span>
                    </span>
                </div>
            <v-card-text class="text--primary">
                <h5 style="font-weight:bold;color:#000">{{review.title}}</h5>

                <div>
                    {{review.body}}
                </div>
            </v-card-text>

            <v-card-actions style="display:block">
            <v-btn
                text
            >
               <i class="fa fa-share-square"></i> {{ $t("message.share") }}
            </v-btn>
            <span style="float:right" v-if="$i18n.locale == 'en'">
                {{ $t("message.checkreview") }}
                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-up</v-icon>{{review.like_counter}}
                </v-btn>

                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-down</v-icon> &nbsp;{{review.dislike_counter}}
                </v-btn>
            </span>
            <span style="float:right" v-else>
                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-up</v-icon> {{review.like_counter}}
                </v-btn>

                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-down</v-icon> &nbsp;{{review.dislike_counter}}
                </v-btn>
                {{ $t("message.checkreview") }}
            </span>
            <div style="clear:both"></div>
            </v-card-actions>
        </v-card>
    </div>
  
</template>

<script>
export default {
    data: () => ({        
        review:false,
        form:{
            rate: 0,
            title:null,
            email:null,
            name:null,
            body:null
        },
        reviews:[]
    }),
        methods:{
        send(){
            axios.post('/reviews',{
                rate : this.form.rate,
                title : this.form.title,
                name : this.form.name,
                email : this.form.email,
                body : this.form.body,
                like_counter:1,
                dislike_counter:2
            })
            .then(res =>{ 
                this.review=false
                this.$router.push({name:'home'})
            })
            .catch(error => this.errors = error.response.data.errors)
        }
    },
  created() {
    axios
      .get("/api/review")
      .then(response => {
        this.reviews = response.data.review;
      })
      .catch(error => console.log(error.response.data));
  },
}
</script>

<style scoped>
    .userimg{
        position: relative;
        display: inline-block;
        text-align: center;
        width: 53px;
        height: 53px;
        top: 7px;

    }
    .userimg2{
        position: relative;
        display: inline-block;
        text-align: center;
        width: 53px;
        height: 53px;
        border-radius: 50%;
        background-color: black;
        color: #fff;
    }
    .userimg span{
        position:absolute;
        top:30%;
        left: 23px;
    }
.v-card>.userimg {
    border-top-left-radius: none !important;
    border-top-right-radius: none !important;
    
}
</style>