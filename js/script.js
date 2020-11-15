/*let form = document.getElementById("form")

form.addEventListener("submit", validate);

function validate(event){
	event.preventDefault()
	let p1 = document.getElementById("password").value
	let p2 = document.getElementById("confirm").value

	if(p1!=p2){
		alert("please use the same password")
	}
	else{
		alert("you've succcessfully registered")
	}

}*/


 $("#signup-form").submit( function(event){
        
        event.preventDefault();
        
        if ( $("#password").val() != $("#confirm").val() ){
            alert("Sorry, the two passwords do not match!")
            
            return false;
        }
         
        data = new FormData(this);
        data.append("signup", true);





		$.ajax({
		  url: 'server.php',
		  data: data,
		  processData: false,
		  contentType: false,
		  type: 'POST',
		  success: function(response){
		    console.log(response);
		  }
		});
     
     
      
}); 


 $("#login-form").submit( function(event){
        
        event.preventDefault();
 
         
        data = new FormData(this);
        data.append("login", true);





		$.ajax({
		  url: 'server.php',
		  data: data,
		  processData: false,
		  contentType: false,
		  type: 'POST',
		  success: function(response){
		  	response = JSON.parse(response);
		    //console.log(response.message);

		    if(response.status == "success")
		    	window.location = "account"
		    else
		    	alert(response.message)
		  }
		});
     
     
      
}); 