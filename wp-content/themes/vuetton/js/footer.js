var Footer = Vue.extend({});
var footerData = Vue.extend({

    template:"#footer-template",
    data: function(){
        return{
            footerBGImg:'',
            footerLogo:'',
            footerMenus:'',
            footerSocialIcons:'',
            footerCopyright:''
        }
    },
    ready: function(){
        headers = 'http://192.168.0.26/zeus/wp-json/custom/v1/footer';
        this.$http.get(headers).then(function(response){
            this.$set('footerBGImg', response.data.footerBGImg);
            this.$set('footerLogo', response.data.footerLogo);
            this.$set('footerMenus', response.data.footerMenu);
            this.$set('footerSocialIcons', response.data.footerSocialIcons);
            this.$set('footerCopyright', response.data.footerCopyrightText);
            // console.log("Data:",response.data);
        });
    }  
});
var router = new VueRouter();
router.map({
    '/':{
        component: footerData
    } 
})
router.start(Footer, '#footer');

Vue.filter('stripHTML', function (value) {
  const div = document.createElement('div')
  div.innerHTML = value
  const text = div.textContent || div.innerText || ''
  return text
});