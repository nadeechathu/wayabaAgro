<!DOCTYPE html>
<html>
<head>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
    h1{
        text-align : center;
    }
    #orders {
  
  border-collapse: collapse;
  width: 100%;
}

#orders td, #orders th {
  border: 1px solid #ddd;
  padding: 8px;
}

#orders tr:nth-child(even){background-color: #f2f2f2;}

#orders tr:hover {background-color: #ddd;}

#orders th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #060819;
  color: white;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 70%;
  margin:0 auto;
}


.container {
  padding: 2px 16px;
}

.order-details {
    width:100%;
    margin:15px 0 15px 0;
}
.prices {
    width:20%;
    float:left;
}
.amount {
    width:50%;
    display:inline;
}
.mail-button {
    background-color: #060819;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    
}
.button-div {
    width:100%;
    text-align:center;
}
.heading-div {
    background-color: #060819;
    color: white;
    width: 70%;
  margin:0 auto;
  padding:1px;
}
</style>
</head>
<body>
   


<div class="heading-div">
  <table style="width:100%;">
    <tr>
      <td style="width:70px;">
      <img src="{{$details['logo']}}" alt="logo" style="width:70px;padding-top:5px;"></td>
      <td style="padding-left: 120px;">
      <h1 style="text-align:left;"><a href="{{URL::to('/')}}" target="_blank" style="color:#ffffff; text-decoration:none;">{{ strtoupper(config('app.name')) }}</a> </h1>
      </td>
    </tr>
  </table>


</div>



<div class="card">
  <div class="container">


    <h3>{{$details['introduction']}}</h3>

    <p>{{$details['body']}}</p> 

        <p>Follow the following link to proceed password reset. Thank you.</p><br/>

        <div class="button-div">
        <a href="{{$details['link']}}"> <button class="mail-button">Proceed To Password Reset</button></a>
        </div>

        <br>
        Note : This is an auto generated email from {{ config('app.name') }}
  </div>
</div>

</body>
</html>





