app.controller('BookController',
    function($scope,BooksFactory){

    $scope.form = {};

    $scope.books = [];

    books();

    $scope.save = function(){
        var promise = BooksFactory.save($scope.form);
        promise.then(function(data){
            alert('Saved.');

            books();
        })
        .then(null, function(data){
            //failed to save
            alert('failed to save');
        });
    };


    function books(){
        var promise = BooksFactory.fetch();
        promise.then(function(data){
            $scope.books = data.data.result;
        })
        .then(null, function(data){
            //failed to retrieving data
        });  
    }

});