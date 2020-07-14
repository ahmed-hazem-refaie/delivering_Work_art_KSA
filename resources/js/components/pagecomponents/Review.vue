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
            <v-rating v-if="$i18n.locale == 'en'" v-model="form.rating" color="orange" medium></v-rating>
            <v-rating v-else style="float:right;" dir="rtl" v-model="rating" color="orange" medium></v-rating>
            <div style="clear:both"></div>
            <v-form class="form" v-if="$i18n.locale == 'en'">
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
                        v-model="form.message"
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
                <v-btn color="#f2efeb" style="margin-left:12px" type="submit">Post</v-btn>
            </v-form>
            <v-form class="form" v-else>
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
                        v-model="form.message"
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
                <v-btn color="#f2efeb" style="margin-left:12px;float:right" type="submit">إرسال</v-btn>
                <div style="clear:both"></div>
            </v-form>
        </div>
          <v-card class="card">
              
                <div class="userimg">
                    <div class="userimg2">
                        <span>{{str.charAt(0).toUpperCase()}}</span>
                    </div>
                    
                </div>
                <div style="width:95%;display:inline-block"> 
                    <v-card-subtitle class="pb-0">Atabak J.Verified Buyer <span style="float:right">20/7/2020</span></v-card-subtitle>
                    <div style="clear:both"></div>
                    <span class="ml-2">
                        <span class="fa fa-star text-warning ml-1" v-for="i in 5" :key="i.id"></span>
                    </span>
                </div>
            <v-card-text class="text--primary">
                <h5 style="font-weight:bold;color:#000">Love my new artwork! I</h5>

                <div>Love my new artwork! I had no instructions included, so I had to wing it. It was a bit difficult to get everything
                    aligned properly, but it's aligned enough now. Other than that, awesome support and awesome artworks!</div>
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
                    <v-icon>mdi-thumb-up</v-icon>
                </v-btn>

                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-down</v-icon>
                </v-btn>
            </span>
            <span style="float:right" v-else>
                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-up</v-icon>
                </v-btn>

                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-down</v-icon>
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
        
        str:"hello",
        review:false,
        form:{
            rating: 0,
            title:null,
            email:null,
            name:null,
            message:null
        },
    }),
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