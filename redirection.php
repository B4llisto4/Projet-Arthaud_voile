<!DOCTYPE>
<html lang="fr">
    <head>
    <title>Redirection</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
        .btn{
            width: 15%;


            

        }
        </style>
    </head>

    <body>
    <br><br><br><center><button id="boutonclient" type="button" class="btn btn-primary" >Liste des clients</button><br><br>
    <button id="boutoncommande" type="button" class="btn btn-primary">Liste des commandes</button>


<script>
    $("#boutonclient").click(function(){
        document.location.href="http://localhost:8080/arthaud_voile/listedesclients.php";
    })
</script>
<script>
    $("#boutoncommande").click(function(){
        document.location.href="http://localhost:8080/arthaud_voile/listecommande.php";
    })
</script>

    </body>

</html>