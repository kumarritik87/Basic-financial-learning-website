<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section id="contact">
         <h1 class="h-primary center">Contact us</h1>
         <div id="contact-box">
         <form action="userinfo.php" method="post"> 
         <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="Name"id="name" placeholder="Enter your Name">
            </div>
             
             <div class="form-group">
                <label for="name">Email:</label>
                <input type="text" name="Email"id="name" placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <label for="name">Phone:</label>
                <input type="text" name="Phone"id="name" placeholder="Enter your number">
            </div>
            <div class="form-group">
                <label for="name">Message: </label>
                <textarea name="Message" id="Message" cols="30" rows="10">

                </textarea>
            </div> 
            <button type="submit" class="btn btn-success">Submit</ 
            button>
         </form>
        </div>
     </section> 
</body>
</html>