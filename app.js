var app = angular.module('app', ['ui.router','infinite-scroll']);

app.config(function($stateProvider) {

 var route={
   items:[  
            { 
              name:'home-search',
              object:{
                      url:'/',
                      templateUrl:'http://www.konkhmerapp.com/wp-mobile/khmovie/pages/home/search.html',
                      controller: 'pages.home.search'
                    }          
            },
             { 
              name:'category-search',
              object:{
                      url:'/category',
                      templateUrl:'http://www.konkhmerapp.com/wp-mobile/khmovie/pages/category/search.html',
                      controller: 'pages.category.search'
                    }  
            },
            { 
              name:'tv-search',
              object:{
                      url:'/tv',
                      templateUrl:'http://www.konkhmerapp.com/wp-mobile/khmovie/pages/tv/search.html',
                      controller: 'pages.tv.search'
                    }  
            },
            { 
              name:'noty-search',
              object:{
                      url:'/noty',
                      templateUrl:'http://www.konkhmerapp.com/wp-mobile/khmovie/pages/noty/search.html',
                      controller: 'pages.noty.search'
                    }  
            },
            { 
              name:'watch-search',
              object:{
                      url:'/watch/:id',
                      templateUrl:'http://www.konkhmerapp.com/wp-mobile/khmovie/pages/watch/search.html',
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


