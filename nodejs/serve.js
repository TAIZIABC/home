/**
 * Created by taizi on 2017/10/18.
 */
var http = require("http");
const fs = require("fs");
const urlLib=require("url");
const queryString=require('querystring');
var server = http.createServer(function(req,res){
    var obj = urlLib.parse(req.url,true);
    //GET方式
     var url = obj.pathname;
    const GET = obj.query;

    //POST方式
    var str="";
    req.on("data",function(data){
        str+=data;
    });
    req.on("end",function(){
        const POST=queryString.parse(str);
    });

    var filename = "www"+url;
    fs.readFile(filename,function(err,data){
        if(err){
            res.write("404");
        }
        else{
            res.write(data);
        }
        res.end();
    })
}).listen(8088);