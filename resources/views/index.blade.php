<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee data</title>
    <style type="text/css">
        /* Custom page CSS
        -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        main > .container {
          padding: 60px 15px 0;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disable</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
     <main class="flex-shrink-0"></main>
    <div class="container mt-5">
        <h1 class="text-center mt-5">Employee Data!</h1>
        <form method="post" action="{{route('home')}}">
          @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control "name="name" aria-label="Small select example"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" id ="email"class="form-control" name="email" aria-label="Small select example"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Passward</label>
                <input type="text" class="form-control " name="passward" aria-label="Small select example"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control " name="address" aria-label="Small select example"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <input type="text" class="form-control form-select form-select-sm" name="city" aria-label="Small select example"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">State</label>
                <input type="text" class="form-control form-select form-select-sm" name="state" aria-label="Small select example"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pin Code</label>
                <input type="text" class="form-control form-select form-select-sm" name="pin_code" aria-label="Small select example"> 
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    {{-- <script>
        function submitData() {
          var data = document.getElementById("myData").value;
        
          $.ajax({
            url: "{{ route('index') }}",
            type: "POST",
            data: { data: data },
            success: function(response) {
              // Update the DOM based on the response
              $("#result").html(response.message);
            },
            error: function(error) {
              // Handle errors
              console.error(error);
            }
          });
        }
        </script> --}}
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>