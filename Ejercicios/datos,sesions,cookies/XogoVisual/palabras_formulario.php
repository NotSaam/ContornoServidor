<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Adivinar as palabras</title>
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
            margin: 0;
            background-color: #2d2b2b;
            color: white; 
        }

        .engadir{
            color: black;
        }

        h1 {
            text-align: center;
            color: #fca84f;
            margin-top: 10%;
        }

        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #fca84f;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fca84f;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: black;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: black;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: gainsboro;
            color: black;
        }
    </style>
</head>

<body>
    <h1>ADIVINA AS PALABRAS</h1>
    <form action='palabras_formulario.php' method="POST">

        <label for='palabra' id="engadir"><b>Palabra 1:</b></label>
        <input type='text' id='palabra' placeholder='Introduce unha palabra' name='palabra'>

        <label for='palabra' id="engadir"><b>Palabra 2:</b></label>
        <input type='text' id='palabra' placeholder='Introduce unha palabrar' name='palabra'>
        
        <label for='palabra' id="engadir"><b>Palabra 3:</b></label>
        <input type='text' id='palabra' placeholder='Introduce unha palabra' name='palabra'>
        
        <label for='palabra' id="engadir"><b>Palabra 4:</b></label>
        <input type='text' id='palabra' placeholder='Introduce unha palabra' name='palabra'>
        
        <label for='palabra' id="engadir"><b>Palabra 5:</b></label>
        <input type='text' id='palabra' placeholder='Introduce unha palabra' name='palabra5'>


        <button type='submit'>Comprobar</button>
    </form>