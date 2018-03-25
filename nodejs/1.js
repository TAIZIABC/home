var http = require("http");

http.createServer(function(req,res){
    res.write("abc");
    res.end();
}).listen(8888);
