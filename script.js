function setMap(object){

        var city=object.id;

        var la="";
        var ln="";

            if(city==="NYC")

          {     la=40.749016;
                ln=-73.987703;
          
          }

            if(city==="LA"){
                la=33.946460;
                ln=-118.384293;
            }

            if(city==="CH"){
                la=41.894982;
                ln=-87.628101;
            }



            if(city==="BO"){
                la=42.346079;
                ln=-71.043009;
            }


            var town = {lat:la, lng: ln};
            
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 18, center: town});
            
            var marker = new google.maps.Marker({position: town, map: map});



             }




             function add(object){

             var item=object.id;
                   
            var price=parseFloat(document.getElementById(item+" price").innerHTML.replace("$","").replace(",","."));
            var tot=parseFloat(document.getElementById("amount").innerText);
            
            document.getElementById("orders").innerHTML+="<br><span style='float:left;font-size: 15px;'>"
            +item+"</span><span style='float:right;font-size: 15px;margin-right: 15px;'>"+price+"</span><br id='lilhelp'>";
            

                    document.getElementById("r_text").value+="<p>"+item+"-"+price+"$</p>";
         
            
            document.getElementById("help").value=(tot+price).toFixed(2)+"$";      
            document.getElementById("amount").innerHTML=(tot+price).toFixed(2)+"$";
            
            
      

             }

 
        
             

           function cancel_o(row){    
                
             var r=row.id;
             var rn=row.name;
        var check=confirm("Do you really want to cancel the order?");

        if(check==true){
             
             $("#r"+row.id).hide();
            $.ajax({
                        type: "POST",
                        url: 'order_cancel.php',
                        data: {name: document.getElementById(rn+"_table").rows[r].cells[0].innerHTML,
                                adress :document.getElementById(rn+"_table").rows[r].cells[1].innerHTML,
                                phone: document.getElementById(rn+"_table").rows[r].cells[2].innerHTML,
                                price: document.getElementById(rn+"_table").rows[r].cells[3].innerHTML,
                                date: document.getElementById(rn+"_table").rows[r].cells[4].innerHTML,
                                track_code: document.getElementById(rn+"_table").rows[r].cells[5].innerHTML,
                                status: document.getElementById(rn+"_table").rows[r].cells[6].innerHTML,
                                receipt_text: document.getElementById(rn+"_table").rows[r].cells[7].innerHTML,},
                        success: function(data){
                                    alert(data);
                            
                        }
                        
                    });}

                  
               
               
            }
            
            function deliver_o(row){    
                
             var r=row.id;
             var rn=row.name;
                $("#r"+row.id).hide();
               $.ajax({
                           type: "POST",
                           url: 'order_deliver.php',
                           data: {name: document.getElementById(rn+"_table").rows[r].cells[0].innerHTML,
                           adress :document.getElementById(rn+"_table").rows[r].cells[1].innerHTML,
                           phone: document.getElementById(rn+"_table").rows[r].cells[2].innerHTML,
                           price: document.getElementById(rn+"_table").rows[r].cells[3].innerHTML,
                           date: document.getElementById(rn+"_table").rows[r].cells[4].innerHTML,
                           track_code: document.getElementById(rn+"_table").rows[r].cells[5].innerHTML,
                           status: document.getElementById(rn+"_table").rows[r].cells[6].innerHTML,
                           receipt_text: document.getElementById(rn+"_table").rows[r].cells[7].innerHTML,},
                           success: function(data){
                             
                                      
                           }
                           
                       });
                    
               
                
                    
                    }
   
                       
                  
                  
$(document).ready(function(e){

    $("#s").click(function(){

             $("#dat").show();
            var x=$("#t_code").val();
            $.ajax({

                type:'POST',
                url:'track.php',
                data: 'code='+x,
                success:function(data){

                    $("#dat").html(data);

                },
            });
    });
});
              



function fire(object){

    var name=object.id;

            
            $.ajax({

                type:'POST',
                url:'fire_employee.php',
                data: {emp: name},
                success:function(data){

               alert(data);

                },
            });
    
};
           
               


