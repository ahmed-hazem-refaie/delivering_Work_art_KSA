<template>
    <section>
        <div class="row">
            <div class="col-md-7">
                  <v-form class="form">
                    <v-container>
                    <v-row>
                        <h4>Contact information</h4>
                        <v-col
                            cols="12"
                            md="12"
                            >
                            <v-text-field
                                v-model="form.email"
                                label="E-mail"
                                required
                            ></v-text-field>
                        </v-col>
                        <v-checkbox
                        v-model="form.checkbox"
                        :rules="[v => !!v || 'You must agree to continue!']"
                        label="Keep me up to date on news and exclusive offers"
                        required
                        ></v-checkbox>
                        
                        <v-col
                        
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                            v-model="form.firstname"
                            label="First name"
                            required
                        ></v-text-field>
                        </v-col>

                        <v-col
                        cols="12"
                        md="6"
                        >
                        <v-text-field
                            v-model="form.lastname"
                            label="Last name"
                            required
                        ></v-text-field>
                        </v-col>
                        <v-col
                        cols="12"
                        md="12"
                        >
                        <v-text-field
                            v-model="form.address"
                            label="Address"
                            required
                        ></v-text-field>
                        </v-col>
                        <v-col
                        cols="12"
                        md="12"
                        >
                        <v-text-field
                            v-model="form.apartment"
                            label="Apartment, Suite, etc. (optional)"
                        ></v-text-field>
                        </v-col>
                        <v-col
                        cols="12"
                        md="12"
                        >
                        <v-text-field
                            v-model="form.city"
                            label="Ciity"
                            required
                        ></v-text-field>
                        </v-col>
                        <v-col class="d-flex" cols="12" sm="4">
                            <v-select
                            v-model="form.select"
                            :items="items"
                            label="Country/Reagion"
                            outlined
                            ></v-select>
                        </v-col>
                        <v-col class="d-flex" cols="12" sm="4">
                            <v-select
                            v-model="form.select"
                              item-text="name"
                                item-value="last"
                            :items="items"
                            label="Governorate"
                            outlined
                            ></v-select>
                        </v-col>
                        <v-col
                        cols="12"
                        sm="4"
                        >
                        <v-text-field
                            v-model="form.postcode"
                            label="Postcode"
                            required
                        ></v-text-field>
                        </v-col>
                        <v-col
                        cols="12"
                        md="12"
                        >
                        <v-text-field
                            v-model="form.phone"
                            label="Phone"
                            required
                        ></v-text-field>
                        </v-col>
                    </v-row>
                    <v-btn color="#5cbbff"  type="submit">Continue to Shipping</v-btn>
                    </v-container>
                </v-form>
            </div>
            <div class="col-md-5">
                nm
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data(){
        return {
            form:{
                email:null,
                lastname:null,
                address:null,
                firstname:null,
                apartment:null,
                city:null,
                phone:null,
                select: null,
                postcode:null

            },
            items: ['Egypt', 'Russian', 'Franch', 'Brazil'],
            nameRules: [
                v => !!v || 'Name is required',
            ],
            checkbox:false,
            
        }
    }
}
</script>

<style scoped>
    .form{
        width: 60%;
        margin: auto;
    }
</style>