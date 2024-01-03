$(document).ready(function () {
    function LikeViewModel()
    {
        var self = this;
        self.like = ko.observable();
        self.cout = ko.observable('');



            var PostID = document.getElementById('PostID').value;
            console.log("PostID:", PostID);
            const likeButton = document.getElementById("likeButton");

                $.ajax({
                    type: 'get',
                    url: 'http://127.0.0.1:8000/api/Getlike/'+PostID,

                    success: function(response) {

                        self.like(response.data)
                        console.log("like:"+ self.like())
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                    }
                })


                function like(){

                    $.ajax({
                        type: 'get',
                        url: 'http://127.0.0.1:8000/api/like/'+PostID,

                        success: function(response) {

                            ViewModel.like(true)
                            likeButton.classList.add("liked");


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                        }
                    })
                }



                    $.ajax({
                        type: 'get',
                        url: 'http://127.0.0.1:8000/api/GetCountLike/'+PostID,

                        success: function(response) {

                            self.cout(response.cout)
                            console.log("cout:"+  self.cout)


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                        }
                    })


                function unlike(){

                    $.ajax({
                        type: 'get',
                        url: 'http://127.0.0.1:8000/api/unlike/'+PostID,

                        success: function(response) {

                            ViewModel.like(false)
                            likeButton.classList.remove("liked");


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                        }
                    })
                }
                self.toggleLike = function() {
                    if ( self.like()==false) {
                      like();
                      $.ajax({
                        type: 'get',
                        url: 'http://127.0.0.1:8000/api/GetCountLike/'+PostID,

                        success: function(response) {

                            self.cout(response.cout)
                            console.log("cout:"+  self.cout)


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                        }
                    })
                    } else {
                      unlike();

                      $.ajax({
                        type: 'get',
                        url: 'http://127.0.0.1:8000/api/GetCountLike/'+PostID,

                        success: function(response) {

                            self.cout(response.cout)
                            console.log("cout:"+  self.cout)


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                        }
                    })

                    }
                  }




    }

var ViewModel = new LikeViewModel();
ko.applyBindings(ViewModel);
})
