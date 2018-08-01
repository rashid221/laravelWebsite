

<!DOCTYPE html>
<html>
<head>
    <title>Dark</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('/bootstrap-4/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/bootstrap-4/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{url('/bootstrap-4/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
       .icon-bar {
           width: 100%;
           background-color: white;
           overflow: auto;

       }
       .icon-bar a{
           float: right;
           width: 20%;
           text-align: center;
           padding: 5px;
           color: grey;
           font-size: 25px;
       }
       .icon-bar a:hover{
           background-color: orange;
       }



       #myInput {

           background-position: 10px 1px;
           background-repeat: no-repeat;
           width: 40%;
           font-size: 16px;
           padding: 0px 20px 1px 47px;
           border: 2px solid orange;
           margin: 12px 10px 2px 3px;
       }
         .btn{

             background-color: white;
             border: 1px solid orange;
             padding: 0px 30px;
             cursor: pointer;
             font-size: 20px;
         }


         .btn:hover{
             background-color: orangered;

         }
       table {
           font-family: arial, sans-serif;
           border-collapse: collapse;
           width: 100%;
           border: 1px solid #ddd;
       }

       td, th {
           border-bottom: 1px solid #ddd;
           text-align: left;
           padding: 8px;
           color: grey;
       }
        tr:hover{
            background-color: lightgrey;
        }



       ul {
            list-style-type:none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: white;
        }
        li{
            float: left;
        }
        li a {
            display: block;
            color: dimgrey;
            text-align: center;
            padding: 8px;


            text-decoration: none;
            list-style-type: none;

        }
        li a:hover {
            background-color: white;
            color:orange;
        }
    </style>





</head>
<body>
<div class="row">



        <div class="col-lg-12" style="background-color:white; height: 650px; border-color">
            <div class="col-lg-12" style="background-color:white; height: 50px; padding:0; ">
                <div class="row">
                <div class="col-lg-3" style="background-color:white; height: 50px;">

                    <img src="Unihy.jpg" alt="logo"  style="padding-left: 116px;">
                   </div>

                <div class="col-lg-6" style="background-color:white; height: 50px;padding-left: 0px; ">
                    <ul>
                        <li><a href="#home" style="font-size: 18px; padding-right: 24px;">Home</a></li>
                        <li><a href="#Messages" style="font-size: 18px; padding-right: 24px;">Messages</a></li>
                        <li><a href="#Reports" style="font-size: 18px; padding-right: 24px;">Reports</a></li>
                        <li><a href="Billing" style="font-size: 18px; padding-right: 24px;">Billing</a></li>

                    </ul>


                </div>
                    <div class="col-lg-3" style="background-color:white; height: 50px; padding-left: 0px;">
                        <span>
                        <div class="icon-bar" style="padding-bottom: 24px;">
                            <a href="#"><i class="fa fa-user"></i></a>
                            <a href="#"><i class="fa fa-bell" ></i></a>
                            <a href="#"><i class="fa fa-question-circle" ></i></a>
                        </div>
                            </span>
                    </div>
            </div></div>
            <div class="col-lg-12" style="background-color:white; height: 90px;">
<div class="row">
    <div class="col-lg-6" style="background-color:white; height: 90px; ">
        <div class="row">
            <div class="col-lg-9" style="background-color:white; height: 90px;">
        <h2 style="padding-left: 98px;">Senior Android Developer</h2></div>
          <ul>
              <li><a href="#edit" style="padding-top: 33px; padding-left: 0px;">edit</a></li>
          </ul>

        </div>



                </div>

</div>
            <div class="row">
            <div class="col-lg-12" style="background-color:grey; height: 120px">
                <div class="row">
                    <div class="col-lg-6" style="background-color:ghostwhite; height: 120px">
                        <div class="container">

                            <input type="text" id="myInput" placeholder="Search Profiles"  style="margin-top:52px; margin-left: 88px; padding-top: 5px; padding-bottom: 5px;">
                        </div>
                    </div>
                    <div class="col-lg-6" style="background-color:ghostwhite; height: 120px">
                    <div class="row">

                            <div class="container" style="padding-left: 161px;">
                            <button class="btn" style="margin-top: 48px; color: orange; padding-top: 5px; padding-bottom: 5px; padding-left: 24px;"><i class="fa fa-download" style="padding-right: 12px;"></i>Download</button>
                        <button class="btn" style="margin-top: 48px; background-color: orange; color: white; padding-top: 5px; padding-bottom: 5px; padding-right: 23px;"><i class="fa fa-bullhorn" style="padding-right: 12px; padding-left: 0px;"></i>BROADCAST</button></div>
                    </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-12" style="background-color:ghostwhite; height: 510px">
                <div class="container" style="padding-left: 0px;">
                    <div class="container">
                        <ul class="nav nav-tabs" style="border: 1px solid #ddd;">
                            <li><a data-toggle="tab" href="#SUBMITTED">SUBMITTED</a></li>
                            <li><a data-toggle="tab" href="#PENDING">PENDING</a></li>
                            <li><a data-toggle="tab" href="#SHORTLISTED">SHORTLISTED</a></li>
                            <li><a data-toggle="tab" href="#TO">TO BE OFFERED</a></li>
                            <li><a data-toggle="tab" href="#OFFERED">OFFERED</a></li>
                            <li><a data-toggle="tab" href="#HIRED">HIRED</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="SUBMITTED" class="tab-pane fade in active">
                                <table>
                                    <tr>
                                        <th>Consultant</th>
                                        <th>Offered fee</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Current Role</th>
                                        <th>Current CTC</th>
                                        <th>Notice Period</th>

                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr style="background-color: red;">
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                </table>

                            </div>
                            <div id="PENDING" class="tab-pane fade">
                                <table>
                                    <tr>
                                        <th>Consultant</th>
                                        <th>Offered fee</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Current Role</th>
                                        <th>Current CTC</th>
                                        <th>Notice Period</th>

                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>20%</td>
                                        <td>Ravi Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="SHORTLISTED" class="tab-pane fade">
                                <table>
                                    <tr>
                                        <th>Consultant</th>
                                        <th>Offered fee</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Current Role</th>
                                        <th>Current CTC</th>
                                        <th>Notice Period</th>

                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>80%</td>
                                        <td>Viv Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="TO" class="tab-pane fade">
                                <table>
                                    <tr>
                                        <th>Consultant</th>
                                        <th>Offered fee</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Current Role</th>
                                        <th>Current CTC</th>
                                        <th>Notice Period</th>

                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="OFFERED" class="tab-pane fade">
                                <table>
                                    <tr>
                                        <th>Consultant</th>
                                        <th>Offered fee</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Current Role</th>
                                        <th>Current CTC</th>
                                        <th>Notice Period</th>

                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="HIRED" class="tab-pane fade">
                                <table>
                                    <tr>
                                        <th>Consultant</th>
                                        <th>Offered fee</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Current Role</th>
                                        <th>Current CTC</th>
                                        <th>Notice Period</th>

                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                    <tr>
                                        <td>Competence Solutions</td>
                                        <td>8%</td>
                                        <td>Vivek Saxena</td>
                                        <td>8131304140</td>
                                        <td>Lead Developer</td>
                                        <td>12.15 L</td>
                                        <td>90 Days</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
          </div>







            </div>




        </div>




</div>




</body>

</html>