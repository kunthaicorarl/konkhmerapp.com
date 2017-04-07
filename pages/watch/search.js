app.controller("pages.watch.search",['$scope','$stateParams','$http',function($scope,$stateParams,$http){
         var vm=this;
          // vm.title="Category";
            console.log($stateParams);
           function init(e){
               vm.loading = true;
               vm.myItems=[];
        var req = {
             method: 'GET',
             url: 'http://konkhmerapp.com/wp-json/wp/v2/posts/'+e,
             headers: {
               'Content-Type': undefined
             }//,
            // data: { per_page:4,page:1,categories:6}
            };
                   $http(req).success(function(data){
                            vm.myData=data;
                            // angular.forEach(data, function(value, key) {
                            //  vm.myItems.push({link:value.link,title:value.title.rendered,img:angular.element(value.content.rendered).find('img')[0].src,id:value.id,obj:angular.element(value.content)});
                            // console.log(data);
                           
                            // });
                            angular.element(vm.myData)
                            }).finally(function(){
                               vm.loading = false;
                            });

           }
           init($stateParams.id);
}]);