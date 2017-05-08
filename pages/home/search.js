app.controller("pages.home.search",['$scope','$state','$rootScope','$http',function($scope,$state,$rootScope,$http){        
           var vm=this;
           vm.title="Home";
           vm.myItems=[];
           vm.index=1;
           $rootScope.filterText='';
           $rootScope.searchMovie=function(e){

                vm.loading = true;
              
                  var req = {
                      method: 'GET',
                      url: 'http://konkhmerapp.com//wp-json/wp/v2/posts?search='+e,
                      headers: {
                        'Content-Type': undefined
                      }//,
                      // data: { per_page:4,page:1,categories:6}
                      };
                   $http(req).success(function(data){
                              var myItems1=[];
                            if(!data){
                              console.log("Nothing...");
                            }else{
                              console.log(data);
                             angular.forEach(data, function(value, key) {
                             myItems1.push({link:value.link,title:value.title.rendered,img:angular.element(value.content.rendered).find('img')[0].src,id:value.id});
                                 
                            });
                          }
                          vm.myItem=null;
                            //vm.myItem=myItems1;   
                            }).finally(function(){
                               vm.loading = false;
                            });
             
           };

           function init(e){
               vm.loading = true;
              
        var req = {
             method: 'GET',
             url: 'http://konkhmerapp.com/wp-json/wp/v2/posts?per_page=10&page='+e,
             headers: {
               'Content-Type': undefined
             }//,
            // data: { per_page:4,page:1,categories:6}
            };
                   $http(req).success(function(data){
                            if(!data){
                              console.log("Nothing...");
                            }else{
                             angular.forEach(data, function(value, key) {
                             vm.myItems.push({link:value.link,title:value.title.rendered,img:angular.element(value.content.rendered).find('img')[0].src,id:value.id});
                            console.log(data);
                            vm.index++;
                            });
                            }
                               
                           
                            }).finally(function(){
                               vm.loading = false;
                            });

           };

           
           vm.loadMore=function(){
            init(vm.index);  
           };

         init(vm.index);  
           
           
}]);




