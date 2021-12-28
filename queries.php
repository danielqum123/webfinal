<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        button {
            margin-left: 20px;
            margin-bottom: 10px;
            display: block;
            width: 250px;
            border-radius: 4px;
            width: 180px;
        }

        .grid-container {
            display: grid;
            grid-gap: 50px;
            grid-template-columns: auto auto auto auto;

            padding: 10px;
        }

        .grid-item {


            padding: 20px;
            font-size: 30px;
            text-align: center;
        }

        .item9 {

            padding: 20px;
            font-size: 30px;
            text-align: center;
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .item10 {

            padding: 20px;
            font-size: 30px;
            text-align: center;
            grid-column-start: 3;
            grid-column-end: 5;
        }
    </style>

</head>

<body>

       
            <form action="q1.php" method="post">
                <button  class="btn btn-secondary" type="submit" name="q1" value="q1"> Query 1</button>

            </form>
        
        <form action="q2.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q2" value="q2">Query 2</button>

        </form>
    
        <form action="q3.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q3" value="q3"> Query 3 </button>

        </form>
  
        <form action="q4.php" method="post">
            <button  class="btn btn-secondary"  type="submit" name="q4" value="q4"> Query 4 </button>

        </form>
    
   
        <form action="q5.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q5" value="q5"> Query 5 </button>

        </form>
   
 
        <form action="q6.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q6" value="q6"> Query 6</button>

        </form>
   
  
        <form action="q7.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q7" value="q7"> Query 7 </button>

        </form>
   
  
        <form action="q8.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q8" value="q8"> Query 8 </button>

        </form>


        <form action="q9.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q9" value="q9"> Query 9</button>

        </form>
    
    
        <form action="q10.php" method="post">
            <button  class="btn btn-secondary" type="submit" name="q10" value="q10"> Query 10</button>

        </form>
   
   




</body>

</html>