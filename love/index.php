<!DOCTYPE html>

<html>

    <head>


        <title>Lover Calculator</title>

        

        <link rel="stylesheet" type="text/css" media="screen" href="./style.css" />

    <style type="text/css">

<!--

body {

	background-image: url(img/ff.jpg);
    background-position: all;
	background-repeat: no-repeat;

}

.style1 {

	color: #FFFFFF;

	font-weight: bold;

}

a:link {

	color:#FFFFFF;

	text-decoration: none;

}

a:visited {

	text-decoration: none;

	color:  #FFFFFF;

}

a:hover {

	text-decoration: underline;

	color: pink;

}

a:active {

	text-decoration: none;

}

.style3 {

	font-family: "Times New Roman", Times, serif;

	font-size: 12px;

}

.style5 {font-family: "Times New Roman", Times, serif}

-->

    </style></head>



    <body>

        <script language = "javascript" type = "text/javascript">

            var request = false;



            try

                {

                request = new XMLHttpRequest();

                }

            catch (trymicrosoft)

                {

                try

                    {

                    request = new ActiveXObject("Msxml2.XMLHTTP");

                    }

                catch (othermicrosoft)

                    {

                    try

                        {

                        request = new ActiveXObject("Microsoft.XMLHTTP");

                        }

                    catch (failed)

                        {

                        request = false;

                        }

                    }

                }



            if (!request)

                alert("Error initializing XMLHttpRequest!");



            function updateDiv(person1, person2)

                {

                var url = "calc.php";

                var params = "p1=" + person1 + "&p2=" + person2;

                request.open("POST", url, true);

                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                request.setRequestHeader("Content-length", params.length);

                request.setRequestHeader("Connection", "close");

                request.onreadystatechange = function()

                    {

                    if (request.readyState == 4 && request.status == 200)

                        {

                        var response = request.responseText;

                        document.getElementById('targetDiv').innerHTML = response + "%               ";

                        }

                    }



                request.send(params);

                }

                //-->

        </script>



        <div id = "main" align = "center">

            <p><a href = "#"><img src = "./img/lov.png" alt = "Calculate your love!" width="200" height="200" style = "border: medium none ;" /></a>          </p>

            <p>&nbsp;</p>

            <p><br />

            </p>

<form name = "test" action = "#">

                <table border = "0">

                    <tbody>

                        <tr>

                            <td><span class="style1"><img src="./img/man.png" width="50" height="50" /></span> 

            <input size = "30" class = "name" name = "p1" placeholder = "Enter Full Name" type = "text" />            </td>



<td style = "background-image: url('img/hsaeart.png');background-repeat:no-repeat; width: 133px; height: 119px;">

                                <div id = "targetDiv" valign="middle" align = "center">0%

                                </div>

                            </td>

                            <td><span class="style1"><img src="./img/woman.png" width="50" height="50" /></span>

                            <input size = "30" class = "name" name = "p2" placeholder = "Enter Full Name" type = "text" />



                                <br />                            </td>

                      </tr>

                    </tbody>

                </table>



                <br />

                <br />

                <input onclick = "updateDiv(p1.value, p2.value)"

                       value = ""

                       style = "border: medium none ; background: transparent url(img/calculate.png) repeat scroll 0% 0%; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; width: 131px; height: 52px;"

                       type = "button">



                <br />

                <br />

          </form>



            <center>



                <p><br />

                  

                  

                    <br />

                    <br />

                    <br />

                  

                  <span class="style1"> &copy;2021 <a href = "#">Love Calculator</a></span></p>

          </center>

        </div>



</body>

</html>