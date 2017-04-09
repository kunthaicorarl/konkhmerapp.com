var app = angular.module('app', ['ui.router','infinite-scroll']);

app.config(function($stateProvider) {
 //var urlHost="http://www.konkhmerapp.com/wp-mobile/khmovie";
var urlHost="http://localhost:81/mobile-project/2.0/khmovie";
 var route={
   items:[  
            { 
              name:'home-search',
              object:{
                      url:'/',
                      templateUrl:urlHost+'/pages/home/search.html',
                      controller: 'pages.home.search'
                    }          
            },
             { 
              name:'category-search',
              object:{
                      url:'/category',
                      templateUrl:urlHost+'/pages/category/search.html',
                      controller: 'pages.category.search'
                    }  
            },
            { 
              name:'tv-search',
              object:{
                      url:'/tv',
                      templateUrl:urlHost+'/pages/tv/search.html',
                      controller: 'pages.tv.search'
                    }  
            },
            { 
              name:'noty-search',
              object:{
                      url:'/noty',
                      templateUrl:urlHost+'/pages/noty/search.html',
                      controller: 'pages.noty.search'
                    }  
            },
            { 
              name:'watch.search',
              object:{
                      url:'/watch/:id',
                      templateUrl:urlHost+'/pages/watch/search.html',
                      controller: 'pages.watch.search',
                      params:{obj:null,id:null}
                    }  
            }
         ]
  };

angular.forEach(route.items, function(obj) {
    $stateProvider.state(obj.name,obj.object);
    console.log("Route Loading:"+obj.name);
});




});


