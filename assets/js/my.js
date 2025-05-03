// function payNow() {
//     var orderNumber = Math.floor(Math.random() * 10000000000);
//     var payType = $(".form-check.active").attr('pay-type');
//     var redirect_url = "";
//     var site_name = "Flipkart";
//     var upi_address = UPI_ID;
//     var amt = parseFloat(itemData.selling_price).toFixed(2);

   
   
//   switch (payType) {
//     case 'gpay':
//         redirect_url = "gpay://upi/pay?pa=" + upi_address + "&pn=flipkart&am=" + amt + "&mc=8999&cu=INR&tn=6201191279&sign=AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr";
//         break;

//     case 'phonepe':
//         redirect_url = "phonepe://pay?pa=" + upi_address + "&pn=flipkart&am=" + amt + "&mc=8999&cu=INR&tn=6201191279&sign=AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr";
//         break;

//     case 'paytm':
//         redirect_url = "paytm://pay?pa=" + upi_address + "&pn=flipkart&am=" + amt + "&mc=8999&cu=INR&tn=6201191279&sign=AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr";
//         break;

//     case 'bhim_upi':
//         redirect_url = "bhim://upi/pay?pa=" + upi_address + "&pn=flipkart&am=" + amt + "&mc=8999&cu=INR&tn=6201191279&sign=AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr";
//         break;

//     case 'whatsapp_pay':
//         redirect_url = "whatsapp://pay?pa=" + upi_address + "&pn=flipkart&am=" + amt + "&mc=8999&cu=INR&tn=6201191279&sign=AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr";
//         break;

//     default:
//         redirect_url = ""; // or handle default case accordingly
//         break;
// }