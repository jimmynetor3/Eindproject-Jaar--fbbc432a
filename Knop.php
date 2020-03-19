<html>
    <head>
        <link href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="post">
                <label for="VerzendDatum">Verzend datum:</label>
                    <input type="date" id="VerzendDatum" name="VerzendDatum" required>
                    <input type="time" id="VerzendTime" name="VerzendTime" required>
                <label for="WelkeGroep"> Welke groep</label>
                     <input type="text" id="WelkeGroep" name="WelkeGroep" required> 
                     <button onclick="settings()" >send mail</button>
       </form>
              <script type="text/javascript">
            	function settings() {
                     var VerzendDatum = document.getElementById("VerzendDatum").value;
                      console.log(VerzendDatum);
                       var WelkeGroep = document.getElementById("WelkeGroep").value;
                      console.log(WelkeGroep);
                 }
             </script>

             <?php 
                $VerzendDatum = $_POST["VerzendDatum"];
                $VerzendTime = $_POST["VerzendTime"];
                $WelkeGroep = $_POST["WelkeGroep"];
             ?>
    </body>
</html>
