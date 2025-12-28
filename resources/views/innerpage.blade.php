<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Innerpage</title>
    <style>
      *{
            margin: 0;
            padding: 20px 30px;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        .inner-page-button , .logout-button{
            border: none;
            padding: 10px 10px;
            font-family: sans-serif;
            font-weight: 500;
            cursor: pointer;
            border-radius: 5px;
        }

        .inner-page-button{
            background-color: rgb(37, 96, 37);
            color: white;
        }
        .logout-button{
            background-color: rgb(242, 73, 73);
            color: white;
        }
        a{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h1>Welcome , {{Auth::user()->name}}</h1>
     <div>
       <a href="{{ route('dashboard') }}"> <button class="inner-page-button">Go back</button></a>
       <a href="{{ route('logout') }}"> <button class="logout-button">Logout</button></a>
    </div>
</body>
</html>