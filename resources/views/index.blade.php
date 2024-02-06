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
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Employee Data!</h1>
        <form method="post" action="{{route('home')}}">
          @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Employee</label>
                <select class="form-select form-select-sm" aria-label="Small select example">
                    <option selected>Name</option>
                    <option value="Manager">Manager</option>
                    <option value="Ruchi">Ruchi</option>
                </select>
                <!-- <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Employee Product</label>
                <select class="form-select form-select-sm" aria-label="Small select example">
                    <option selected>Product</option>
                    <option value="Adhar Card">Adhar Card</option>
                    <option value="Pan Card">Pan Card</option>

                </select>
                <!-- <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Employee Address</label>
                <!-- <select class="form-select form-select-sm" aria-label="Small select example">
                    <option selected>Address</option>
                    <option value="1">City</option>
                    <option value="2">State</option>
                    <option value="3">Pin</option>
                </select> -->
                <input type="text" class="form-control mt-2" id="exampleInputEmail1" name="address" aria-describedby="emailHelp">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

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