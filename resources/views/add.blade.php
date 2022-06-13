@extends('main')
@section('container')

<style>
    /* 64ac15 */
*,
*:before,
*:after {
  box-sizing: border-box;
}

body {
 
  color:white;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

/* input[type=submit] {
  background-color: white;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
} */

.container {
  display: flex;
  height: 100vh;

}
input[type="file"] {
    display: none;
}


.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

.left {
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  margin-left: 60px;
  
}

.right {
  flex: 1;
  background-color: black;
  transition: 1s;
  background-image: url(https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  margin-top: 60px;
  margin-left: 100px
}

.header {
  margin: 0;
  color: red;
}

.form {
  max-width: 100%;
  display: flex;
  flex-direction: column;
}

  button {
  padding: 12px 10px;
  border: 0;
  background: linear-gradient(to right, #de48b5 0%,#0097ff 100%); 
  border-radius: 3px;
  margin-top: 10px;
  color: #fff;
  letter-spacing: 1px;
  font-family: 'Rubik', sans-serif;
}

.form-field {
  height: 46px;
  padding: 0 16px;
  border: 2px solid #ddd;
  border-radius: 4px;
  font-family: 'Rubik', sans-serif;
  outline: 0;
  transition: .2s;
  margin-top: 20px;
}

.form-field:focus {
  border-color: #0f7ef1;
}

.animation {
  animation-name: move;
  animation-duration: .4s;
  animation-fill-mode: both;
  animation-delay: 2s;
}

.a1{
  animation-delay: 2s;
}

.a2 {
  animation-delay: 2.1s;
}

.a3 {
  animation-delay: 2.2s;
}

.a4 {
  animation-delay: 2.3s;
}

.a5 {
  animation-delay: 2.4s;
}

.a6 {
  animation-delay: 2.5s;
}

</style>
<div class="container">
  <div class="left">
    <div class="header">
  <form action="{{ url('hotels') }}" method="post" enctype="multipart/form-data">
      @csrf
  
     <h2 class="animation a1"> Hotel</h2>
    </div>
    <div class="form">
        <input class="form-field animation a2" type="text" placeholder="Hotel Name" name="name"/>
        <h4>Cover</h4>
        <label class="custom-file-upload">Choose File
              <input class="form-control form-field animation 3" type="file" id="image" name="image"  " >
        </label><br><br>
  
        <input class="form-field animation 4" type="text" placeholder="Location" name="location"/>
        <input class="form-field animation 5" type="text" placeholder="Price" name="price"/>
        <label for="">Shower</label>
        <input type="radio" value="Kingbed" placeholder="Price" name="facilate"/>
        <label for="">Wifi</label>
        <input type="radio" value="Bathup" placeholder="Price" name="facilate"/>
        <textarea name="synopsis" id="" cols="30" rows="10"></textarea>
        <button class="animation a6" type="submit">submit</button>
    </div>
    </div>

    <div class="right"></div>
  </div>
   
  </form>
</div>