<html lang="en">

<head>

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>


</head>

<body>





    <button class="success btn btn-success">Success</button>



</div>  


<script type="text/javascript">


    $(".success").click(function(){

        $.bootstrapGrowl('We do have the Kapua suite available.',{

            type: 'success',

            delay: 2000,

        });

    });


   
</script>


</body>

</html>