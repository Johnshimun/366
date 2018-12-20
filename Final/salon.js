// part of part 3
$(function () {
    
    createModel();

   $("button.add").on("click", function(e) {
        //console.log(e);
        $("#modalBox").css("display", "block");
    })
    
         $("button.save").on("click", function(e) {
        var typeId = $("#typeId").val();
        $("button.cancel").on("click", function(e) {
        var typeId = $("#typeId").val();

        var pageData = {
            "race_id": $("#race_id").val(),
            "Date": $("#Date").val(),
            "start_time": $("#start_time").val(), 
            "typeId": typeId,
            "password": $("#password").val(),
            "description": $("#description").val 
        };
           
           $.ajax({
                type: "POST",
                url: "index.php",
                dataType: "json",
                contentType: "application/json",
                data: JSON.stringify(pageData),
                success: function(data, status) {
                   console.log("Got data", data);
                },
                error: function(err) {
                  console.log("Didn't get data", err);
                },
                
                complete: function() {
                    // do this last
                     $("#modalBox").css("display", "none"); 
                },
                
             });
        
    })

// Make a global variable
//var thingData;
  var pagesData; 

    $.ajax({
        type: "GET",
       // url: "https://www.showdeolabs.com/data/csumb/jahenderson/kahoot-pretest.json",
       url: "index.php",
            dataType: "json",
            success: function(data, status) {
        //   thingData == data;
                pagesData= data;
                console.log("Got data", pagesData);
          
                for (var p  in pagesData) {
                    var page = pagesData[p]
              
                        $("#pages table tbody").append(
                         $("<tr>")
                         .append($("<td>")
                            .html(login.race_id))
                          .append($("<td>")
                             .html(page.date))
                         .append($("<td>")
                            .html(page.to_date))  //when I change this box disapears
                          .append($("<td>")
                             .html(page.location))
                          .append(
                              $("<button>")
                              .append( $("<img>")
                            
                              .attr("src", "racing-actions-cancel.png"))
                          ))    
            }
        },
        error: function(err) {
          console.log("Didn't get data", err);
        }
     });
    
    
    
    
})
function createModel() {
            // Get the modal
        

        // Get the button that opens the modal
        var btn=document.getElementById("openButton");

        // Get the <span> element that closes the modal
        var span=document.getElementsByClassName("close")[0];

        // // When the user clicks on the button, open the modal 
        // btn.onclick=function() {
        //     modal.style.display="block";
        // }

        // When the user clicks on <span> (x), close the modal
        span.onclick=function() {
             $("#modalBox").css("display", "none");  
           // modal.style.display="none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick=function(event) {
        var modal=document.getElementById('modalBox');
            if (event.target==modal) {
               $("#modalBox").css("display", "none"); 
                // modal.style.display="none";
            }
        }
}
// function savePage(pageData) {
    
    
// }  $("#pages table tbody").append(
                        //  $("<tr>")
                        //  .append($("<td>")
                        //     .html(login.race_id))
                        //   .append($("<td>")
                        //      .html(page.date))
                        //  .append($("<td>")
                        //     .html(page.start_time)
                        //   .append($("<td>")
                        //      .html(page.location))
                        //   .append(
                        //       $("<button>")
                        //       .append( $("<img>")
                            
                        //       .attr("src", "img/racing-actions-cancel.png"))
                        //   ))    