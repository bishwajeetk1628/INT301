    <style type="text/css">
#alert
{
    width:40%;
    height:auto;
    background-color:white;
    color:black;
    border:1px solid silver;
    border-radius:4px;
    font-weight:bold;
    font-size: 16px;
    -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
  -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
  box-shadow:         3px 3px 5px 6px #ccc; 
    position: fixed;
    z-index: 10000;
    top: 145px;
    display:none;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}
#alert_val
{
    margin-top:25px;
    padding:5%;
    width:auto;
    border-top:1px solid silver;
    border-bottom:1px solid silver;
    margin-bottom:10px;
}
@media screen and (max-width:550px){
    #alert
    {
        width:96%;
    }
}
    </style>

     <div id="alert">
         <img src="../images/close.png" onclick="closealert()" style="width:30px;padding:7px;background-color:black;border-radius:50%;float:right;margin:10px;"><br>
         <div id="alert_val">
             fgf
         </div>
        <button class="btn btn-primary btn-lg btn-block waves-effect addbtn"  onclick="closealert()" style="width:100px;float:right;margin:10px">OK</button>
     </div>
     <script>
         function closealert()
         {
             $('#alert').fadeOut('slow');
         }
     </script>