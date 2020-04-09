<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style type="text/css">
.loader {
  position: fixed;
  left: 0;
  top: 0;
  right:0;
  bottom:0; 
  text-align: center;
  z-index: 24000;
  display: none;
  margin: auto;
  width: 100%;
  align-item:center;
  background-color: rgba(0,0,0,0.5);
  height: 100%;
}
#live
{
    width:350px;
    background-color:#68cf38;
    color:white;
    padding: 40px;
    box-shadow: 0 0 10px black;
    font-size: 15px;
    border-radius: 10px;
    position: fixed;
    z-index: 1000000000;
    top: 20px;
    font-size: 20px;
    display: none;
    left: 15%;
    transform: translateX(-50%);
    text-align: center;
}
    </style>

    <div class="loader"><i class="fa fa-spinner fa-pulse" style="background-color:transparent;vertical-align:middle;color:white;margin:20%;border:none;padding:0;font-size:50px"></i></div>
     <div id="live"></div>