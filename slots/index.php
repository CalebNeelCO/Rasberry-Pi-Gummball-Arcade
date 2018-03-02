<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SLOTS GUMBALL ARCADE</title>

<link href='http://fonts.googleapis.com/css?family=Gravitas+One&text=1234567' rel='stylesheet' type='text/css'>

<!-- Syntax highlighting, ignore this -->
<link rel="stylesheet" href="SyntaxHighlighter/Styles/SyntaxHighlighter.css" type="text/css" media="screen" title="no title" charset="utf-8">

<style type="text/css">


ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.jSlots-wrapper {
    overflow: hidden;
    height: 20px;
    display: inline-block; /* to size correctly, can use float too, or width*/
    border: 1px solid #999;
}

.slot {
    float: left;
}

input[type="button"] {
    display: block;
}

/* ---------------------------------------------------------------------
   FANCY EXAMPLE
--------------------------------------------------------------------- */
.fancy .jSlots-wrapper {
    overflow: hidden;
    height: 100px;
    display: inline-block; /* to size correctly, can use float too, or width*/
    border: 1px solid #999;
}

.fancy .slot li {
    width: 100px;
    line-height: 100px;
    text-align: center;
    font-size: 70px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);
    font-family: 'Gravitas One', serif;
    border-left: 1px solid #999;
}

.fancy .slot:first-child li {
    border-left: none;
}

.fancy .slot li:nth-child(7) {
    background-color: #FFCE29;
}
.fancy .slot li:nth-child(6) {
    background-color: #FFA22B;
}
.fancy .slot li:nth-child(5) {
    background-color: #FF8645;
}
.fancy .slot li:nth-child(4) {
    background-color: #FF6D3F;
}
.fancy .slot li:nth-child(3) {
    background-color: #FF494C;
}
.fancy .slot li:nth-child(2) {
    background-color: #FF3333;
}
.fancy .slot li:nth-child(1),
.fancy .slot li:nth-child(8) {
    background-color: #FF0000;
}

.fancy .slot li span {
    display: block;
}

/* ---------------------------------------------------------------------
   ANIMATIONS
--------------------------------------------------------------------- */

@-webkit-keyframes winner {
        0%, 50%, 100% {
            -webkit-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -webkit-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -webkit-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}
@-moz-keyframes winner {
        0%, 50%, 100% {
            -moz-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -moz-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -moz-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}
@-ms-keyframes winner {
        0%, 50%, 100% {
            -ms-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -ms-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -ms-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}


@-webkit-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}
@-moz-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}
@-ms-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}



.winner li {
    -webkit-animation: winnerBox 2s infinite linear;
       -moz-animation: winnerBox 2s infinite linear;
        -ms-animation: winnerBox 2s infinite linear;
}
.winner li span {
     -webkit-animation: winner 2s infinite linear;
        -moz-animation: winner 2s infinite linear;
         -ms-animation: winner 2s infinite linear;
}

/* Syntax Highlighter, ignore */
.dp-highlighter ol {
    padding: 10px;
}

</style>



</head>
<body>
<?php
		
		//set the gpio's mode to output		
		system("gpio mode 3 in");
		//reading pin's status
		exec ("gpio read 3", $status, $return );
		//set the gpio to high/low
		if ($status[0] == "0" ) { 
		header('Location: http://192.168.1.115/wait.php'); }
		else if ($status[0] == "1" ) {
		//header('Location: http://192.168.1.115/index.php');
		}
		//reading pin's status
		exec ("gpio read ".$pic, $status, $return );
		//print it to the client on the response
		
	

?>
    <div id="wrapper">
        <div id="content">

            <h1>Lucky 7's!</h1>

            <div class="fancy">
                <ul class="slot">
                    <!-- In reverse order so the 7s show on load -->
                    <li><span>7</span></li>
                    <li><span>6</span></li>
                    <li><span>5</span></li>
                    <li><span>4</span></li>
                    <li><span>3</span></li>
                    <li><span>2</span></li>
                    <li><span>1</span></li>
                </ul>
                <input type="button" id="playFancy" value="Play">
            </div>

        </div>
    </div>



    </section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
    <script src="jquery.jSlots.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">

        // normal example
        $('.normal .slot').jSlots({
            spinner : '#playNormal',
            winnerNumber : 7
        });


        // fancy example
        $('.fancy .slot').jSlots({
            number : 3,
            winnerNumber : 1,
            spinner : '#playFancy',
            easing : 'easeOutSine',
            time : 7000,
            loops : 6,
            onStart : function() {
                $('.slot').removeClass('winner');
            },
            onWin : function(winCount, winners, finalNumbers) {
                // only fires if you win

                $.each(winners, function() {
                    this.addClass('winner');
                });

                // react to the # of winning slots
                if ( winCount === 1 ) {
                    window.open("win.php","_self")
                } else if ( winCount > 1 ) {
                    window.open("win1.php","_self")
                }
				

            }
        });


    </script>

    <!-- Syntax highlighting, ignore this -->
    <script src="SyntaxHighlighter/Scripts/shCore.js" type="text/javascript" charset="utf-8"></script>
    <script src="SyntaxHighlighter/Scripts/shBrushCss.js" type="text/javascript" charset="utf-8"></script>
    <script src="SyntaxHighlighter/Scripts/shBrushJScript.js" type="text/javascript" charset="utf-8"></script>
    <script src="SyntaxHighlighter/Scripts/shBrushXml.js" type="text/javascript" charset="utf-8"></script>
    <script language="javascript">
        dp.SyntaxHighlighter.ClipboardSwf = '/flash/clipboard.swf';
        dp.SyntaxHighlighter.HighlightAll('code', false, false )//, [collapseAll], [firstLine], [showColumns] );
        //HighlightAll(name, [showGutter], [showControls], [collapseAll], [firstLine], [showColumns])
    </script>
    <!-- /Syntax highlighting -->

</body>
</html>
