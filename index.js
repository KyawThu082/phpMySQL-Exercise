$(document).ready(function(){
    $("#submitbtn1").click(function(){
        //get information in button click event
        var id= $("#eid").val();
        var name= $("#name").val();
        var city= $("#city").val();
        var year= $("#year").val();

        console.log(id+"\n"+name+"\n"+city+"\n"+year);

        if(!id) {alert("Invalid ID"); return false;}
        else if (!name) {alert("Invalid Name"); return false;}
        else if (!city) {alert("Invalid City"); return false;}
        else if (!year) {alert("Invalid Year"); return false;}

        //if all data is founc then send to data to another php file for storing into DB

        $.ajax({
            type: 'POST',
            data:{
                "sid":id,
                "name":name,
                "city":city,
                "year":year,
            },
            url:"./add.php",
            dataType:'json',
            success: function(result){
                if(result['error']==0) alert("Inserted Successfully")
                else alert("Not Inserted ! Something Problem");

            },
        });

    });


    $("#displaybtn").click(function(){
        window.location = "./display.php"
});

$("#updatebtn").click(function(){
    var uid= $("#uid").val();
    var uname= $("#uname").val();

    if(!uid) {
        alert("Invalid ID"); 
        return false;
    } else if (!uname) {
        alert("Invalid Name");
         return false;
        }    
    
        $.ajax({
            type: 'POST',
            data:{
                uid:uid,
                uname:uname,                
            },
            url:"./update.php",
            dataType:'json',
            success: function(result){
                if(result['error']==0) alert("Updated Successfully");
                else alert("Not Inserted ! Something Problem");
            },
        });
    });

    
$("#deletebtn").click(function(){
    var did= $("#did").val();
    
    if(!did) {
        alert("Invalid ID"); 
        return false;
    }  
    
        $.ajax({
            type: 'POST',
            data:{
                did:did,                               
            },
            url:"./delete.php",
            dataType:'json',
            success: function(result){
                if(result['error']==0) alert("Deleted Successfully");
                else alert("Not Inserted ! Something Problem");
            },
        });
    });
});