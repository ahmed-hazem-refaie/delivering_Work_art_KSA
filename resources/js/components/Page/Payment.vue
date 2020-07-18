<template>
  <section>
    <div class="row">
      <div class="col-md-7">
        <v-form class="form" @submit.prevent="send">
          <v-container>
            <v-row>
              <h4>Contact information</h4>
              <v-col cols="12" md="12">
                <v-text-field v-model="form.email" label="E-mail" required></v-text-field>
              </v-col>
              <!-- <v-checkbox
                        v-model="form.checkbox"
                        :rules="[v => !!v || 'You must agree to continue!']"
                        label="Keep me up to date on news and exclusive offers"
                        required
              ></v-checkbox>-->

              <v-col cols="12" md="6">
                <v-text-field v-model="form.fname" label="First name" required></v-text-field>
              </v-col>

              <v-col cols="12" md="6">
                <v-text-field v-model="form.lname" label="Last name" required></v-text-field>
              </v-col>
              <v-col cols="12" md="12">
                <v-text-field v-model="form.address" label="Address" required></v-text-field>
              </v-col>
              <v-col cols="12" md="12">
                <v-text-field v-model="form.apartment" label="Apartment, Suite, etc. (optional)"></v-text-field>
              </v-col>
              <v-col cols="12" md="12">
                <v-text-field v-model="form.city" label="City" required></v-text-field>
              </v-col>
              <v-col class="d-flex" cols="12" sm="4">
                <v-select v-model="form.country" :items="item" label="Country/Reagion" outlined></v-select>
              </v-col>
              <v-col class="d-flex" cols="12" sm="4">
                <v-select
                  v-model="form.goverment"
                  item-text="name"
                  item-value="last"
                  :items="item"
                  label="Governorate"
                  outlined
                ></v-select>
              </v-col>
              <v-col cols="12" sm="4">
                <v-text-field v-model="form.postcode" label="Postcode" required></v-text-field>
              </v-col>
              <v-col cols="12" md="12">
                <v-text-field v-model="form.phone" label="Phone" required></v-text-field>
              </v-col>
            </v-row>
            <v-btn color="#5cbbff" type="submit">Continue to Shipping</v-btn>
            <span v-if="errors">{{errors}}</span>
            <span v-else>{{message}}</span>
          </v-container>
        </v-form>
      </div>
      <div class="col-md-5" style="background-color:#eaeaea">
        <div class="discount_section mt-5">
          <div class="img">
            <img
              src="//cdn.shopify.com/s/files/1/3000/4362/products/Ehmiyat_Walltones_Product_Image_1.jpg?v=1581337922"
            />
            <span>All I Ever Wanted Was Everything</span>
            <span style="float:right">$70.00</span>
            <div style="clear:both"></div>
            <h6 style="width: 50%;margin-left: 70px;">70x93.5cm (28x37")</h6>
          </div>
          <hr />
          <div class="discount">
            <v-form class="form_discount">
              <v-text-field v-model="discount" label="Discount"></v-text-field>
              <v-btn class="mr-4">Apply</v-btn>
            </v-form>
          </div>
          <hr />
          <div class="discount_text" style="color:#737171;padding:10px">
            <div>
              <span>Subtotal</span>
              <span style="float:right">$70.00</span>
              <div style="clear:both"></div>
            </div>
            <div class="mt-3">
              <span>Shipping</span>
              <span style="float:right">Calculated at next step</span>
              <div style="clear:both"></div>
            </div>
          </div>
          <hr />
          <div style="font-size:20px;padding:10px">
            <span>Total</span>
            <span style="float:right;">
              <span style="color:#737171;">USD</span> $70.00
            </span>
            <div style="clear:both"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: null,
        lname: null,
        address: null,
        fname: null,
        apartment: null,
        city: null,
        phone: null,
        country: null,
        goverment: null,
        postcode: null,
        items: [
          {
            paletteid: 1,
            palettesize: "medium",
            quantity: 2
          }
        ]
      },
      discount: "",
      item: ["Egypt", "Russian", "Franch", "Brazil"],
      errors: {},
      nameRules: [v => !!v || "Name is required"],
      checkbox: false,
      message: ""
    };  
  },
  created(){
      console.log(this.$route.query.myprop) 
  },
  methods: {
    send() {
      axios
        .post("/api/add-order", this.form)
        .then(data => {
          console.log(data.data);
          if (!data.data.status) {
            console.log(data.data);
            this.errors = data.data.errors;
          } else {
            this.message = "donnnnnnnnnnnnnnnnne";
          }
        })

        .catch(error => (this.errors = error.response.data.errors));
    }
  }
};
</script>

<style scoped>
.form {
  width: 60%;
  margin: auto;
}
.img img {
  width: 62px;
  height: 70px;
}
.form_discount {
  width: 70%;
  padding: 10px;
}
.discount_section {
  width: 65%;
}
@media (min-width: 767px) and (max-width: 991px) {
  .discount_section {
    width: 100%;
  }
}
</style>