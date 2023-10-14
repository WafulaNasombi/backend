<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <style>
      .content {
    width: 330px;
    padding: 40px 30px;
    background: #dde1e7;
    border-radius: 10px;
    box-shadow: -3px -3px 7px #ffffff73,
                 2px 2px 5px rgba(94,104,121,0.288);

                 position: absolute;
                 top: 50%;
                 left: 50%;
                 width: 400px;
                 padding: 40px;
                 transform: translate(-50%, -50%);
                 box-sizing: border-box;
                 border-radius: 10px;
  }
  
  .content .text {
    font-size: 33px;
    font-weight: 600;
    margin-bottom: 35px;
    color: #595959;
  }
  
  .field {
    height: 50px;
    width: 100%;
    display: flex;
    position: relative;
  }
  ::placeholder{
    text-align: center;
    font-size: 25px;
  }
  
  .field .input {
    height: 100%;
    width: 100%;
    padding-left: 20px;
    padding-right: 15px;
    outline: none;
    border: none;
    font-size: 18px;
    background: #dde1e7;
    color: #595959;
    border-radius: 25px;
    box-shadow: inset 2px 2px 5px #BABECC,
                inset -5px -5px 10px #ffffff73;
  }
  
  .field .input:focus {
    box-shadow: inset 1px 1px 2px #BABECC,
                inset -1px -1px 2px #ffffff73;
  }
  
  .field .span {
    position: absolute;
    color: #595959;
    width: 50px;
    line-height: 55px;
  }
  
  .field .label {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 45px;
    pointer-events: none;
    color: #666666;
  }
  
  .field .input:valid ~ label {
    opacity: 0;
  }
  
  .button {
    margin: 15px 0;
    width: 100%;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    font-weight: 600;
    background: #dde1e7;
    border-radius: 25px;
    border: none;
    outline: none;
    cursor: pointer;
    color: #595959;
    box-shadow: 2px 2px 5px #BABECC,
               -5px -5px 10px #ffffff73;
  }
  
  .button:focus {
    color: #3498db;
    box-shadow: inset 2px 2px 5px #BABECC,
               inset -5px -5px 10px #ffffff73;
  }

  #phoneNumbers {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
  }
  </style>
</head>
<body>
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="content">
        <div class="text">
           SMS Form
        </div>
        <form action="#">
         <div class="" id="phoneNumbers">
           <div class="field">
              <input type="tel" class="input" placeholder="01-234-56-789" name="phoneNumber[]" id="phone" pattern="[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
           </div>
         </div>

           <button type="button" class="button" onclick="addPhoneNumber()">Add Phone Number</button>
           <div class="field">
              <textarea required="" class="input" placeholder="Textarea" rows="5"></textarea>
           </div>
           <button class="button">Send</button>
        </form>
     </div>
     <script>
        function addPhoneNumber() {
            // Create a new input field for a phone number
            var div = document.createElement("div");
            div.classList.add("field");
            var input = document.createElement("input");
            input.type = "tel";
            input.name = "phoneNumber[]";
            input.placeholder = "01-234-56-789";
            input.classList.add("input");          
            // Append the new input field to the 'phoneNumbers' div
            div.appendChild(input);
            document.getElementById("phoneNumbers").appendChild(div);
        }
    </script>
</body>
</html>