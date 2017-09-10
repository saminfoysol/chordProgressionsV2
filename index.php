<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Chord Progressions</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <style>

        .searchText{
            text-decoration-color: black;
            color:black;
        }

        .form-control {
        width:auto;
        display:inline-block;
        }

        a{
            font-size:1.5em;
        }
        .btn-chordnew{
            background-color: #094513;
            
            height:50px;
            width:145px;
            
            font-weight:bold;
            font-family: Trebuchet ms;
            font-style: italic;
            font-size: 1em;
            margin-bottom:10px;
            border-color:#094513;
        }

        

        .btn:hover{
            background-color: #FF4343;
            border-color: #FF4343;
        }


        .btn-chordPlay:hover{
            background-color: #FF4343;


        }

        .btn-chordPlay{
            background-color: red;
            border-color:red;
            height:50px;
            width:100px;
            cursor:pointer;
            font-weight:bold;
            font-family: Trebuchet ms;
            font-style: italic;
            font-size: 1em;
            margin-bottom:10px;
        }

        .btn-chordnew:hover{
            background-color: #07A321;
        }


        .btn-chord{
            background-color: #094513;
            border-color:#094513;
            
            height:50px;
            width:145px;
            
            font-weight:bold;
            font-family: Trebuchet ms;
            font-style: italic;
            font-size: 1em;
            margin-bottom:10px;

        }

        .btn-chordBlues{
            background-color: #094513;
            border-color:#094513;
            
            height:50px;
            width:80px;
            
            font-weight:bold;
            font-family: Trebuchet ms;
            font-style: italic;
            font-size: 1em;
            margin-bottom:10px;

        }

        .btn-chord:hover{
            background-color: #07A321;
            border-color:background-color: #07A321;
        }

        .btn-info{
            background-color: red;
            border-color:red;
        }
        

        #about{
            height: 100vh;
        }

        #chords{
            height: 100vh;
            background-size: cover;
            
        }

        footer{
            background-color:black;
            color:red;
        }

        .leftcol{
            padding-top:40px;
        }


        

        
    </style>
    

</head>

<body id="page-top" class="index">
    
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ChordProgressions</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#chords">Chord Reference</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    

    <!-- Header -->
    <style>
    header{
        height: 120vh;
    }
    </style>
    <header>
        <!--<div class="container">-->
            
            <div class="intro-text">
                <div class="intro-lead-in">
                    Starting or finishing a chord progression?
                </div>
                <form action = "index.php" method = "post">

                
                <div class="modal-body row">
                    <div class="col-md-6">
                        <div class = "form-group leftcol">
                        
                        <h3> Select a Key and Genre to Get Started </h3>
                            <select class="form-control" name="startKey">
                                
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option selected value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                            </select>

                            <select class="form-control" name="startAccidental">
                                <option selected></option>
                                <option value="flat">&#9837;</option>
                                <option value="sharp">&#9839;</option>
                            </select>

                            <select class="form-control" name="startType">
                                
                                <option selected value="Major">Major</option>
                                <option value="Minor">Minor</option>
                            </select>

                            <select class="form-control" name="startGenre">
                                <option selected value="none">Genre(Optional)</option>
                                <option value="blues">Blues</option>
                                <option value="jazz">Jazz</option>
                                <option value="Rock">Rock</option>
                            </select>
                            <input type="submit" name="newProgression" class="btn btn-info" value="Generate Progression">
                            <br>
                            <!--lets try output here-->
                            


                        </div>
                    </form>
                <!-- Your first column here -->
                    </div>
                    <div class="col-md-6">
                        
                        <h3> Finish Your Chord Progression </h3>
                        <form name = "calc" action = "index.php" method = "post">
                            
                            <h4>What's your progression so far?</h4>
                            <select class="form-control" name="key">
                                
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option selected value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                            </select>

                            <select class="form-control" name="accidental">
                                <option selected></option>
                                
                                <option value="flat">&#9837;</option>
                                <option value="sharp">&#9839;</option>
                            </select>
                            <select class="form-control" name="type">
                                
                                <option selected value="Major">Major</option>
                                <option value="Minor">Minor</option>
                            </select>
                            <br>
                            
                            <input id="btn-info" class = "btn btn-info" type=button value="A" OnClick="calc.display.value+=' A'">
                            <input id="btn-info" class = "btn btn-info" type=button value="B" OnClick="calc.display.value+=' B'">
                            <input id="btn-info" class = "btn btn-info" type=button value="C" OnClick="calc.display.value+=' C'">
                            <input id="btn-info" class = "btn btn-info" type=button value="D" OnClick="calc.display.value+=' D'">
                            <input id="btn-info" class = "btn btn-info" type=button value="E" OnClick="calc.display.value+=' E'">
                            <input id="btn-info" class = "btn btn-info" type=button value="F" OnClick="calc.display.value+=' F'">
                            <input id="btn-info" class = "btn btn-info" type=button value="G" OnClick="calc.display.value+=' G'">
                            <br/>

                            <input id="btn-info" class = "btn btn-info" type=button value="&#9837;" OnClick="calc.display.value+='&#9837;'">
                            <input id="btn-info" class = "btn btn-info" type=button value="&#9839;" OnClick="calc.display.value+='&#9839;'">

                            <input id="btn-info" class = "btn btn-info" type=button value="m" OnClick="calc.display.value+='m'">
                            <input id="btn-info" class = "btn btn-info" type=button value="+" OnClick="calc.display.value+='+'">
                            <input id="btn-info" class = "btn btn-info" type=button value="&#176;" OnClick='calc.display.value+="&#176;"'>
                            <br/>
                            
                            <input id="btn-info" class = "btn btn-info" type=button value="Reset" OnClick="calc.display.value=''">



                            
                                <input class = "searchText" name="display" onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="text">


                                <input type="submit" name = "calculate" class="btn btn-info" value="go">
                            </form>

                            
                            
                <!-- Your second column here -->
                    </div>
            <!--</div>
                <!--<div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>-->
                </form>

                <?php

                // }
                        if(isset($_POST['newProgression'])){
                            
                            createProgression($_POST['startKey'], $_POST['startAccidental'], $_POST['startType'], $_POST['startGenre']);
                        }

                        function createProgression($key, $accidental, $type, $genre){

                            $circleOfFifths = array("C&#9837;", "G&#9837;", "D&#9837;", "A&#9837;", "E&#9837;", "B&#9837;", "F", "C", "G", "D", "A", "E", "B", "F&#9839;", "C&#9839;");
                            //initialize variables
                            $tones = array("A", "B", "C", "D", "E", "F", "G");
                            $count = 0;
                            $found = false;
                            if ($accidental == "flat") $accidental = "&#9837;";
                            if ($accidental == "sharp") $accidental = "&#9839;";
                            
                            $pos = 7;
                            $interval;
                            $progressions = array(); 
                            $flat = "&#9837;";
                            $sharp = "&#9839;";
                            $tonic = $key . $accidental;

                            //echo "<p>$tonic </p>";

                            //look for key within circle of fifths

                            while(!$found){
                                if($circleOfFifths[$pos + $count]===$tonic){
                                    $found = true;
                                    $pos = $pos + $count;
                                }
                                else if($circleOfFifths[$pos-$count]===$tonic){
                                    $found = true;
                                    $pos = $pos-$count;
                                }
                                else{
                                    $count++;
                                }
                            }

                            
                            //Minor Case

                            if ($type === "Minor"){
                        
                                $pos -= 3;
                                
                                if($pos >= 0 && $pos < 5){
                                    $count += 3;
                                }
                                else if($pos > 4 && $pos < 7){
                                    $count = 3 - $count;
                                }
                                else{
                                    $count -= 3;
                                }

                            }

                            //determine whether key uses flats or sharps
                            if ($pos < 7){
                                $pos = 1;
                                $interval = 3;
                                $sign = $flat;
                            }
                            else{
                                $pos = 5;
                                $interval = 4;
                                $sign = $sharp;
                            }
                            for($i = 0; $i < $count; $i++){
    
                                $tones[$pos] = $tones[$pos] . $sign;
                                $pos = ($pos+$interval)%7;
                                
                            }
                            $pos = (2 + ($count*$interval))%7;

                            if($genre === "none"){
                                if ($type == "Major"){
                                    //array_push($progressions, )
                                    $progressions[0][0]=$tones[$pos]." ".$tones[($pos+4)%7]." ".$tones[($pos+5)%7]."m " . $tones[($pos+3)%7] . " (I V vi IV)";
                                    $progressions[0][1]="Most common chord progression across genres. Appears on: <a href='https://www.youtube.com/watch?v=kVpv8-5XWOI'>Hey Soul Sister</a>, <a href='https://www.youtube.com/watch?v=EkHTsc9PU2A'>I'm Yours</a> <a href='https://www.youtube.com/watch?v=r00ikilDxW4'>21 Guns</a> <a href='https://www.youtube.com/watch?v=_WS9w10ygpU'>Hello</a>";
                                    //I V IV V or I IV I V or I iii IV V
                                    $progressions[1][0]=$tones[$pos]." ".$tones[($pos+3)%7]." ".$tones[($pos+4)%7]. " (I IV V)";
                                    $progressions[1][1]="The I IV V progression. Appears in: <a href='https://www.youtube.com/watch?v=ZFo8-JqzSCM'>Johnny B. Goode</a> <a href='https://www.youtube.com/watch?v=zaGUr6wzyT8'>Three Little Birds</a>. Variations:" . $tones[$pos]." ".$tones[($pos+4)%7]. " (or ". $tones[($pos+2)%7]."m) ".$tones[($pos+3)%7]." ".$tones[($pos+4)%7]. ") or " .$tones[($pos)]. " ". $tones[($pos+3)%7]. " ". $tones[$pos]." ".$tones[($pos+4)%7]. ").";
                                 
                                    //can also sub in a 2 for the 5 here
                                    $progressions[2][0]=$tones[$pos]." ".$tones[($pos+5)%7]."m ".$tones[($pos+3)%7]." " . $tones[($pos+4)%7] . " (I vi IV V)";
                                    $progressions[2][1]="The 50s chord progression. Appears on: <a href'https://www.youtube.com/watch?v=hwZNL7QVJjE'>Stand by Me</a> and <a href'https://www.youtube.com/watch?v=yXQViqx6GMY'>All I Want for Christmas</a>.";

                                     //I III7 IV iv or I III7 iv IV
                                    $progressions[3][0]=$tones[$pos]." ". $tones[($pos+2)%7]."7 ". $tones[($pos+3)%7]." " . $tones[($pos+5)%7] . " (I III7 IV vi)";
                                    $progressions[3][1]="Creep progression. Appears on: <a href='https://www.youtube.com/watch?v=H1tPiqT5zeE'>Creep</a>";

                                    //I bVII IV I
                                    if(substr( $tones[($pos+6)%7] , 1)==="&#9839;"){
                                        $progressions[4][0]=$tones[$pos]." ". substr($tones[($pos+6)%7], 0, 1)." ". $tones[($pos+3)%7]." " . $tones[($pos)%7] . " (I bVII IV I)";

                                        $progressions[4][1]="Flat VII Progression. Appears on: <a href='https://www.youtube.com/watch?v=NWP_lqd_8M0'>Hey Jude</a> <a href='https://www.youtube.com/watch?v=1w7OgIMMRc4'>Sweet Child O Mine</a>.";
                                            

                                    }
                                    else{
                                        $progressions[4][0]=$tones[$pos]." ". $tones[($pos+6)%7]."b7 ". $tones[($pos+3)%7]." " . $tones[($pos)%7] . " (I bVII IV I)";
                                        $progressions[4][1]="Flat VII Progression. Appears on: <a href='https://www.youtube.com/watch?v=NWP_lqd_8M0'>Hey Jude</a> <a href='https://www.youtube.com/watch?v=1w7OgIMMRc4'>Sweet Child O Mine</a>.";
                                        
                                    }

                                    //I V ii IV
                                    $progressions[5][0]=$tones[$pos]." ". $tones[($pos+4)%7]." ". $tones[($pos+1)%7]."m ".$tones[($pos+3)%7] . " (I V ii IV)";
                                    $progressions[5][1]="Common 2000s progression. Appears on: <a href='https://www.youtube.com/watch?v=xGytDsqkQY8'> Closing Time</a> <a href='https://www.youtube.com/watch?v=2EwViQxSJJQ'>Irreplaceable</a> <a href='https://www.youtube.com/watch?v=1k8craCGpgs'>Don't Stop Believing</a> Variations: ". $tones[$pos]." ". $tones[($pos+4)%7]." ". $tones[($pos+2)%7]."m ".$tones[($pos+3)%7] . "or ". $tones[($pos+1)%7]."m ".$tones[($pos+3)%7] ." ". $tones[$pos]." ". $tones[($pos+4)%7]." as heard in Justin Timberlake's <a href='https://www.youtube.com/watch?v=IC8qPpnD0uE'>What Goes Around Comes Around</a> and Oasis's <a href='https://www.youtube.com/watch?v=6hzrDeceEKc'>Wonderwall</a>.";

                                }
                                if ($type === "Minor"){
                                    $pos = ($pos+5)%7;

                                    //can also throw a i at the end of this. can also cut out the 4 and go straight to i v
                                    //i VI III VII  i III VII this is the 4 chords
                                    $progressions[0][0]=$tones[($pos)]."m ".$tones[($pos+5)%7]." ".$tones[($pos+2)%7]. " " .$tones[($pos+6)%7]." (i VI III VII)";
                                    $progressions[0][1]="Most common chord progression. Appears on: <a href='https://www.youtube.com/watch?v=hLQl3WQQoQ0'>Someone Like You</a> <a href='https://www.youtube.com/watch?v=SR6iYWJxHqs'>Grenade</a> <a href='https://www.youtube.com/watch?v=Soa3gO7tL-c'>Boulevard of Broken Dreams</a>";

//i v vi iii
                                    //can sub in last VII for a V7 or get rid of 1st VII dream on
                                    //my heart will go on, somebody that i used to know, let her go
                                    $progressions[1][0]=$tones[($pos)]."m ".$tones[($pos+6)%7]." ".$tones[($pos+5)%7]. " ".$tones[($pos+6)%7]." (i VII VI VII)";
                                    $progressions[1][1]="This progressions can be heard in songs like <a href='https://www.youtube.com/watch?v=FHG2oizTlpY'>My Heart Will Go On</a>, <a href='https://www.youtube.com/watch?v=8UVNT4wvIGY'>Somebody That I Used to Know</a> and <a href='https://www.youtube.com/watch?v=RBumgq5yVrA'>Let Her Go</a>."; 



                                    //i iv v / i iv vii
                                    //i iv i
                                    $progressions[2][0]=$tones[($pos)]."m ".$tones[($pos+3)%7]."m ".$tones[($pos+4)%7]. "m (i iv v)";
                                    $progressions[2][1]="This progression isn't too prevalent in popular music in the minor key but really does encompass the somber tone the minor key is characterized with. Variation include changing the ". $tones[($pos+4)%7]." to a ". $tones[($pos)]." to give us " . $tones[($pos)]."m ".$tones[($pos+3)%7]."m ".$tones[$pos]."m or a ". $tones[($pos+6)%7]." to give us ". $tones[($pos)]."m ".$tones[($pos+3)%7]."m ".$tones[($pos+6)%7];

                                    

                                }

                            }

                            elseif($genre==="blues"){
                                if($type==="Major"){
                                    //12 bar 1
                                    $progressions[0][0]=$tones[$pos]."7 ".$tones[$pos]."7 ".$tones[$pos]."7 ".$tones[$pos]."7 ". $tones[($pos+3)%7]."7 ".$tones[($pos+3)%7]."7 ".$tones[$pos]."7 ".$tones[$pos]."7 ".$tones[($pos+4)%7]."7 ".$tones[($pos+3)%7]. "7 " .$tones[$pos]."7 ".$tones[$pos]."7";
                                        $progressions[0][1]="This is the traditional 12 bar blues.";

                                    //8 bar
                                    
                                }
                                if($type==="Minor"){
                                    $pos = ($pos+5)%7;
                                    $progressions[0][0]=$tones[$pos]."m7 ".$tones[($pos+3)%7]."m7 ".$tones[$pos]."m7 ".$tones[$pos]."m7\n ".
                                    $tones[($pos+3)%7]."m7 ".$tones[($pos+3)%7]."m7 ".$tones[$pos]."m7 ".$tones[$pos]."m7 ".
                                    $tones[($pos+5)%7]."7 ".$tones[($pos+4)%7]. "7 " .$tones[$pos]."m7 ".$tones[$pos]."m7";
                                    $progressions[0][1]="This is the traditional 12 bar blues in the minor key.";
                                }
                            }

                            elseif($genre==="jazz"){

                                if($type==="Major"){
                                    //ii V I
                                    $progressions[0][0]=$tones[$pos+1]."m7 ".$tones[$pos+4]."7 ".$tones[$pos]."maj7" . " (ii V I)";
                                    $progressions[0][1]="This progression is one of the most common jazz progressions. Can be heard in songs like <a href='https://www.youtube.com/watch?v=795sG19cPmU'>Autumn Leaves</a>, <a href='https://www.youtube.com/watch?v=GaTuJEFPxDs'>La Vie en Rose</a> and <a href='https://www.youtube.com/watch?v=5hxibHJOE5E'>Fly me to the Moon</a>. A variation of this progression is starting on " . $tones[$pos]." and adding a ".$tones[($pos+5)%7]."m7 ". "after the ". $tones[$pos]. " giving us ".$tones[$pos]."maj7 ".$tones[($pos+5)%7]."m7 ".$tones[($pos+1)%7]."m7 ".$tones[($pos+4)%7];
                                    
                                    //IV iv
                                    $progressions[1][0]=$tones[$pos]."maj7 ".$tones[($pos)%7]."7 ".$tones[($pos+3)%7]."maj7 ".$tones[($pos+3)%7]."m7 "."(I I IV iv)";
                                    $progressions[1][1]="This progression is a good example of tension and release in jazz.";


                                }
                                if($type==="Minor"){
                                    $pos = ($pos+5)%7;
                                    //minor 2 5 1
                                    //im7 im7/b7  bVI7 V7
                                    $progressions[0][0]=$tones[$pos+1]."m7b5 ".$tones[$pos+4]."7 ".$tones[$pos]."m7" . " (ii V i)";
                                    $progressions[0][1]="This progression is the minor rendition of the common ii V i progression";
                                    $flat6 = $tones[($pos+5)%7];                                    
                                    $flat7 = $tones[($pos+6)%7];


                            }


                        }
                        //we have our progressions in an array now. We can have them displayed along with a description with a 2d array. let's do that now
                        echo "Progressions:<br>";


                        for($i=0; $i<count($progressions);$i++){
                            //explode progression $i 0 into an array
                            $chords = explode(" ", $progressions[$i][0]);
                            echo '<input id="btn-info" class = "btn-chordPlay" type=button value=&#9658;>';
                            

                            if($genre === "blues"){
                                for($j=0; $j<count($chords); $j++){
                                    echo '<input id="btn-info" class = "btn-chordBlues" type=button value='.$chords[$j].'>';
                                
                            }
                            }

                            else{
                                for($j=0; $j<count($chords)/2; $j++){
                                    echo '<input id="btn-info" class = "btn-chord" type=button value='.$chords[$j].'>';
                                
                            }
                        }
                                 echo '<br>';
                            
                        
                        }
                        }


                if(isset($_POST['calculate'])){

                            //construct based on circle fifths as usual 
                            //set pos and use that to set roman numeral ordered array
                            //we will start w looking backwards at our input
                            //tricky part is now determining whats next
                            //will check for dominant, predominant, diminished, tonal, augmented
                            //no modulation yet, but we can do that later

                            completeProgression($_POST['display'], $_POST['key'], $_POST['accidental'], $_POST['type']);
                        }

                        //for validate we
                        //make sure that we have format letter accidental 
                        //check if length is under 3
                        //[0] is a key
                        //[1] is an accidental
                        //change color for progressions not ending probably

                        function completeProgression($chords, $key, $accidental, $type){
                            
                            $circleOfFifths = array("C&#9837;", "G&#9837;", "D&#9837;", "A&#9837;", "E&#9837;", "B&#9837;", "F", "C", "G", "D", "A", "E", "B", "F&#9839;", "C&#9839;");
                            //initialize variables
                            $tones = array("A", "B", "C", "D", "E", "F", "G");
                            $count = 0;
                            $found = false;
                            if ($accidental == "flat") $accidental = "&#9837;";
                            if ($accidental == "sharp") $accidental = "&#9839;";
                            
                            $pos = 7;
                            $interval;
                            $romanNums = array(); 
                            $flat = "&#9837;";
                            $sharp = "&#9839;";
                            $tonic = $key . $accidental;
                           

                            //echo "<p>$tonic </p>";

                            //look for key within circle of fifths

                            while(!$found){
                                if($circleOfFifths[$pos + $count]===$tonic){
                                    $found = true;
                                    $pos = $pos + $count;
                                }
                                else if($circleOfFifths[$pos-$count]===$tonic){
                                    $found = true;
                                    $pos = $pos-$count;
                                }
                                else{
                                    $count++;
                                }
                            }

                            
                            //Minor Case

                            if ($type === "Minor"){
                        
                                $pos -= 3;
                                
                                if($pos >= 0 && $pos < 5){
                                    $count += 3;
                                }
                                else if($pos > 4 && $pos < 7){
                                    $count = 3 - $count;
                                }
                                else{
                                    $count -= 3;
                                }

                            }

                            //determine whether key uses flats or sharps
                            if ($pos < 7){
                                $pos = 1;
                                $interval = 3;
                                $sign = $flat;
                            }
                            else{
                                $pos = 5;
                                $interval = 4;
                                $sign = $sharp;
                            }
                            for($i = 0; $i < $count; $i++){
    
                                $tones[$pos] = $tones[$pos] . $sign;
                                $pos = ($pos+$interval)%7;
                                
                            }
                            $pos = (2 + ($count*$interval))%7;
                            if ($type === "Minor"){
                                $pos = ($pos+5)%7;
                            }
                            
                            //if ($type==="Major")
                            for ($i=0; $i<7;$i++){
                                //adjust type of chord with the key of minor or major
                                if ((($i === 1 || $i === 2 || $i === 5) && $type==="Major") || (($i === 0 || $i === 3) && $type==="Minor")){
                                    $romanNums[$i] = $tones[$pos%7]."m";
                                }
                                else if((($i === 6) && $type==="Major") || (($i === 1) && $type==="Minor")){
                                    $romanNums[$i] = $tones[$pos%7]."°";###°
                                }
                                else{
                                    $romanNums[$i] = $tones[$pos%7];
                                }
 
                                $pos++;
                            }

                            //perhaps we should set the pos to the major tonic and use %7 on roman numeral array
                            //pos can be our offset
                            if ($type==="Major"){
                                $pos = 0;
                                $relativeOffset = 5;
                            }
                            if ($type==="Minor"){

                                $pos = 2;
                                $relativeOffset = 2;
                            }
                            //create array based on our input
                            $valid = true;
                            $keys = array("A","B","C","D","E","F","G");
                            $types = array("°", "m", "+");
                            $progression = explode(" ", $chords);
                            if ($progression[0]!="") $valid = false;
                            
                            if ($valid === true){
                            echo $progression[0];
                            for($k = 1; $k < count($progression); $k++){
                                $valid = false;
     
                                foreach ($keys as $key){
                                    if ($progression[$k]{0} === $key) $valid = true;
                                }

                                //if validkey is false everything is false

                                //check for types and accidentals
                                if (strlen($progression[$k])===2){
                                    if (($progression[$k]{1} === "°" || $progression[$k]{1}==="m" || $progression[$k]{1}==="+" || $progression[$k]{1} === $flat || $progression[$k]{1} === $sharp) === false){

                                        $valid = false;
                                    }

                                }

                                if (strlen($progression[$k])===3){
                                    if (($progression[$k]{1} === $flat || $progression[$k]{1} === $sharp)===false){
                                        $valid = false;
                                    }
                                    if (($progression[$k]{2} === "°" || $progression[$k]{2} === "m" || $progression[$k]{2} === "+")===false){
                                        $valid = false;
                                    }
                                }


                                //if len is 2 then it must be accidental or type

                                //if len is 3 it must be type

                                //check length

                            }
                        }
                            
                            
                            //validation will occur here
                            //for loop through progression 
                            //check that chord 1 is empty
                            //then for every chord check that len is 1 or 2 and that [0] is key and [1] is accidental
                            if ($valid === true){
                            //print_r($progression);
                            $analysis = count($progression) -1;
                            $possibilities = array();
                            $option = 0;
                            
                            //from here we'll analyze backwards.
                            if (($progression[$analysis]===$romanNums[(4+$pos)%7]) || ($progression[$analysis]===$romanNums[(2+$pos)%7])){
                                //We can follow our last chord x with, we can end w a perfect authentic cadence by going to 
                                //the 1 chord. Alternatively we can go to 
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[0];
                                $option++;

                                //we can go 4-1 for a plagal cadence

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[$pos+3];
                                $possibilities[$option][$analysis+2]=$romanNums[0];
                                $option++;

                                //rel major for plagal
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[(3+$pos+5)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[0];
                                $option++;
                                

                                //go to rel major/min, explain the common 4 chords vi V IV I
                                
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($relativeOffset)%7];
                                $option++;
                                
                                
                                
                            }

                            if($progression[$analysis] === $romanNums[(6+$pos)%7]){
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[$pos];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[$pos+2];
                                $option++;

                                
                                

                                //resolve diminished chord to 1 or iii
                            }

                            if($progression[$analysis] === $romanNums[($pos+3)%7] || $progression[$analysis] === $romanNums[($pos+3+$relativeOffset)%7]){

                                //4-1
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[0];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[$relativeOffset];
                                $option++;

                                //4-4m
                                if($type==="Major" && $progression[$analysis] === $romanNums[($pos+3)%7]){
                                    $possibilities[$option]=$progression;
                                    $possibilities[$option][$analysis+1]=$romanNums[($pos+3)%7]."m";
                                    $option++;
                                }

                                //4-5-1
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[$pos+4];
                                $possibilities[$option][$analysis+2]=$romanNums[$pos];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4+$relativeOffset)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[$pos];
                                $option++;

                                //4-5
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4+$relativeOffset)%7];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4)%7];
                                $option++;

                                
                                
                            }
                            
                            //echo $romanNums[$pos+4]."+";

                            if($progression[$analysis]===$romanNums[$pos+4]."+" || $progression[$analysis]===$romanNums[($pos+4+$relativeOffset)%7]."+"){

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4)%7];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[($pos)];
                                $option++;


                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[($pos+$relativeOffset)%7];


                                $option++;
                               
                            }

                            if($progression[$analysis]===$romanNums[$pos] || $progression[$analysis]===$romanNums[($pos+$relativeOffset)%7]){

                                //1-4-5

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+3)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[($pos+4)%7];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+3+$relativeOffset)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[($pos+4)%7];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+3)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[($pos+4+$relativeOffset)%7];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+3+$relativeOffset)%7];
                                $possibilities[$option][$analysis+2]=$romanNums[($pos+4+$relativeOffset)%7];
                                $option++;

                                //1-4
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+3)%7];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+3+$relativeOffset)%7];
                                $option++;

                                //1-5
                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4)%7];
                                $option++;

                                $possibilities[$option]=$progression;
                                $possibilities[$option][$analysis+1]=$romanNums[($pos+4+$relativeOffset)%7];
                                $option++;

                                //I–V–vi–IV
                                if (($type==="Major") && ($progression[$analysis]===$romanNums[$pos])){
                                    $possibilities[$option]=$progression;
                                    $possibilities[$option][$analysis+1]=$romanNums[($pos+4)%7];
                                    $possibilities[$option][$analysis+2]=$romanNums[($pos+5)%7];
                                    $possibilities[$option][$analysis+3]=$romanNums[($pos+3)%7];
                                    $option++;
                                }
                                //for loop here
                                

                            }
                            echo "Progression:<br>";
                            
                            for($i=0; $i<count($possibilities);$i++){
                                echo '<input id="btn-info" class = "btn-chordPlay" type=button value=&#9658;>';
                                    //explode progression $i 0 into an array

                                    for($j=1; $j<count($possibilities[$i]); $j++){
                                        if($j>$analysis){
                                            echo '<input id="btn-info" class = "btn-chordnew" type=button value='.$possibilities[$i][$j].'>';
                                        }
                                        else{
                                        echo '<input id="btn-info" class = "btn-chord" type=button value='.$possibilities[$i][$j].'>';
                                    }
                                    }
                                    
                                        echo '<br>';
                            
                        
                                }
                            }

                            else{
                                echo "<h4>*Invalid chord progression was entered.</h4>";
                            }
                            

                        }

                ?>
            </div>
        </div>
    </header>

    <!-- Results section -->
    <!-- leave blank with a description until we hit submit, then show the options -->
    <section id="about">
        <!--<div class="container">-->
            <div class="row">
                <div class="col-lg-12 text-center">
                          
                </div>

            </div>
            <!--</div>-->
            
        </div>
    </section>

    <!-- We can make this section an interactive chord library -->
    <!--we'll have a different background for every genre -->
    <section id="chords" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Chord Library</h2>
                    <h3 class="section-subheading">Will make a fretboard appear here and display appropriate chord/tab.</h3>
<h3>Simple Calculator</h3>
<br/>


                </div>
            </div>
            
        </div>
    </section>

    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Samin Foysol 2017?</span>
                </div>
                <div class="col-md-4">
                   
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
