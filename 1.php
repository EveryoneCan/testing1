<!--Display Alert Message on Button Click Event.-->
<html>
    <head>
        <title>Display Alert Message on Button Click Event.</title>
        <script type="text/javascript">
            function showMessage() {
                alert("Hello friends, this is message.");
            }
        </script>
    </head>
    <body>
        <center>
            <h1>Display Alert Message on Button Click Event.</h1>
            <b>Click on button to display message: </b><br />
            <br />
            <input type="button" id="btnShowMsg" value="Click Me!" onClick="showMessage()" />
        </center>
    </body>
</html>
