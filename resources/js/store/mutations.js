// it is update state

export const SET_PRODUCTS = (state, products) => {
    state.products = products;
};

export const SET_PRODUCT = (state, product) => {
    state.product = product;
};

export const ADD_TO_CART = (state, { product, quantity }) => {
    console.log("state push done")

    let productInCart = state.cart.find(item => {
        return item.product.id == product.id;
    });

    if (productInCart) {
        productInCart.quantity++;
        return;
    }
    state.cart.push({
        product,
        quantity
    });
};

export const SET_CART = (state, cartItems) => {
    state.cart = cartItems;
};

export const DELETE_PRODUCT = (state, product) => {


    state.cart = state.cart.filter(item => {
        return item.product.id !== product.id;
    });
};



export const DECREASE_PRODUCT = (state,  { product, quantity }) => {

    let productInCart = state.cart.find(item => {
        console.log("yes")
        return item.product.id == product.id;
    });

    if (productInCart) {

        productInCart.quantity-=1;


        if(productInCart.quantity<=0){productInCart.quantity=0}

    }


};




export const DELETE_CART = state => {
    state.cart = [];
};
