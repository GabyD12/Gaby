<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Promedio</h1>

    <form action="{{route('result.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    <label>
        Nombre
        <br>
        <input type="text" name="name">
    </label>
    <br>
    
    <label>
       Nota 1
       <br>
       <input type="number" name="not1">
    </label>
    <br>
    
    <label>
        Nota 2
        <br>
        <input type="number" name="not2">
        </label>
        <br>
    
        
    <label>
        Nota 3
        <br>
        <input type="number" name="not3">
    </label>
    <br>


    <br>
    <button type="submit">Enviar Formulario:</button>

</body>
</html>