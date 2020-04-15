  var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope, $http) {

            $http.get("https://corona.lmao.ninja/all")
                .then(function(response) {
                    $scope.cases = response.data.cases;
                    $scope.deaths = response.data.deaths;
                    $scope.recovered = response.data.recovered;
                    $scope.active = response.data.active;
                    $scope.updated = response.data.updated;

                });
            $scope.countries = [];
            $http.get('https://corona.lmao.ninja/countries?sort=country')
                .then(function(response) {
                    let i = 0;
                    for (let [key, value] of Object.entries(response.data).reverse()) {
                        $scope.countries.push(value.country);

                        if (value.country == $scope.selectedCountry) {
                            console.log(value);
                        }
                    }
                    $scope.selectedCountry == 'India';
                });

            $scope.showstats = function() {
                
                $http.get('https://corona.lmao.ninja/countries?sort=country')
                    .then(function(response) {
                        let i = 0;
                        for (let [key, value] of Object.entries(response.data).reverse()) {

                            if (value.country == $scope.selectedCountry) {
                                // console.log(value);
                                $scope.con_cases = value.cases;
                                $scope.con_deaths = value.deaths;
                                $scope.con_recovered = value.recovered;
                                $scope.con_active = value.active;
                                $scope.con_updated = value.updated;
                            }
                        }
                    });
                    $scope.graphs();
                    
            }

            $scope.graphs = function(){
                $http.get('https://corona.lmao.ninja/v2/historical')
                    .then(function(response) {
                        let i = 0;
                        for (let [key, value] of Object.entries(response.data).reverse()) {

                            if (value.country == $scope.selectedCountry) {
                               console.log(value.timeline.cases);
                               console.log(value.timeline.deaths);
                               console.log(value.timeline.recovered);
                            }
                        }
                    });
           
            }


        });