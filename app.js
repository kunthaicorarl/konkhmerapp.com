var app = angular.module('app', ['ui.router','infinite-scroll']);

app.config(function($stateProvider) {
 var objRoot="http://localhost:81/mobile-project/3.0";
 var route={
   items:[  
            { 
              name:'home-search',
              object:{
                      url:'/',
                      templateUrl:objRoot+'/pages/home/search.html',
                      controller: 'pages.home.search'
                    }          
            },
             { 
              name:'category-search',
              object:{
                      url:'/category',
                      templateUrl:objRoot+'/pages/category/search.html',
                      controller: 'pages.category.search'
                    }  
            },
            { 
              name:'tv-search',
              object:{
                      url:'/tv',
                      templateUrl:objRoot+'/pages/tv/search.html',
                      controller: 'pages.tv.search'
                    }  
            },
            { 
              name:'noty-search',
              object:{
                      url:'/noty',
                      templateUrl:objRoot+'/pages/noty/search.html',
                      controller: 'pages.noty.search'
                    }  
            },
            { 
              name:'watch-search',
              object:{
                      url:'/watch/:id',
                      templateUrl:objRoot+'/pages/watch/search.html',
                      controller: 'pages.watch.search',
                      params:{obj:null}
                    }  
            }
         ]
  };

angular.forEach(route.items, function(obj) {
    $stateProvider.state(obj.name,obj.object);
    console.log("Route Loading:"+obj.name);
});




});


