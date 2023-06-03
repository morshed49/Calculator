<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Bootstrap cdn here  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <H2 class="text-center mt-5">Calculate From Here</H2>
            <div class="col-lg-8 offset-2">
                <form action="functions.php" method="GET" class="mt-4">
                    <input type="text" name="num01" class="form-control mb-3" placeholder="Type Number One" required>
                    <label for="selectelement">Choose Operation</label>
                    <select name="oper" id="selectelement">
                        <option value="add">Addition</option>
                        <option value="sub">Subtraction</option>
                    </select>
                    <input type="text" name="num02" class="form-control mt-3" placeholder="Type Number Two" required>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4">Calculation</button>
                    </div>
                    
                </form>


            </div>
        </div>
    </div>


    <!-- js cdn here  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</body>

</html>