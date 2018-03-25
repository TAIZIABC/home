/**
 * Created by taizi on 2017/10/16.
 */
var http=require("http");
const fs=require("fs");
var server=http.createServer(function(req,res){
    var filename="www"+req.url;
    fs.readFile(filename,function(err,data){
        if(err){
            res.write("404");
        }
        else{
            res.write(data);
        }
        res.end();
    });

}).listen(8888);
