/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module("ngRating",[]).
    config(['$routeProvider',function($routeProvider) {
        
         $routeProvider.when('/rating', {templateUrl: 'partials/about.html', controller: aboutController});
         $routeProvider.otherwise({redirectTo: '/view1'});
    }
]);


function aboutController($scope,$http){
    
    $http.get('/rating/index').success(function(data,status){
        $scope.title = data.title;
        
    }).
     error(function(data,status){
          alert("error");
    })
   
}