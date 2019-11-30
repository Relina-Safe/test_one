(function(){
 var Login = {
     init : function(config){
        this.config = config;
        this.events();
     },
     events : function(){
         let self = this;
        // 1. get the join us botton when clicked
        this.config.joinUsButton.on("click",function(){
            self.switchTabs($(".join-us-form")); 
        }) 
        this.config.signUpBotton.on("click",function(){
            self.switchTabs($(".sign-up-form"));
        })      
     },
     switchTabs : function(page){
           if(page.hasClass("join-us-form")){
               $(".sign-up-form").fadeOut(function(){
        
                $(".join-us-form").fadeIn();
               }); 
                
           }else if(page.hasClass("sign-up-form")){
               $(".join-us-form").fadeOut(function(){ 
                $(".sign-up-form").fadeIn(); 
               }); 
               
           }
     }
 }
 
  Login.init({    
      joinUsButton : $('#join-us'),
      signUpBotton: $('#sign-in')
  })
  
})(); 