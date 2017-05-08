<html>
<head>

<script src="http://localhost:2016/Scripts/angular-ui-router.min.js"></script>
<script src="http://localhost:2016/Scripts/angular.min.js"></script>
</head>
<body  ng-app="app">
<ui-view></ui-view>
<script>
var appd=angular.module("app",['iu.router']);
appd.config([
    '$stateProvider',
    '$urlRouterProvider',function($stateProvider,$urlRouterProvider){
     $stateProvider.state('host', {
            url: '/host',
            template: '<div>Hello World!!</div>',
            controller:'pages.home.search'
        });

    }]);

</script>
</body>
</html>