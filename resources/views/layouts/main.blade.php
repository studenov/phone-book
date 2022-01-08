<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Phone Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('contacts.index') }}">Main</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('contacts.index') }}">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
<script>
    //dynamic date validation. 18yo+ only
    $(function(){
        let dtToday = new Date();
        let month = dtToday.getMonth() + 1;
        let day = dtToday.getDate();
        let year = dtToday.getFullYear() - 18;
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        let minDate = year + '-' + month + '-' + day;
        let maxDate = year + '-' + month + '-' + day;
        $('#date_of_birth').attr('max', maxDate);
    });

    //dynamic adding number fields
    function add_number(){
        let parent = document.getElementById("nums");
        let new_field = document.createElement("input");
        new_field.setAttribute("type", "tel");
        new_field.setAttribute("name", "phone_numbers[]");
        new_field.setAttribute('class', "form-control mb-2");
        new_field.setAttribute('placeholder', "+380__________");
        new_field.setAttribute('maxlength', "13");
        new_field.setAttribute('pattern', "^\\+?3?8?(0\\d{9})$");
        parent.appendChild(new_field);
    }

    function delete_number(){
        let parent = document.getElementById("nums");
        parent.removeChild(parent.lastChild);
    }
</script>
</html>
