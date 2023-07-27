<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Otm</title>
</head>

<body>
    <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
        <div style="margin:50px auto;width:70%;padding:20px 0">
            <div style="border-bottom:1px solid #eee">
               
            </div>
           
           
            <h2
                style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">
               todo Application</h2>
           
           

//
<p>
user registration
/// post//
http://127.0.0.1:8000/api/register
///

//use post man  form data//
'first_name', 'last_name', 'email','password'
///////////////////////////////////////////////
// //
</p>
<p>

user login 
/// post //
http://127.0.0.1:8000/api/user/login
///

//use post man  form data//
'email','password'
///////////////////////////////////////////////
//use post man  form data//
'first_name', 'last_name', 'email','password'
///////////////////////////////////////////////
// //

</p>

<p>
forgate password send otp  
/// post //
http://127.0.0.1:8000/api/send/otp
///

//use post man  form data//
'email'
///////////////////////////////////////////////




//use post man  form data//
'first_name', 'last_name', 'email','password'
///////////////////////////////////////////////
</p>
<p>

forgate password verify otp  
/// post //
http://127.0.0.1:8000/api/verify/otp
///

//use post man  form data//
'email'
'otp'
///////////////////////////////////////////////





//use post man  form data//
'first_name', 'last_name', 'email','password'
///////////////////////////////////////////////
</p>
// //

// //
<p>
reset password verify otp  
/// post //
http://127.0.0.1:8000/api/reset/password
///

//use post man  form data//
header  used jwt  token 
token = jwt token
'password'
///////////////////////////////////////////////
</p>

<p>
///////////////////////////////////////////////

to do api 
//////////////////////////////////////////////
</p>
<p>
    
/////////////////////////////
all product
//////////////////////////////

// //
to do list data all product
/// get //
http://127.0.0.1:8000/api/todo/list
used header token = jwt token 
///

</p>




<p>

///////////////////////////////////////////////
create
///////////////////////////////////////////////


/todo product create/
// post // 

http://127.0.0.1:8000/api/todo
//
'title', 'description'
//'user_id'//
used header token = jwt token 

.user_id.
//

</p>


<p>

///////////////////////////////////////////////
update
///////////////////////////////////////////////


/todo product update/
// patch // 

http://127.0.0.1:8000/api/todo/{id}
http://127.0.0.1:8000/api/todo/3
//
'title', 'description'
//'user_id'//
used header token = jwt token 

.user_id.
</p>



<>
////////////////////////////////////////////////
delete
////////////////////////////////////////////////



/todo product delete/
// delete // 

http://127.0.0.1:8000/api/todo/{id}
http://127.0.0.1:8000/api/todo/3
//

used header token = jwt token 

.user_id.
///////////////////////////
///////////////////////////



           </p>
            <hr style="border:none;border-top:1px solid #eee" />
            <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xamppeighttwo\htdocs\laravel\ms\Assignment_module_21t\resources\views/welcome.blade.php ENDPATH**/ ?>