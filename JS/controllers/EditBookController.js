app.controller('EditBookController', function(
                                            $scope,
                                            BooksFactory,
                                            $routeParams
                                        ){

    $scope.book={};
    books();


    function books(){
        var filter = {
            pk : $routeParams.pk
        }

        var promise = BooksFactory.fetchone(filter);
        promise.then(function(data){
            $scope.book = data.data.result[0];
        })
        .then(null, function(data){
            //failed to retrieving data
        });  
    }
    

});