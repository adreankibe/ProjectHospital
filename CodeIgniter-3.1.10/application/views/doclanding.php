<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width,initial-scale=1"> 
            <title>Landing page</title>
            <link rel="stylesheet" href="<? php echo site_url();?>css/styles.css">
            <script src="landing_page.js"></script>

<script type="text/javascript">
    
    var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

            <style type="text/css">
                bory{
    padding:0px;
    margin:0px;
}
.title{
    background-color:silver;
    width:100%;
    height:100px;
    padding:10px;
    margin:0;
    margin-top: 0;
    justify-content: center;
    align-items: center;
    color:black;
}
.title h2{
    font-size:30px;
    text-align:center;
    font-weight:bold;
    margin:auto;

}
.navigation{
    width:auto;
    height:50px;
    background-color:silver;
    margin-right:-20px;
}
.navigation nav ul{
    list-style-type:none;
    text-align:right;
    margin-top:0px;
    display:span;
    
}
.navigation nav ul li{
    display:inline-block;
    text-decoration:none;
    margin-top:8px;
}
.navigation nav ul li a{
    text-decoration:none;
    float:right;
    margin-left:60px;
    margin-top:5px;
    margin-right:25px;
}
.navigation nav ul li form input{
    margin-left:10px;
    margin-right:-35px;
    font-weight:italic;
}
.card{
    position:absolute;
    border:1px solid rgba(231, 230, 230, 0.897);
    width:400px;
    height:100%;
    margin-top:10px;
    border-radius:5px;
    border-bottom:none;
    margin-left:0px;

}
.card p img{
    width:250px;
    height:250px;
    margin-left:60px;
    border-radius:50%;

}

.card label{
    color:white;
    background-color:rgb(115, 115, 209);
    border:1px transparent;
    width:200px;
    height:50px;
    border-radius:5px;
    padding:12px;
    font-size:17px;

}
.card p{
    font-size:17px;
    margin-top:40px;
    border-bottom:1px slategrey;
}
.content{
    border:1px rgb(187, 15, 15);
    position:absolute;
    width:55%;
    margin-left:413px;
    margin-top:10px;
    border-radius:5px;
    height:300px;
    background-image:url('doc.jpg');
}
.content .welcome h2,h3{
    margin-bottom:20px;
    color:white;
    text-align:center;
    font-size:60px;
    font-family: 'Times New Roman', Times, serif;
}
.side-bar{
    border:1px solid rgba(231, 230, 230, 0.897);
    position:absolute;
    margin-left:77.2%;
    width:300px;
    border-right:none;
    border-radius:5px;
    height:100%;
    border-bottom:none;
    margin-right:0px;
}
.side-bar h2{
    font-size:20px;
    text-align:center;
    font-family:'Times New Roman', Times, serif;
    
}
#myBtn{
    position:fixed;
    background-color:rgb(104, 104, 202);
    color:white;
    width:150px;
    height:70px;
    float:right;
    margin-top:580px;
    margin-left:1730px;
    cursor:pointer;
    font-weight:bold;
    border-radius:5px;
    border:none;
    font-size:25px;
}
#myBtn:hover{
    background-color:greenyellow;
}
.modal-confirm{
   display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4);

}
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: none;
    border-radius:5px;
    width: 300px; /* Could be more or less, depending on screen size */
    height:150px;
  }
  .button{
    background-color:rgb(104, 104, 202);
    color:white;
    border:none;
    border-radius:5px;
    font-weight:bold;
    margin-left:20px;
    flex:1;
    display:inline-flex;
    position:relative;
    float:right;
    height:40px;
    margin-right:110px;
    margin-bottom:20px;
    cursor:pointer;
  }
  .close{
      float:right;
      cursor:pointer;
  }
  .parag{
      font-family:'Times New Roman', Times, serif;
          font-size:20px;
  }
  .modal-diagnose{
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0, 0, 0, 0.671);
  }
  .modal2-content{
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: none;
    border-radius:5px;
    width: 500px; /* Could be more or less, depending on screen size */
    height:500px;
  }
  .modal2-content form input{
      width:79.5%;
      margin:auto;
      margin-bottom:5px;
      border-right:none;
  }
  .modal2-content form textarea{
      width: 80%;
      margin:auto;
      margin-bottom:5px;
      border-right:none;
  }
  .modal2-content form input[type="submit"]{
    background-color:rgb(104, 104, 202);
    color:white;
    border:none;
    border-radius:5px;
    font-weight:bold;
    margin-left:20px;
    cursor:pointer;
    width:100px;
    height:40px;
    float:right;
    margin-right:250px;
  }

  footer .foot{
      background-color:rgba(0, 0, 0, 0.664);
      width:100%;
      height:400px;
      margin:auto;
      margin-top:1200px;
  }

  footer .foot p{
      font-size:25px;
      color:yellow;
      text-align:center;
  }

footer .foot a{
    flex:1;
    text-align:center;
    display:inline-block;
    text-decoration:none;
    margin:auto;
    color:silver;
    margin-left:30px;
}


            </style>
        </head>
        <body>
            <div class="title"><h2> <?php echo $this->session->userdata('email');?></h2></div>
            <div class="navigation">
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PROFILE</a></li>
                    <li><a href="#">PATIENTS</a></li>
                    <li>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search...">
                        </form>
                    </li>
                    <li><a href="#">LOGGED IN AS: <?php echo $this->session->userdata('email');?></a></li>
                </ul>
            </nav>
            </div>
            <div class="card">
                <? php echo $this->session->sess_destroy();?>
                <p>
                    <img src="hacker.jpg" alt="No image to display">
                </p>
                <label for="name">Name: </label> 
                <p>
                    Ouda Wycliffe
                </p>
                <label for="rank">Domain: </label>
                <p>
                     Doctor
                </p>
                <label for="conact">Contact: </label>
                <p>
                     ouda.wycliffe@gmail.com
                </p>
                <label for="shift">Shift: </label>
                <p>
                     8 am - 4 pm
                </p>
            </div>
            <div class="content">
                <div class="welcome">
                    <h2>Welcome </h2>
                    <h3>Diagnose your Patients Here</h3>
            </div>
            </div>
            <div class="side-bar">
                <h2>Patients Waitingin line</h2>
            </div>
            <button id="myBtn" onclick="openModal()">Diagnose</button>

            <div class="modal-confirm" id="myModal">
                <div class="modal-content">
                    <span class="close" id="close" onclick="closeModal()"> &times</span>
                    <p class="parag">You are about to diagnose an emergency.<br> Do you want to continue?</p><br>
                    <button class="button" id="continue" onclick="openModal2()">Continue</button>
                </div>
            </div>

            <div class="modal-diagnose" id="myModal2">
                <div class="modal2-content">
                    <span class="close" id="close2" onclick="closeModal2()"> &times</span>
                    <h2>Fill in Patient Details</h2>
                    <form action="#">
                        <input type="text" name="name" placeholder="Enter patient's name...">
                        <textarea name="Emergency" id="" cols="30" rows="10" placeholder="Emergency case..."></textarea>
                        <textarea name="medication" id="" cols="30" rows="10" placeholder="Recommended medication..."></textarea>
                        <input type="submit" name="send" value="Submit">
                    </form>

                </div>
            </div>
            <script>
                function openModal(){
                    var modal = document.getElementById("myModal");
                    //var btn = document.getElementById("myBtn");
                    modal.style.display="block";
                }

                function closeModal(){
                    var modal = document.getElementById("myModal");
                    modal.style.display="none";
                }

                function closeModal2(){
                    var modal2 = document.getElementById("myModal2");
                    modal2.style.display="none";
                }

                function openModal2(){
                    var modal = document.getElementById("myModal");
                    modal.style.display="none";
                    var modal2 = document.getElementById("myModal2");
                    modal2.style.display="block";
                }
            </script>
            
        </body>
        <footer>
            <div class="foot">
                <h3>My Doctor's Page</h3>
                <p>This page is meant to reduce the amount of time taken by the patient and the doctor when 
                    a patient is being diagnosed for their disease. Always remember to log out from your account once your shift is finshed.
                    Do not let other people use your profile fpor diagnosis as you will be held accountable for any of their 
                    MISTAKES.
                </p>
                <div>
                    <a href="#">HOME</a><br>
                    <a href="#">PROFILE</a><br>
                    <a href="#">PATIENTS</a><br>
                    <a href="#">LOG OUT </a><br>
                </div>
                <div class="copy"> &copy Ouda 2019</div>
            </div>
        </footer>
    </html>