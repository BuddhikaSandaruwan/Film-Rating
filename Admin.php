<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <script src="dist/js/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <title>feefo</title>
    </head>
    <style>body {padding-top:20px;}</style>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="navbar-brand" src="https://www.feefo.com/business/application/themes/feefo/dist/images/feefo_logo.svg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <h1 style="font-family: 'Roboto Mono', monospace;">Move Rateing System</h1>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-sm">
                    <form id="filmForm" class="form-horizontal" >
                        <fieldset>
                            <legend style="font-family: 'Noto Sans CJK KR Bold'" class="text-center">Admin Controll</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">ID</label>
                                <div class="col-md-9">
                                    <input id="id" name="id" type="text" placeholder="Film Id" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" type="text" placeholder="Film Name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Image</label>
                                <div class="col-md-9">
                                    <input id="image" name="image" type="text" placeholder="Image URL" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Type</label>
                                <div class="col-md-9">
                                    <input type="text" name="type" list="exampleList">
                                    <datalist id="exampleList">
                                        <option value="Cartoon">
                                        <option value="Action">
                                        <option value="Horror">
                                        <option value="Comady">
                                        <option value="Adventure">
                                    </datalist>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Video</label>
                                <div class="col-md-9">
                                    <input id="video" name="video" type="text" placeholder="Video URL" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Discription</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your discription here..." rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button id="butAdd" type="button" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="dist/js/jquery-3.3.1.min.js"></script>

    <script>
        $('#butAdd').click(function () {
           let moveForm=$('#filmForm').serialize();
           $.ajax({
               url: "../FilmRatingSystem/api/service/AdminService.php",
               method: "POST",
               async: true,
               data: moveForm
           }).done(function (res) {
               alert(res);
           });
        });
    </script>


    </body>
    </html>
