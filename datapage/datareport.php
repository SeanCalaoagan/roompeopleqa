<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Room People Counter</title>
    <style>
        body{
            background-image: url('https://imgur.com/vu4BeIv.jpg');
            margin: 0px;
            padding: 0px;
            background-size: cover;
            font-family: "Roboto Slab", serif;
        }

        h2{
            text-align: center;
            font-size: 300%;
            color: #22092C;
        }

        .number{
            text-align:center;
            font-size: 700%;
            color: #424769;
        }

        .header{
            background-color: #E1AFD1;
            height: 100px;
            width: 100%;
            text-align: center;
            font-size: 400%;
            margin: 0px;
            padding-top: 25px;
            padding-bottom: 15px;
            color: #FFE6E6;
        }

        .box{
            text-align: center;
            padding: 20px;
            background-color: #E1AFD1;
            color:#FFE6E6;
            width: 65%;
            margin: auto;
            margin-bottom: 40px;
            font-weight: bold;
            border-radius:20px;
            font-size:150%;
        }

        .inlinebox{
            display:inline-block;
            vertical-align: top;
        }

        .blacktext{
            color: #424769;
        }
    </style>
</head>
<body>
    <h1 class="header">Room People Counter</h1>
    <h2>Current Number of People:</h2>
    <p class="number">###</p>
    <div class="box">
        <p>Members of slashSRSS:</p>
        <ul class="blacktext">
            <li>Bustos, Simon</li>
            <li>Santiago, Ramick Leo</li>
            <li>Calaoagan, Sean Jefferson M.</li>
            <li>Quintos, Sofia</li>
        </ul>
    </div>
    <br>

    <div class="box">
        <p>Calculator</p>
        <form id="timerange" onsubmit="timeRange(); return false;">
            <select name="times" id="time1">
                <option value="0">April 18, 17:00</option>
                <option value="1">April 18, 18:00</option>
                <option value="2">April 18, 19:00</option>
                <option value="3">April 19, 16:00</option>
                <option value="4">April 19, 17:00</option>
                <option value="5">April 19, 18:00</option>
            </select>
            <br>
            <select name="times" id="time2">
                <option value="0">April 18, 17:00</option>
                <option value="1">April 18, 18:00</option>
                <option value="2">April 18, 19:00</option>
                <option value="3">April 19, 16:00</option>
                <option value="4">April 19, 17:00</option>
                <option value="5">April 19, 18:00</option>
            </select>
            <br>
            <input type="submit">
        </form>

        <!--The Calculated Values-->
        <p>Mean:</p>
        <p id="meanValue" class="blacktext">###</p>
        <p>Median:</p>
        <p id="medianValue" class="blacktext">###</p>
        <p>Mode:</p>
        <p id="modeValue" class="blacktext">###</p>
        <p>Variance:</p>
        <p id="varianceValue" class="blacktext">###</p>
        <p>Mean Deviation:</p>
        <p id="meandevValue" class="blacktext">###</p>
        <p>Standard Deviation:</p>
        <p id="standevValue" class="blacktext">###</p>
        <p>Z Score:</p>
        <p id="zscoreValue" class="blacktext">###</p>
        <p>Value of the Z-Score Sample:</p>
        <p id="zscoreSample" class="blacktext">###</p>
    </div>

    <br>
    <div class="box">
        <p>Data Type</p>
        <p class="blacktext">The data type that this sensor collects is the amount of people that go in and out.</p>
    </div>
    <br>
    <div class="box">
        <p>Location</p>
        <p class="blacktext">The location of where the sensor collects the data is is the station of North Avenue MRT, it has a staircase that leads towards Trinoma. It's always packed with people since it's the last station going North.</p>
        <p class="blacktext">
        The space is fairly small which makes it very easy for it to be crowded by people, especially when leaving the train going towards the mall.
        </p>
        <br>
        <p>Picture of Location</p>
        <img src="https://imgur.com/hjlP19M.jpg" width="50%" alt="train station">
    </div>
    <br>
    <div class="box">
        
        <p>Describing the Data Set</p>
        <div class="inlinebox">
            <p>April 18:</p>
            <img src="https://imgur.com/G19MDsu.png">
        </div>
        <div class="inlinebox">
            <p>April 19:</p>
            <img src="https://imgur.com/krbfPnb.png">
        </div>

    </div>
    <br>
    <div class="box">
        <p>Visualization of Data</p>
        <div class="inlinebox">
            <p>April 18 People Mean Graph</p>
            <img src="https://imgur.com/WHNi6Cu.png">
        </div>
        <br>
        <div class="inlinebox">
            <p>April 19 People Mean Graph</p>
            <img src="https://imgur.com/cup5yxV.png">
        </div>

    </div>
    <br>
    <div class="box">
        <p>Outliers</p>
        <p class="blacktext">There were instances where the sensor would continously activate whenever someone is infront of it for a long time. Due to this, the counter can sometimes go up or down quickly, leading to an inaccurate value.</p>
    </div>
    <div class="box">
        <p>Questions</p>
        <br>
        <p>How do you interpret a data that has a standard deviation that is very close to zero?</p>
        <p class="blacktext">Since standard deviation is a measure of how spread out the numbers are in a data. If the standard deviation of a data is very close to zero, it means that the numbers are close to the mean. So there is no difference between the numbers and they are all close together. </p>
        <br>
        <p>How do you interpret a data that has a variance that is greater than the mean value?</p>
        <p class="blacktext">The greater the variance, the more spread out are the data points. Therefore if the variance is greater than the mean, then there is dispersion in the data which means the data points are more scattered opposed to being close together, or has a lot of variability in it. Additionally, it means there is a big difference between the numbers in the data. </p>
        <br>
        <p>How do you explain a data that has its mean, median, and mode equal to each other? </p>
        <p class="blacktext">If the mean, median, and mode are equal to each other or are in the same group of numbers, then it means the data has been symmetrically distributed, making the data evenly spread out on both sides of the value of mean, median, and mode which makes it the common value in the data.</p>
        
    </div>


   <script src="script.js"></script>
</body>
</html>
