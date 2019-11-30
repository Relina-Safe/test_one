/*
    var x; 
    // function 
    function foo(x) {
        console.log(x);
    }
    // now how to declare an object 
    var hadjr = {
        name : 'hadjr',
        town : 'mozaia',
        learn : function () {
            console.log("Iam learning");
        },
        study :  (a,b) => {a+b} , 
       boo : () => { 
            chain="hi there";
            return chain.length;
        }
    };
    let boo =  function() {
            chain = "hi there";
            return chain.length;
    }

    let jojo = function() {
        s = "I'm jojo";
       // njarab nmedleha name hadhi function ok 
       let say = function(){
           return s; 
       }
       return say();
    }
    jojo(); // you can return a function in Js ok ?ok
    function foo(anobject ="hi") {
        anobject ?  console.log("ok ") : console.log("not ok");
    }; 
    foo(hadjr); 
   
   
    let box = document.getElementsByClassName("anim")[0]; 
    let button = document.getElementsByClassName('btn')[0]; 
    button.addEventListener('click',function(){ 
     box.remove();
    });*/
    (function(){
    
    box =  $(".anim");
   
    btn = $(".btn");
    btn.on("click",() => box.hide());
    text = $(".text");
    let chain; 
    chain = text.text(); 
    
    
    
    // now we create an array of two names 
    let names = ["Hadjr", "Abdou"];

    let items = $(".list li");  
    items.on("click", function()  { 
      let item = $(this);  
      randomName = names[Math.floor(Math.random()*names.length)];
      
      item.css("color","#ffffff");
      item.text(randomName);
      if(randomName === "Hadjr") {
          item.css("background", "green");
      }else 
      item.css("background", "blue");
    }); 
  
  
    let button = $("#click") 
    /*button.on("click",function(){
        console.log("I'm clicked!!");    
        $("li").parent(".list").addClass("animate");
    });*/ 
    // there is predifined  method called fadeIn fadeOut let's see what it does 
    button.on("click",function(){ // net t3ayi 
        // now let's see animate method 
        $(".list").animate({ 
            'height' : 'toggle', // height from current value in css to 0 ok?yes
            'opacity': 'toggle', // let's do toggle it means if opacit = 1 => it changed to 0 and if it find opacity 0 it changed to 1 ok ?ok
            'backgroundColor' : '#333333', 
       },5000) // 5000 it means 5s it works with meliseconds
       
    });

    let manou = {
        init : function(config){ // config = {btn : $("#click")}
        this.config = config; // 
         // this.config = {btn : $("#click")}
        this.bindEvent(); 
        },
        bindEvent : function(){
            this.config.btn.on("click",function(){ 
                    console.log("we are here"); 
            });
                }
    }
 
     manou.init({btn : $("#click")}); 
    // {btn : $("#click")}
    })();
   
