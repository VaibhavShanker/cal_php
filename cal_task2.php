<html>
    <head>
       <title>
           Calculator
        </title>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cal.css">
        
        <script>

            $(document).ready(function(){
                $('input[type=button]').click(function(){
                    var num = $(this).val();
                    var num1 = $('#display').html();
                    if( num === 'C' ){
                        $('#display').html('');
                        return;
                    }
                    if( num === '=' ){
                        $('#display').html(num1);
                        return;
                    }
                    $.ajax({
                            url:'cal1.php',
                            type: "POST",
                            data:{'action':'operation','num':num,'num1':num1},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('error occured');}
                           );
                });
                $('#eql').click(function(){
                    var num = $('#display').html();
                    var num1 = $('#display').html();
                    $.ajax({
                            url:'cal1.php',
                            type: "POST",
                            data:{'action':'equal', 'num':num, 'num1':num1},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('error occured');}
                           );
                });
            });
        </script>
    </head>
 
<body>
    <center>
        <div id="wrapper">
         
            
            <div class="section">
            Calculator
                <table>
                    <tr>
                        <td colspan="4"><textarea id="display" class="display"></textarea></td>
                        <td><input id="eql" value="=" type="button" class="eql"></td>
                    </tr>
                    
                    <tr>
                        <td><input value="7" type="button" class="size"></td>
                        <td><input value="8" type="button" class="size"></td>
                        <td><input value="9" type="button" class="size"></td>
                        <td><input value="0" type="button" class="size"></td>
                        <td><input id="cls" value="C" type="button" class="cls"></td>
                    </tr>

                    <tr>
                        <td><input value="4" type="button" class="size"></td>
                        <td><input value="5" type="button" class="size"></td>
                        <td><input value="6" type="button" class="size"></td>                   
                        <td><input id="plus" value="+" type="button" class="size"></td>
                        <td><input id="sub" value="-" type="button" class="size"></td>
                    </tr>

                    <tr>
                        <td><input value="1" type="button" class="size7"></td>
                        <td><input value="2" type="button" class="size"></td>
                        <td><input value="3" type="button" class="size"></td>
                        <td><input id="mul" value="*" type="button" class="size"></td>
                        <td><input id="div" value="/" type="button" class="sizel"></td>
                    </tr>

                </table>
            </div>
        </div>
    </center>



</body>

</html>