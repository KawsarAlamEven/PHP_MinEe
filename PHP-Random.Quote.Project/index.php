<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Quotes on Faith</title>
</head>
<body>
   <div class="quotes">
    <?php
       $MyQuotes = array("“Indeed, I am near.” [Quran 2:186].",
       "“Allah comes in between a person and his heart.” [Quran 8:24]",
       "“The most beloved actions to Allah are those performed consistently, even if they are few.”<br> [Prophet Muhammad PBUH, Sahih Bukhari].",
       "“There is no relationship between Allah and anyone except through obedience to Him.”<br> [Umar Ibn Al Khattab].",
       "“We were the most humiliated people on earth & Allah gave us honour through Islam.”<br> [Umar Ibn Al Khattab].",
       "“Sell this life for the next and you win both of them. Sell the next life for this and you lose both of them.”<br> [Hasan al-Basri].");
       
       $newArray = array_rand($MyQuotes);
       echo $MyQuotes[$newArray];
   ?>
   </div>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #5cdb94;
    font-size: 20px;
}
.quotes{
    background: #fbde68;
    padding: 20px;
    border: 2px solid #ff561b;
    border-radius: 40px;
}
    
</style>
    
</body>
</html>