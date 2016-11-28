/**
 * Created by mati on 11/1/16.
 */
angular
    .module('MADSapp',[
        'duScroll',
        'ngParallax'
    ])
    .value('duScrollOffset', 60)
    .value('duScrollDuration',1000)
    .controller('contactController',function($scope, $http){
        $scope.mostrar = true;
        $scope.send = function() {
            $scope.mostrar = false;
            return $http.post("contact.php", $scope.contact).success(function(response){
                window.alert(response);

            });
        }
    });
