<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container pt-5">
        <div class="d-flex flex-row mb-2">
            <select class="form-control mb-1 text-capitalize form-control-sm" id="inputProvince" autocomplete="off"
                required>
                <option value="" hidden>Province
                </option>
                @foreach($province as $r)
                <option value="{{$r->id}}">{{$r->name}}</option>
                @endforeach
            </select>
            <select class="form-control ml-2 text-capitalize form-control-sm" name="" id="inputCity" autocomplete="off"
                required>
                <option value="" hidden>City
                </option>
            </select>
        </div>
        <div class="d-flex flex-row">
            <select class="form-control text-capitalize form-control-sm" name="subDistrick" id="inputDistrict"
                autocomplete="off" required>
                <option value="" hidden>
                    Sub District</option>
            </select>
            <input type="number" class="form-control form-control-sm ml-2" autocomplete="off"
                placeholder="Enter Zip Code" name="zipCode" required>
        </div>

        <input type="hidden" name="province" id="getProvince" placeholder="Province" required>
        <input type="hidden" name="city" id="getCity" placeholder="City" required>
        <input type="hidden" name="sub_district" id="getDistrict" placeholder="District" required>
    </div>

    <!-- Essential javascripts for application to work-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
    <script src="{{ asset('js/select-option.js') }}"></script>
</body>

</html>
