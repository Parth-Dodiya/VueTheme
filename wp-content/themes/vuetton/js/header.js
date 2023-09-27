var Header = Vue.extend({});
var headerData = Vue.extend({

    template:"#header-template",
    data: function(){
        return{
            header:'',
            headerMenus:'',
            headerButton:''
        }
    },
    ready: function(){
        headers = 'http://192.168.0.26/zeus/wp-json/custom/v1/header';
        this.$http.get(headers).then(function(response){
            this.$set('headerLogo', response.data.headerLogo);
            this.$set('headerLogoText', response.data.headerLogoText);
            this.$set('headerMobileLogo', response.data.headerMobileLogo);
            this.$set('headerMenus', response.data.headerPrimaryMenu);
            this.$set('headerButton', response.data.headerButton);
            // console.log("Data:",response.data);
        });
    }  
});
var router = new VueRouter();
router.map({
    '/':{
        component: headerData
    } 
})
router.start(Header, '#header');