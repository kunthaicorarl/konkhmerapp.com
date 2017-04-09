app.controller("pages.noty.search",['$scope','$http','$state',function($scope,$http,$state){
         var vm=this;
           vm.title="TV";
            vm.goTo=function(e){
            $state.go("#/watch/"+e);
            };

            vm.searchMovie=function(){

                vm.loading = true;
              
                  var req = {
                      method: 'GET',
                      url: 'http://konkhmerapp.com//wp-json/wp/v2/posts?search='+vm.filterText,
                      headers: {
                        'Content-Type': undefined
                      }//,
                      // data: { per_page:4,page:1,categories:6}
                      };
                   $http(req).success(function(data){
                              vm.myItems=[];
                            if(!data){
                              console.log("Nothing...");
                            }else{
                              console.log(data);
                             angular.forEach(data, function(value, key) {
                              vm.myItems.push({link:value.link,title:value.title.rendered,img:angular.element(value.content.rendered).find('img')[0].src,id:value.id});
                                 
                            });
                          }
                       
                            }).finally(function(){
                            vm.loading = false;
                            });
             
           };
}]);