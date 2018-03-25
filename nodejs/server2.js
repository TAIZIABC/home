/**
 * Created by taizi on 2017/10/20.
 */
var express=require("express");
const serverStatic=require("express-static");
var server = express();
server.listen(8088);
server.use(serverStatic("./www"));