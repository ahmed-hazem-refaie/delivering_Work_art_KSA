<template>
  <section>
    <div class="row">
      <div class="col-md-7">
                                                                      <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div    class="modal show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" show='true'>
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                                     <div class="modal-content" style="display: contents;">


                                                        <div class="moda-body">
                                                                ss
                                                          <form action="/api/payment/40" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>

                                                        </div>



                                                 </div>
                                        </div>
                                 </div>
        <v-form class="form" @submit.prevent="send">
          <v-container>
                            <div   v-if="errors.length > 0 && !message" class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Sorry!</strong> You should check in on some of those fields below.
                                    <br>
                                    <ul >
                                        <li v-for="item in errors">
                                            {{ item }}
                                        </li>
                                    </ul>



                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div   v-if=" message.length >0 " class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <h1> Done</h1>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>


            <v-row>
              <h4>Contactsss information </h4>
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
          <div class="img"
       v-for="item in cart"
      :key="item.product.id"

          >
            <img
             :src="item.product.img"
            />
            <span> <strong>{{ item.product.name }}</strong></span>
            <span style="float:right">{{ item.quantity }} x ${{item.product.L_price}}</span>
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
              <span style="color:#737171;">USD</span> $ {{cartTotalPrice}}
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

    computed: {
    cartTotalPrice() {
      return this.$store.getters.cartTotalPrice;
    },
    cart() {
      return this.$store.state.cart;
    },
  },
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
      errors: [],
      nameRules: [v => !!v || "Name is required"],
      checkbox: false,
      message: "",
      formview:'',
    };
  },
  created(){
      console.log(this.$route.query.myprop)
  },
  methods: {
       clearProductFromCart(product){
      this.$store.dispatch("deleteCartItem",product)
    },
    clearCartItems(){
      this.$store.dispatch("clearCartItems")
    },

    send() {
      axios
        .post("/api/add-order", this.form)
        .then(data => {
          console.log(data.data);
          if (!data.data.status) {
            console.log(data.data);
            this.errors = data.data.errors;
          } else {
              $('#exampleModalCenter').modal('show')
              console.log(data.data.checkid);
              console.log(data.data.orderid);

            this.formview=data.data.orderid
            this.message = "donnnnnnnnnnnnnnnnne";
                          let tag = document.createElement("script");
                              tag.setAttribute("src", "https://test.oppwa.com/v1/paymentWidgets.js?checkoutId="+data.data.checkid);
                              document.head.appendChild(tag);
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
