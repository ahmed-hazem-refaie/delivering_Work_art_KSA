// it is update state

export const SET_PRODUCTS = (state, products) => {
    state.products = products;
};

export const SET_PRODUCT = (state, product) => {
    state.product = product;
};
// we size
export const ADD_TO_CART = (state, { product, quantity, price,avilableTarget }) => {



    var ckeckAvaiable=0
    var check = false
    var productInCart = state.cart.find(item => {
        if(item.avilableTarget>=2){
            ckeckAvaiable=item.avilableTarget
            console.log("القطعالمتوفرة", item.avilableTarget)
        if(  item.product.id == product.id && item.price==price){
            check =true
           return item.product
        }
        else{
            check = false
        }

    }

    });

if(ckeckAvaiable>=0){


    if (check==true) {
        productInCart.quantity++;
        productInCart.avilableTarget--


    } if(check==false ) {


        state.cart.push({
            product,
            quantity,
            price,
            avilableTarget
        });


        
    }

}

};

export const SET_CART = (state, cartItems) => {
    state.cart = cartItems;
};

export const DELETE_PRODUCT = (state, index) => {
  return  state.cart.splice(index,1)
};

export const DECREASE_PRODUCT = (state, { product, quantity }) => {
    let productInCart = state.cart.find(item => {
        console.log("yes");
        return item.product.id == product.id;
    });

    if (productInCart) {
        productInCart.quantity -= 1;

        if (productInCart.quantity <= 0) {
            productInCart.quantity = 0;
        }
    }
};

export const DELETE_CART = state => {
    state.cart = [];
};
