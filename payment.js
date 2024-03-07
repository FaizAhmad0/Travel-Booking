// const paymentStart = () => {
//     console.log("payment started..");
//     let amount = $("#amountBox").val();
//     console.log(amount);

//     // if the amount section is empty or null then
//     if(amount =="" || amount == null){
//         alert("Please enter the amount!");
//         return;
//     }

//     // and if the amount is fill the send request to the server
//     // we will use ajax to send request to server to create order jquery

//     $.ajax(
//         {   
//             url:'user/create_order', // some change = = :
//             data:JSON.stringify({amount:amount,info:'order_request'}),
//             contentType:'application/json',
//             type:'POST',
//             dataType:'json',
//             success:function(response){
//                 // invoked when success
//                 console.log(response);
//             },


//             error:function(error){
//                 // invoked when error
//                 alert("something went wrong!");
//             }

//         }
//     )
// };




