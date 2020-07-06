<template>
    <div class="container mt-4" style="max-width:1462px">
        <h2>Customer Reviews</h2>
        <hr>
        <div class="rating">
            <span class="fa fa-star text-warning" v-for="i in 5" :key="i.id"></span>
            <span class="ml-2">193 Review</span>
            <v-btn style="background-color:black;color:#fff;float:right" @click="review = !review"><i class="fa fa-edit mr-2"></i>Write Review</v-btn>
            <div style="clear:both"></div>
        </div>
        <hr>
        <div v-if="review">
            <h6 style="color:#b2b8bd" class="mb-4">Write Review</h6>
            <h6 class="mb-4">Indicates a required field</h6>
            <h6 class="mb-4">Score</h6>
            <v-rating v-model="rating" medium></v-rating>
            <v-form class="form">
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
        </div>
        <h5 class="mt-5">Reviews (193)</h5>
        <hr>
          <v-card>
            <v-card-subtitle class="pb-0">Atabak J.Verified Buyer <span style="float:right">20/7/2020</span></v-card-subtitle>
            <div style="clear:both"></div>
            <span class="ml-2">
                <span class="fa fa-star text-warning ml-1" v-for="i in 5" :key="i.id"></span>
            </span>
            <v-card-text class="text--primary">
            <div>Love my new artwork! I</div>

            <div>Love my new artwork! I had no instructions included, so I had to wing it. It was a bit difficult to get everything
                 aligned properly, but it's aligned enough now. Other than that, awesome support and awesome artworks!</div>
            </v-card-text>

            <v-card-actions style="display:block">
            <v-btn
                color="orange"
                text
            >
               <i class="fa fa-share-square"></i> Share
            </v-btn>
            <span style="float:right">
                Was This Review Helpful?
                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-up</v-icon>
                </v-btn>

                <v-btn class="ma-2" text icon>
                    <v-icon>mdi-thumb-down</v-icon>
                </v-btn>
            </span>
            <div style="clear:both"></div>
            </v-card-actions>
        </v-card>
    </div>
  
</template>

<script>
export default {
    data: () => ({
        rating: 0,
        review:false,
        form:{
            title:null,
            email:null,
            name:null,
            message:null
        },
    }),
}
</script>

<style scoped>

</style>