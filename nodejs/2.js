/**
 * Created by taizi on 2017/10/16.
 */
const  fs = require("fs");
fs.readFile("aaa.txt",function(err,data){
   if(err){
       console.log(err);
   }
    else{
       console.log(data.toString());
   }
});