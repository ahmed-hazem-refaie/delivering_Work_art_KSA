/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import Vue from "vue";
import Vuetify from "vuetify";
import VueRouter from "vue-router";

Vue.use(Vuetify);
Vue.use(VueRouter);
import VueInternationalization from "vue-i18n";
import Locale from "./vue-i18n-locales.generated";


import store from "./store";

Vue.use(VueInternationalization);
const lang = localStorage.getItem("locale") || "en";
const messages = {
    en: {
        message: {
            home: "Home",
            shopart: "Shop Art",
            about: "About",
            introducing: "INTRODUCING",
            fineart: "Fine art",
            shoppers: "shoppers",
            live: "LIVE",
            shopnow: "Shop Now",
            newrelease: "New Release",
            newreleaseheader: "THIS WEEK’S RELEASE OF LIMITED ARTWORKS",
            readmore: "Read More",
            ourmission: "Our Mission",
            ourmissiontext1:
                "You, like everyone else on this planet, were born a creative person with good intentions. Able to change the world in ways so much bigger than you probably can imagine right now. All the rules of society then programmed you to think and calculate yourself through life in a way that is useful and not disturbing anyone else. Conforming to this norm made you fit in, but also stripped you of your boundless childlike creativity, imagination and lust for exploration.",
            ourmissiontext2:
                "Right now, what the world needs most, is people who find that version of themselves back again. People who come alive again. People who wonder, can be amazed and feel ecstatic like they did when they were little kids. Bringing you alive again, and reminding you of the version of yourself that can do anything, that is our mission. ",
            artists: "Artists",
            artisttext:
                "Behind every artwork we sell, there are ideas, visions, amazing artists and great stories. On this page we highlight some of that. If you want to learn more about an artwork you are about to buy, but the artist is not listed on this page, click on their name during shopping and you will get redirected straight to their most important social media account or website.",
            cart: "Add To Cart",
            customerreviews: "Customer Reviews",
            review: "Review",
            writereview: "Write Review",
            score: "Score",
            share: "Share",
            checkreview: "Was This Review Helpful",
            signup:
                "Sign up for a notification email when new limited artworks are released.",
            Newsletter: "Newsletter",
            SUBSCRIBE: "SUBSCRIBE",
            others: "Others",
            company: "Company",
            Limitworks: "Limitworks",
            name: "Your Name",
            email: "Your Email",
            phone: "Your Phone",
            submit: "Submit"
        }
    },
    ar: {
        message: {
            home: "الصفحه الرئيسيه",
            shopart: "متجر الفن",
            about: "من نحن",
            introducing: "مقدمه",
            fineart: "فن راقي",
            shoppers: "مشتري",
            live: "مباشر",
            shopnow: "اشتري اﻷن",
            newrelease: "إصدار جديد",
            newreleaseheader: "إصدار هذا الأسبوع من الأعمال الفنية المحدودة",
            readmore: "إقراء أكثر",
            ourmission: "مهمتنا",
            ourmissiontext1:
                " أنت ، مثل أي شخص آخر على هذا الكوكب ، ولدت شخصًا مبدعًا بحسن نية. قادرة على تغيير العالم بطرق أكبر بكثير مما يمكن أن تتخيله الآن. ثم برمجتك جميع قواعد المجتمع لتفكر وتحسب نفسك من خلال الحياة بطريقة مفيدة ولا تزعج أي شخص آخر. التوافق مع هذه القاعدة جعلك مناسبًا ، ولكنه جردك أيضًا من إبداعك الطفولي غير المحدود وخيالك وشهوة الاستكشاف.",
            ourmissiontext2:
                " الآن ، أكثر ما يحتاجه العالم ، هو الأشخاص الذين يجدون هذا الإصدار من أنفسهم مرة أخرى. الناس الذين يأتون على قيد الحياة مرة أخرى. الناس الذين يتساءلون ، يمكن أن يندهشوا ويشعروا بسعادة غامرة كما كانوا عندما كانوا صغارًا. نعيد لك الحياة مرة أخرى ، وتذكيرك بنسخة من نفسك يمكنها أن تفعل أي شيء ، هذه هي مهمتناز",
            artists: "الفنانين",
            artisttext:
                " وراء كل عمل فني نبيعه ، هناك أفكار ورؤى وفنانين رائعين وقصص رائعة. في هذه الصفحة نسلط الضوء على بعض من ذلك. إذا كنت تريد معرفة المزيد عن عمل فني أنت على وشك شرائه ، ولكن الفنان ليس مدرجًا في هذه الصفحة ، فانقر على اسمه أثناء التسوق وسيتم إعادة توجيهك مباشرةً إلى أهم حساب على وسائل التواصل الاجتماعي أو موقع الويب الخاص به.",
            cart: "أضف إلي سلة الشراء",
            customerreviews: "أراء العملاء",
            review: "رأي",
            writereview: "أكتب رايك",
            score: "تقيمك",
            share: "مشاركة",
            checkreview: "هل كانت هذه المراجعة مفيدة",
            signup:
                "قم بالتسجيل للحصول على إشعار بالبريد الإلكتروني عند إصدار أعمال فنية محدودة جديدة.",
            Newsletter: " النشرة الإخبارية",
            SUBSCRIBE: "إشتراك",
            others: "اﻷخرين",
            company: "الشركه",
            Limitworks: "أعمال محدودة",
            name: "إسمك",
            email: "إيميلك",
            phone: "رقم تليفونك",
            submit: "إرسال"
        }
    }
};
const i18n = new VueInternationalization({
    locale: "en",
    messages
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component("AppHome", require("./components/AppHome.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import router from "./Router/router.js";

const app = new Vue({
    el: "#app",
    router,
    store,
    i18n,
    vuetify: new Vuetify()
});
