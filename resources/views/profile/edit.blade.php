<!DOCTYPE html>

<head>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" />
    <title> Welcome to STI College Malolos! - Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body style="background-color: #01579b">


    <div class="edit">
        <div class="container px-5 mt-5">
            <form action="edit_profile" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- LOGO --}}
                <div class="row">
                    <img src="img/logo.png" style="height:120px">
                </div>

                {{-- Logo Title  --}}
                <div class="row">
                    <h3> Edit Profile </h3>
                </div>

                {{-- First Textboxes --}}
                <div class="row">

                    <div class="col-6">
                        <label for="birthplace"> {{ __('Birthplace') }}</label>
                    </div>

                    <div class="col-6">
                        <label for="Civil Status">{{ __('Civil Status') }}</label>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <input name="birthplace" type="text" class="form-control" value="{{ !is_null($student) ? $student->birthplace : '' }}"  autofocus>
                    </div>

                    <div class="col-6">
                        <input value="{{ !is_null($student) ? $student->status : '' }}" name="status" type="text" class="form-control"  autocomplete>
                    </div>
                </div>


                {{-- Second Row of Textboxes --}}
                <div class="row">
                    <div class="col-6">
                        <label for="Nationality"> {{ __('Nationality') }} </label>
                    </div>

                    <div class="col-6">
                        <label for="RELIGION-confirm">{{ __('Religion') }}</label>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <input value="{{ !is_null($student) ? $student->nationality : '' }}" name="nationality" type="Nationality" class="form-control" name="Nationality" 
                            autocomplete>
                    </div>

                    <div class="col-6">
                        <input value="{{ !is_null($student) ? $student->religion : '' }}" name="religion" type="RELIGION" class="form-control" name="RELIGION" 
                            autocomplete>
                    </div>
                </div>
            
            {{-- Profile Picture --}}
            <div class="row justify-content-start">
                <div class="col-6">
                    <label for="customFile">Select Profile Picture</label>
                    <input type="file" name="profile">
                </div>
            </div>

            {{-- Save --}}
            <div class="row justify-content-end" >
                <div class="col-3 text-center">
                    <button class="btn btn-primary" type="submit" value="Save" style=" width: 100%"> Save </button>
                </div>
                <div class="col-3 text-center">
                    <a class="btn btn-warning" type="submit" value="Save" style="width: 100%" href="profile"> Cancel </a>
                </div>
            </div>
            
            {{-- Errors --}}
            <div class="row">
                <div class="alert">                
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </form>

        </div>
    </div>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

    </script>



</body>

</html>

{{-- #01579b --}}
